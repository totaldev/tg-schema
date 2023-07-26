<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * A payment has been completed
 */
class MessagePaymentSuccessful extends MessageContent
{
    public const TYPE_NAME = 'messagePaymentSuccessful';

    /**
     * Identifier of the chat, containing the corresponding invoice message
     *
     * @var int
     */
    protected int $invoiceChatId;

    /**
     * Identifier of the message with the corresponding invoice; can be 0 or an identifier of a deleted message
     *
     * @var int
     */
    protected int $invoiceMessageId;

    /**
     * Currency for the price of the product
     *
     * @var string
     */
    protected string $currency;

    /**
     * Total price for the product, in the smallest units of the currency
     *
     * @var int
     */
    protected int $totalAmount;

    /**
     * True, if this is a recurring payment
     *
     * @var bool
     */
    protected bool $isRecurring;

    /**
     * True, if this is the first recurring payment
     *
     * @var bool
     */
    protected bool $isFirstRecurring;

    /**
     * Name of the invoice; may be empty if unknown
     *
     * @var string
     */
    protected string $invoiceName;

    public function __construct(
        int $invoiceChatId,
        int $invoiceMessageId,
        string $currency,
        int $totalAmount,
        bool $isRecurring,
        bool $isFirstRecurring,
        string $invoiceName
    ) {
        parent::__construct();

        $this->invoiceChatId = $invoiceChatId;
        $this->invoiceMessageId = $invoiceMessageId;
        $this->currency = $currency;
        $this->totalAmount = $totalAmount;
        $this->isRecurring = $isRecurring;
        $this->isFirstRecurring = $isFirstRecurring;
        $this->invoiceName = $invoiceName;
    }

    public static function fromArray(array $array): MessagePaymentSuccessful
    {
        return new static(
            $array['invoice_chat_id'],
            $array['invoice_message_id'],
            $array['currency'],
            $array['total_amount'],
            $array['is_recurring'],
            $array['is_first_recurring'],
            $array['invoice_name'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'invoice_chat_id' => $this->invoiceChatId,
            'invoice_message_id' => $this->invoiceMessageId,
            'currency' => $this->currency,
            'total_amount' => $this->totalAmount,
            'is_recurring' => $this->isRecurring,
            'is_first_recurring' => $this->isFirstRecurring,
            'invoice_name' => $this->invoiceName,
        ];
    }

    public function getInvoiceChatId(): int
    {
        return $this->invoiceChatId;
    }

    public function getInvoiceMessageId(): int
    {
        return $this->invoiceMessageId;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getTotalAmount(): int
    {
        return $this->totalAmount;
    }

    public function getIsRecurring(): bool
    {
        return $this->isRecurring;
    }

    public function getIsFirstRecurring(): bool
    {
        return $this->isFirstRecurring;
    }

    public function getInvoiceName(): string
    {
        return $this->invoiceName;
    }
}
