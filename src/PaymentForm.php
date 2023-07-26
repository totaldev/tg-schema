<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Contains information about an invoice payment form
 */
class PaymentForm extends TdObject
{
    public const TYPE_NAME = 'paymentForm';

    /**
     * The payment form identifier
     *
     * @var int
     */
    protected int $id;

    /**
     * Full information about the invoice
     *
     * @var Invoice
     */
    protected Invoice $invoice;

    /**
     * User identifier of the seller bot
     *
     * @var int
     */
    protected int $sellerBotUserId;

    /**
     * User identifier of the payment provider bot
     *
     * @var int
     */
    protected int $paymentProviderUserId;

    /**
     * Information about the payment provider
     *
     * @var PaymentProvider
     */
    protected PaymentProvider $paymentProvider;

    /**
     * The list of additional payment options
     *
     * @var PaymentOption[]
     */
    protected array $additionalPaymentOptions;

    /**
     * Saved server-side order information; may be null
     *
     * @var OrderInfo|null
     */
    protected ?OrderInfo $savedOrderInfo;

    /**
     * The list of saved payment credentials
     *
     * @var SavedCredentials[]
     */
    protected array $savedCredentials;

    /**
     * True, if the user can choose to save credentials
     *
     * @var bool
     */
    protected bool $canSaveCredentials;

    /**
     * True, if the user will be able to save credentials, if sets up a 2-step verification password
     *
     * @var bool
     */
    protected bool $needPassword;

    /**
     * Product title
     *
     * @var string
     */
    protected string $productTitle;

    /**
     * Product description
     *
     * @var FormattedText
     */
    protected FormattedText $productDescription;

    /**
     * Product photo; may be null
     *
     * @var Photo|null
     */
    protected ?Photo $productPhoto;

    public function __construct(
        int $id,
        Invoice $invoice,
        int $sellerBotUserId,
        int $paymentProviderUserId,
        PaymentProvider $paymentProvider,
        array $additionalPaymentOptions,
        ?OrderInfo $savedOrderInfo,
        array $savedCredentials,
        bool $canSaveCredentials,
        bool $needPassword,
        string $productTitle,
        FormattedText $productDescription,
        ?Photo $productPhoto
    ) {
        $this->id = $id;
        $this->invoice = $invoice;
        $this->sellerBotUserId = $sellerBotUserId;
        $this->paymentProviderUserId = $paymentProviderUserId;
        $this->paymentProvider = $paymentProvider;
        $this->additionalPaymentOptions = $additionalPaymentOptions;
        $this->savedOrderInfo = $savedOrderInfo;
        $this->savedCredentials = $savedCredentials;
        $this->canSaveCredentials = $canSaveCredentials;
        $this->needPassword = $needPassword;
        $this->productTitle = $productTitle;
        $this->productDescription = $productDescription;
        $this->productPhoto = $productPhoto;
    }

    public static function fromArray(array $array): PaymentForm
    {
        return new static(
            $array['id'],
            TdSchemaRegistry::fromArray($array['invoice']),
            $array['seller_bot_user_id'],
            $array['payment_provider_user_id'],
            TdSchemaRegistry::fromArray($array['payment_provider']),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['additionalPaymentOptions']),
            (isset($array['saved_order_info']) ? TdSchemaRegistry::fromArray($array['saved_order_info']) : null),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['savedCredentials']),
            $array['can_save_credentials'],
            $array['need_password'],
            $array['product_title'],
            TdSchemaRegistry::fromArray($array['product_description']),
            (isset($array['product_photo']) ? TdSchemaRegistry::fromArray($array['product_photo']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
            'invoice' => $this->invoice->typeSerialize(),
            'seller_bot_user_id' => $this->sellerBotUserId,
            'payment_provider_user_id' => $this->paymentProviderUserId,
            'payment_provider' => $this->paymentProvider->typeSerialize(),
            array_map(fn($x) => $x->typeSerialize(), $this->additionalPaymentOptions),
            'saved_order_info' => (isset($this->savedOrderInfo) ? $this->savedOrderInfo : null),
            array_map(fn($x) => $x->typeSerialize(), $this->savedCredentials),
            'can_save_credentials' => $this->canSaveCredentials,
            'need_password' => $this->needPassword,
            'product_title' => $this->productTitle,
            'product_description' => $this->productDescription->typeSerialize(),
            'product_photo' => (isset($this->productPhoto) ? $this->productPhoto : null),
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getInvoice(): Invoice
    {
        return $this->invoice;
    }

    public function getSellerBotUserId(): int
    {
        return $this->sellerBotUserId;
    }

    public function getPaymentProviderUserId(): int
    {
        return $this->paymentProviderUserId;
    }

    public function getPaymentProvider(): PaymentProvider
    {
        return $this->paymentProvider;
    }

    public function getAdditionalPaymentOptions(): array
    {
        return $this->additionalPaymentOptions;
    }

    public function getSavedOrderInfo(): ?OrderInfo
    {
        return $this->savedOrderInfo;
    }

    public function getSavedCredentials(): array
    {
        return $this->savedCredentials;
    }

    public function getCanSaveCredentials(): bool
    {
        return $this->canSaveCredentials;
    }

    public function getNeedPassword(): bool
    {
        return $this->needPassword;
    }

    public function getProductTitle(): string
    {
        return $this->productTitle;
    }

    public function getProductDescription(): FormattedText
    {
        return $this->productDescription;
    }

    public function getProductPhoto(): ?Photo
    {
        return $this->productPhoto;
    }
}
