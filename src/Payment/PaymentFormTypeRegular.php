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
    public const string TYPE_NAME = 'paymentFormTypeRegular';

    public function __construct(
        /**
         * The list of additional payment options.
         *
         * @var PaymentOption[]
         */
        protected array           $additionalPaymentOptions,
        /**
         * True, if the user can choose to save credentials.
         */
        protected bool            $canSaveCredentials,
        /**
         * Full information about the invoice.
         */
        protected Invoice         $invoice,
        /**
         * True, if the user will be able to save credentials, if sets up a 2-step verification password.
         */
        protected bool            $needPassword,
        /**
         * Information about the payment provider.
         */
        protected PaymentProvider $paymentProvider,
        /**
         * User identifier of the payment provider bot.
         */
        protected int             $paymentProviderUserId,
        /**
         * The list of saved payment credentials.
         *
         * @var SavedCredentials[]
         */
        protected array           $savedCredentials,
        /**
         * Saved server-side order information; may be null.
         */
        protected ?OrderInfo      $savedOrderInfo,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PaymentFormTypeRegular
    {
        return new static(
            additionalPaymentOptions: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['additional_payment_options']),
            canSaveCredentials      : $array['can_save_credentials'],
            invoice                 : TdSchemaRegistry::fromArray($array['invoice']),
            needPassword            : $array['need_password'],
            paymentProvider         : TdSchemaRegistry::fromArray($array['payment_provider']),
            paymentProviderUserId   : $array['payment_provider_user_id'],
            savedCredentials        : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['saved_credentials']),
            savedOrderInfo          : (isset($array['saved_order_info']) ? TdSchemaRegistry::fromArray($array['saved_order_info']) : null),
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

    public function setAdditionalPaymentOptions(array $value): static
    {
        $this->additionalPaymentOptions = $value;

        return $this;
    }

    public function setCanSaveCredentials(bool $value): static
    {
        $this->canSaveCredentials = $value;

        return $this;
    }

    public function setInvoice(Invoice $value): static
    {
        $this->invoice = $value;

        return $this;
    }

    public function setNeedPassword(bool $value): static
    {
        $this->needPassword = $value;

        return $this;
    }

    public function setPaymentProvider(PaymentProvider $value): static
    {
        $this->paymentProvider = $value;

        return $this;
    }

    public function setPaymentProviderUserId(int $value): static
    {
        $this->paymentProviderUserId = $value;

        return $this;
    }

    public function setSavedCredentials(array $value): static
    {
        $this->savedCredentials = $value;

        return $this;
    }

    public function setSavedOrderInfo(?OrderInfo $value): static
    {
        $this->savedOrderInfo = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                      => static::TYPE_NAME,
            'additional_payment_options' => array_map(static fn($x) => $x->jsonSerialize(), $this->additionalPaymentOptions),
            'can_save_credentials'       => $this->canSaveCredentials,
            'invoice'                    => $this->invoice->jsonSerialize(),
            'need_password'              => $this->needPassword,
            'payment_provider'           => $this->paymentProvider->jsonSerialize(),
            'payment_provider_user_id'   => $this->paymentProviderUserId,
            'saved_credentials'          => array_map(static fn($x) => $x->jsonSerialize(), $this->savedCredentials),
            'saved_order_info'           => (null !== $this->savedOrderInfo ? $this->savedOrderInfo->jsonSerialize() : null),
        ];
    }
}
