<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Payment;

use Totaldev\TgSchema\Invoice\Invoice;
use Totaldev\TgSchema\Order\OrderInfo;
use Totaldev\TgSchema\Saved\SavedCredentials;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The payment form is for a regular payment.
 */
class PaymentFormTypeRegular extends PaymentFormType
{
    public const TYPE_NAME = 'paymentFormTypeRegular';

    public function __construct(
        /**
         * Full information about the invoice.
         */
        protected Invoice         $invoice,
        /**
         * User identifier of the payment provider bot.
         */
        protected int             $paymentProviderUserId,
        /**
         * Information about the payment provider.
         */
        protected PaymentProvider $paymentProvider,
        /**
         * The list of additional payment options.
         *
         * @var PaymentOption[]
         */
        protected array           $additionalPaymentOptions,
        /**
         * Saved server-side order information; may be null.
         */
        protected ?OrderInfo      $savedOrderInfo,
        /**
         * The list of saved payment credentials.
         *
         * @var SavedCredentials[]
         */
        protected array           $savedCredentials,
        /**
         * True, if the user can choose to save credentials.
         */
        protected bool            $canSaveCredentials,
        /**
         * True, if the user will be able to save credentials, if sets up a 2-step verification password.
         */
        protected bool            $needPassword,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PaymentFormTypeRegular
    {
        return new static(
            TdSchemaRegistry::fromArray($array['invoice']),
            $array['payment_provider_user_id'],
            TdSchemaRegistry::fromArray($array['payment_provider']),
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['additional_payment_options']),
            isset($array['saved_order_info']) ? TdSchemaRegistry::fromArray($array['saved_order_info']) : null,
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['saved_credentials']),
            $array['can_save_credentials'],
            $array['need_password'],
        );
    }

    public function getAdditionalPaymentOptions(): array
    {
        return $this->additionalPaymentOptions;
    }

    public function getCanSaveCredentials(): bool
    {
        return $this->canSaveCredentials;
    }

    public function getInvoice(): Invoice
    {
        return $this->invoice;
    }

    public function getNeedPassword(): bool
    {
        return $this->needPassword;
    }

    public function getPaymentProvider(): PaymentProvider
    {
        return $this->paymentProvider;
    }

    public function getPaymentProviderUserId(): int
    {
        return $this->paymentProviderUserId;
    }

    public function getSavedCredentials(): array
    {
        return $this->savedCredentials;
    }

    public function getSavedOrderInfo(): ?OrderInfo
    {
        return $this->savedOrderInfo;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                    => static::TYPE_NAME,
            'invoice'                  => $this->invoice->typeSerialize(),
            'payment_provider_user_id' => $this->paymentProviderUserId,
            'payment_provider'         => $this->paymentProvider->typeSerialize(),
            array_map(static fn($x) => $x->typeSerialize(), $this->additionalPaymentOptions),
            'saved_order_info'         => $this->savedOrderInfo ?? null,
            array_map(static fn($x) => $x->typeSerialize(), $this->savedCredentials),
            'can_save_credentials'     => $this->canSaveCredentials,
            'need_password'            => $this->needPassword,
        ];
    }
}
