<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9f4fbd40d285907cc278c858e910d5af
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MercadoPago\\Woocommerce\\' => 24,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MercadoPago\\Woocommerce\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'MercadoPago\\Woocommerce\\Admin\\Settings' => __DIR__ . '/../..' . '/src/Admin/Settings.php',
        'MercadoPago\\Woocommerce\\Autoloader' => __DIR__ . '/../..' . '/src/Autoloader.php',
        'MercadoPago\\Woocommerce\\Blocks\\AbstractBlock' => __DIR__ . '/../..' . '/src/Blocks/AbstractBlock.php',
        'MercadoPago\\Woocommerce\\Blocks\\BasicBlock' => __DIR__ . '/../..' . '/src/Blocks/BasicBlock.php',
        'MercadoPago\\Woocommerce\\Blocks\\CreditsBlock' => __DIR__ . '/../..' . '/src/Blocks/CreditsBlock.php',
        'MercadoPago\\Woocommerce\\Blocks\\CustomBlock' => __DIR__ . '/../..' . '/src/Blocks/CustomBlock.php',
        'MercadoPago\\Woocommerce\\Blocks\\PixBlock' => __DIR__ . '/../..' . '/src/Blocks/PixBlock.php',
        'MercadoPago\\Woocommerce\\Blocks\\PseBlock' => __DIR__ . '/../..' . '/src/Blocks/PseBlock.php',
        'MercadoPago\\Woocommerce\\Blocks\\TicketBlock' => __DIR__ . '/../..' . '/src/Blocks/TicketBlock.php',
        'MercadoPago\\Woocommerce\\Configs\\Metadata' => __DIR__ . '/../..' . '/src/Configs/Metadata.php',
        'MercadoPago\\Woocommerce\\Configs\\Seller' => __DIR__ . '/../..' . '/src/Configs/Seller.php',
        'MercadoPago\\Woocommerce\\Configs\\Store' => __DIR__ . '/../..' . '/src/Configs/Store.php',
        'MercadoPago\\Woocommerce\\Dependencies' => __DIR__ . '/../..' . '/src/Dependencies.php',
        'MercadoPago\\Woocommerce\\Endpoints\\CheckoutCustom' => __DIR__ . '/../..' . '/src/Endpoints/CheckoutCustom.php',
        'MercadoPago\\Woocommerce\\Entities\\Metadata\\PaymentMetadata' => __DIR__ . '/../..' . '/src/Entities/Metadata/PaymentMetadata.php',
        'MercadoPago\\Woocommerce\\Entities\\Metadata\\PaymentMetadataAddress' => __DIR__ . '/../..' . '/src/Entities/Metadata/PaymentMetadataAddress.php',
        'MercadoPago\\Woocommerce\\Entities\\Metadata\\PaymentMetadataCpp' => __DIR__ . '/../..' . '/src/Entities/Metadata/PaymentMetadataCpp.php',
        'MercadoPago\\Woocommerce\\Entities\\Metadata\\PaymentMetadataUser' => __DIR__ . '/../..' . '/src/Entities/Metadata/PaymentMetadataUser.php',
        'MercadoPago\\Woocommerce\\Exceptions\\InvalidCheckoutDataException' => __DIR__ . '/../..' . '/src/Exceptions/InvalidCheckoutDataException.php',
        'MercadoPago\\Woocommerce\\Exceptions\\RejectedPaymentException' => __DIR__ . '/../..' . '/src/Exceptions/RejectedPaymentException.php',
        'MercadoPago\\Woocommerce\\Exceptions\\ResponseStatusException' => __DIR__ . '/../..' . '/src/Exceptions/ResponseStatusException.php',
        'MercadoPago\\Woocommerce\\Gateways\\AbstractGateway' => __DIR__ . '/../..' . '/src/Gateways/AbstractGateway.php',
        'MercadoPago\\Woocommerce\\Gateways\\BasicGateway' => __DIR__ . '/../..' . '/src/Gateways/BasicGateway.php',
        'MercadoPago\\Woocommerce\\Gateways\\CreditsGateway' => __DIR__ . '/../..' . '/src/Gateways/CreditsGateway.php',
        'MercadoPago\\Woocommerce\\Gateways\\CustomGateway' => __DIR__ . '/../..' . '/src/Gateways/CustomGateway.php',
        'MercadoPago\\Woocommerce\\Gateways\\PixGateway' => __DIR__ . '/../..' . '/src/Gateways/PixGateway.php',
        'MercadoPago\\Woocommerce\\Gateways\\PseGateway' => __DIR__ . '/../..' . '/src/Gateways/PseGateway.php',
        'MercadoPago\\Woocommerce\\Gateways\\TicketGateway' => __DIR__ . '/../..' . '/src/Gateways/TicketGateway.php',
        'MercadoPago\\Woocommerce\\Helpers' => __DIR__ . '/../..' . '/src/Helpers.php',
        'MercadoPago\\Woocommerce\\Helpers\\Actions' => __DIR__ . '/../..' . '/src/Helpers/Actions.php',
        'MercadoPago\\Woocommerce\\Helpers\\Cache' => __DIR__ . '/../..' . '/src/Helpers/Cache.php',
        'MercadoPago\\Woocommerce\\Helpers\\Cart' => __DIR__ . '/../..' . '/src/Helpers/Cart.php',
        'MercadoPago\\Woocommerce\\Helpers\\Categories' => __DIR__ . '/../..' . '/src/Helpers/Categories.php',
        'MercadoPago\\Woocommerce\\Helpers\\Country' => __DIR__ . '/../..' . '/src/Helpers/Country.php',
        'MercadoPago\\Woocommerce\\Helpers\\CreditsEnabled' => __DIR__ . '/../..' . '/src/Helpers/CreditsEnabled.php',
        'MercadoPago\\Woocommerce\\Helpers\\Currency' => __DIR__ . '/../..' . '/src/Helpers/Currency.php',
        'MercadoPago\\Woocommerce\\Helpers\\CurrentUser' => __DIR__ . '/../..' . '/src/Helpers/CurrentUser.php',
        'MercadoPago\\Woocommerce\\Helpers\\Date' => __DIR__ . '/../..' . '/src/Helpers/Date.php',
        'MercadoPago\\Woocommerce\\Helpers\\Device' => __DIR__ . '/../..' . '/src/Helpers/Device.php',
        'MercadoPago\\Woocommerce\\Helpers\\Form' => __DIR__ . '/../..' . '/src/Helpers/Form.php',
        'MercadoPago\\Woocommerce\\Helpers\\Images' => __DIR__ . '/../..' . '/src/Helpers/Images.php',
        'MercadoPago\\Woocommerce\\Helpers\\Links' => __DIR__ . '/../..' . '/src/Helpers/Links.php',
        'MercadoPago\\Woocommerce\\Helpers\\Nonce' => __DIR__ . '/../..' . '/src/Helpers/Nonce.php',
        'MercadoPago\\Woocommerce\\Helpers\\Notices' => __DIR__ . '/../..' . '/src/Helpers/Notices.php',
        'MercadoPago\\Woocommerce\\Helpers\\NotificationType' => __DIR__ . '/../..' . '/src/Helpers/NotificationType.php',
        'MercadoPago\\Woocommerce\\Helpers\\Numbers' => __DIR__ . '/../..' . '/src/Helpers/Numbers.php',
        'MercadoPago\\Woocommerce\\Helpers\\PaymentMethods' => __DIR__ . '/../..' . '/src/Helpers/PaymentMethods.php',
        'MercadoPago\\Woocommerce\\Helpers\\PaymentStatus' => __DIR__ . '/../..' . '/src/Helpers/PaymentStatus.php',
        'MercadoPago\\Woocommerce\\Helpers\\Requester' => __DIR__ . '/../..' . '/src/Helpers/Requester.php',
        'MercadoPago\\Woocommerce\\Helpers\\Session' => __DIR__ . '/../..' . '/src/Helpers/Session.php',
        'MercadoPago\\Woocommerce\\Helpers\\Strings' => __DIR__ . '/../..' . '/src/Helpers/Strings.php',
        'MercadoPago\\Woocommerce\\Helpers\\Url' => __DIR__ . '/../..' . '/src/Helpers/Url.php',
        'MercadoPago\\Woocommerce\\Hooks' => __DIR__ . '/../..' . '/src/Hooks.php',
        'MercadoPago\\Woocommerce\\Hooks\\Admin' => __DIR__ . '/../..' . '/src/Hooks/Admin.php',
        'MercadoPago\\Woocommerce\\Hooks\\Blocks' => __DIR__ . '/../..' . '/src/Hooks/Blocks.php',
        'MercadoPago\\Woocommerce\\Hooks\\Cart' => __DIR__ . '/../..' . '/src/Hooks/Cart.php',
        'MercadoPago\\Woocommerce\\Hooks\\Checkout' => __DIR__ . '/../..' . '/src/Hooks/Checkout.php',
        'MercadoPago\\Woocommerce\\Hooks\\Endpoints' => __DIR__ . '/../..' . '/src/Hooks/Endpoints.php',
        'MercadoPago\\Woocommerce\\Hooks\\Gateway' => __DIR__ . '/../..' . '/src/Hooks/Gateway.php',
        'MercadoPago\\Woocommerce\\Hooks\\Options' => __DIR__ . '/../..' . '/src/Hooks/Options.php',
        'MercadoPago\\Woocommerce\\Hooks\\Order' => __DIR__ . '/../..' . '/src/Hooks/Order.php',
        'MercadoPago\\Woocommerce\\Hooks\\OrderMeta' => __DIR__ . '/../..' . '/src/Hooks/OrderMeta.php',
        'MercadoPago\\Woocommerce\\Hooks\\Plugin' => __DIR__ . '/../..' . '/src/Hooks/Plugin.php',
        'MercadoPago\\Woocommerce\\Hooks\\Product' => __DIR__ . '/../..' . '/src/Hooks/Product.php',
        'MercadoPago\\Woocommerce\\Hooks\\Scripts' => __DIR__ . '/../..' . '/src/Hooks/Scripts.php',
        'MercadoPago\\Woocommerce\\Hooks\\Template' => __DIR__ . '/../..' . '/src/Hooks/Template.php',
        'MercadoPago\\Woocommerce\\Interfaces\\LogInterface' => __DIR__ . '/../..' . '/src/Interfaces/LogInterface.php',
        'MercadoPago\\Woocommerce\\Interfaces\\MercadoPagoGatewayInterface' => __DIR__ . '/../..' . '/src/Interfaces/MercadoPagoGatewayInterface.php',
        'MercadoPago\\Woocommerce\\Interfaces\\MercadoPagoPaymentBlockInterface' => __DIR__ . '/../..' . '/src/Interfaces/MercadoPagoPaymentBlockInterface.php',
        'MercadoPago\\Woocommerce\\Interfaces\\NotificationInterface' => __DIR__ . '/../..' . '/src/Interfaces/NotificationInterface.php',
        'MercadoPago\\Woocommerce\\Logs\\LogLevels' => __DIR__ . '/../..' . '/src/Logs/LogLevels.php',
        'MercadoPago\\Woocommerce\\Logs\\Logs' => __DIR__ . '/../..' . '/src/Logs/Logs.php',
        'MercadoPago\\Woocommerce\\Logs\\Transports\\File' => __DIR__ . '/../..' . '/src/Logs/Transports/File.php',
        'MercadoPago\\Woocommerce\\Logs\\Transports\\Remote' => __DIR__ . '/../..' . '/src/Logs/Transports/Remote.php',
        'MercadoPago\\Woocommerce\\Notification\\AbstractNotification' => __DIR__ . '/../..' . '/src/Notification/AbstractNotification.php',
        'MercadoPago\\Woocommerce\\Notification\\CoreNotification' => __DIR__ . '/../..' . '/src/Notification/CoreNotification.php',
        'MercadoPago\\Woocommerce\\Notification\\IpnNotification' => __DIR__ . '/../..' . '/src/Notification/IpnNotification.php',
        'MercadoPago\\Woocommerce\\Notification\\NotificationFactory' => __DIR__ . '/../..' . '/src/Notification/NotificationFactory.php',
        'MercadoPago\\Woocommerce\\Notification\\WebhookNotification' => __DIR__ . '/../..' . '/src/Notification/WebhookNotification.php',
        'MercadoPago\\Woocommerce\\Order\\OrderBilling' => __DIR__ . '/../..' . '/src/Order/OrderBilling.php',
        'MercadoPago\\Woocommerce\\Order\\OrderMetadata' => __DIR__ . '/../..' . '/src/Order/OrderMetadata.php',
        'MercadoPago\\Woocommerce\\Order\\OrderShipping' => __DIR__ . '/../..' . '/src/Order/OrderShipping.php',
        'MercadoPago\\Woocommerce\\Order\\OrderStatus' => __DIR__ . '/../..' . '/src/Order/OrderStatus.php',
        'MercadoPago\\Woocommerce\\Packages' => __DIR__ . '/../..' . '/src/Packages.php',
        'MercadoPago\\Woocommerce\\Transactions\\AbstractPaymentTransaction' => __DIR__ . '/../..' . '/src/Transactions/AbstractPaymentTransaction.php',
        'MercadoPago\\Woocommerce\\Transactions\\AbstractPreferenceTransaction' => __DIR__ . '/../..' . '/src/Transactions/AbstractPreferenceTransaction.php',
        'MercadoPago\\Woocommerce\\Transactions\\AbstractTransaction' => __DIR__ . '/../..' . '/src/Transactions/AbstractTransaction.php',
        'MercadoPago\\Woocommerce\\Transactions\\BasicTransaction' => __DIR__ . '/../..' . '/src/Transactions/BasicTransaction.php',
        'MercadoPago\\Woocommerce\\Transactions\\CreditsTransaction' => __DIR__ . '/../..' . '/src/Transactions/CreditsTransaction.php',
        'MercadoPago\\Woocommerce\\Transactions\\CustomTransaction' => __DIR__ . '/../..' . '/src/Transactions/CustomTransaction.php',
        'MercadoPago\\Woocommerce\\Transactions\\PixTransaction' => __DIR__ . '/../..' . '/src/Transactions/PixTransaction.php',
        'MercadoPago\\Woocommerce\\Transactions\\PseTransaction' => __DIR__ . '/../..' . '/src/Transactions/PseTransaction.php',
        'MercadoPago\\Woocommerce\\Transactions\\TicketTransaction' => __DIR__ . '/../..' . '/src/Transactions/TicketTransaction.php',
        'MercadoPago\\Woocommerce\\Transactions\\WalletButtonTransaction' => __DIR__ . '/../..' . '/src/Transactions/WalletButtonTransaction.php',
        'MercadoPago\\Woocommerce\\Translations\\AdminTranslations' => __DIR__ . '/../..' . '/src/Translations/AdminTranslations.php',
        'MercadoPago\\Woocommerce\\Translations\\StoreTranslations' => __DIR__ . '/../..' . '/src/Translations/StoreTranslations.php',
        'MercadoPago\\Woocommerce\\WoocommerceMercadoPago' => __DIR__ . '/../..' . '/src/WoocommerceMercadoPago.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9f4fbd40d285907cc278c858e910d5af::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9f4fbd40d285907cc278c858e910d5af::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9f4fbd40d285907cc278c858e910d5af::$classMap;

        }, null, ClassLoader::class);
    }
}
