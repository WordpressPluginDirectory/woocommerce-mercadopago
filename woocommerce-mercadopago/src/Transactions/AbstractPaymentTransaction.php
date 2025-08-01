<?php

namespace MercadoPago\Woocommerce\Transactions;

use Exception;
use MercadoPago\Woocommerce\Gateways\AbstractGateway;
use MercadoPago\Woocommerce\Helpers\Numbers;
use WC_Order;

abstract class AbstractPaymentTransaction extends AbstractTransaction
{
    /**
     * Payment Transaction constructor
     * @throws Exception
     */
    public function __construct(AbstractGateway $gateway, WC_Order $order, array $checkout)
    {
        parent::__construct($gateway, $order, $checkout);

        $this->transaction = $this->sdk->getPaymentInstance();

        $this->setCommonTransaction();
        $this->setPayerTransaction();
        $this->setAdditionalInfoTransaction();

        $this->transaction->description        = implode(', ', $this->listOfItems);
        $this->transaction->transaction_amount = Numbers::format($this->orderTotal);
    }

    /**
     * Create Payment
     *
     * @return string|array
     * @throws Exception
     */
    public function createPayment()
    {
        $payment = $this->getTransaction('Payment');
        if (isset($this->checkout['session_id']) && !empty($this->checkout['session_id'])) {
            $payment->__set('session_id', $this->checkout['session_id']);
        }
        $data = $payment->save();
        $this->mercadopago->logs->file->info('Payment created', $this->gateway::LOG_SOURCE, $data);
        return $data;
    }


    /**
     * Set payer transaction
     *
     * @return void
     */
    public function setPayerTransaction(): void
    {
        $payer = $this->transaction->payer;

        $payer->email                  = $this->mercadopago->orderBilling->getEmail($this->order);
        $payer->first_name             = $this->mercadopago->orderBilling->getFirstName($this->order);
        $payer->last_name              = $this->mercadopago->orderBilling->getLastName($this->order);

        $this->setPayerAddressInfo();
    }

    private function setPayerAddressInfo(): void
    {
        $this->transaction->payer->address->city          = $this->mercadopago->orderBilling->getCity($this->order);
        $this->transaction->payer->address->federal_unit  = $this->mercadopago->orderBilling->getState($this->order);
        $this->transaction->payer->address->zip_code      = $this->mercadopago->orderBilling->getZipcode($this->order);
        $this->transaction->payer->address->street_name   = $this->mercadopago->orderBilling->getFullAddress($this->order);
    }
}
