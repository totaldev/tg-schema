<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * A payment has been sent to a bot or a business account.
 */
class MessagePaymentSuccessful extends MessageContent
{
    public const string TYPE_NAME = 'messagePaymentSuccessful';

    public function __construct(
        /**
         * Currency for the price of the product.
         */
        protected string $currency,
        /**
         * Identifier of the chat, containing the corresponding invoice message.
         */
        protected int    $invoiceChatId,
        /**
         * Identifier of the message with the corresponding invoice; can be 0 or an identifier of a deleted message.
         */
        protected int    $invoiceMessageId,
        /**
         * Name of the invoice; may be empty if unknown.
         */
        protected string $invoiceName,
        /**
         * True, if this is the first recurring payment.
         */
        protected bool   $isFirstRecurring,
        /**
         * True, if this is a recurring payment.
         */
        protected bool   $isRecurring,
        /**
         * Point in time (Unix timestamp) when the subscription will expire; 0 if unknown or the payment isn't recurring.
         */
        protected int    $subscriptionUntilDate,
        /**
         * Total price for the product, in the smallest units of the currency.
         */
        protected int    $totalAmount,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessagePaymentSuccessful
    {
        return new static(
            currency             : $array['currency'],
            invoiceChatId        : $array['invoice_chat_id'],
            invoiceMessageId     : $array['invoice_message_id'],
            invoiceName          : $array['invoice_name'],
            isFirstRecurring     : $array['is_first_recurring'],
            isRecurring          : $array['is_recurring'],
            subscriptionUntilDate: $array['subscription_until_date'],
            totalAmount          : $array['total_amount'],
        );
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getInvoiceChatId(): int
    {
        return $this->invoiceChatId;
    }

    public function getInvoiceMessageId(): int
    {
        return $this->invoiceMessageId;
    }

    public function getInvoiceName(): string
    {
        return $this->invoiceName;
    }

    public function getIsFirstRecurring(): bool
    {
        return $this->isFirstRecurring;
    }

    public function getIsRecurring(): bool
    {
        return $this->isRecurring;
    }

    public function getSubscriptionUntilDate(): int
    {
        return $this->subscriptionUntilDate;
    }

    public function getTotalAmount(): int
    {
        return $this->totalAmount;
    }

    public function setCurrency(string $value): static
    {
        $this->currency = $value;

        return $this;
    }

    public function setInvoiceChatId(int $value): static
    {
        $this->invoiceChatId = $value;

        return $this;
    }

    public function setInvoiceMessageId(int $value): static
    {
        $this->invoiceMessageId = $value;

        return $this;
    }

    public function setInvoiceName(string $value): static
    {
        $this->invoiceName = $value;

        return $this;
    }

    public function setIsFirstRecurring(bool $value): static
    {
        $this->isFirstRecurring = $value;

        return $this;
    }

    public function setIsRecurring(bool $value): static
    {
        $this->isRecurring = $value;

        return $this;
    }

    public function setSubscriptionUntilDate(int $value): static
    {
        $this->subscriptionUntilDate = $value;

        return $this;
    }

    public function setTotalAmount(int $value): static
    {
        $this->totalAmount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'currency'                => $this->currency,
            'invoice_chat_id'         => $this->invoiceChatId,
            'invoice_message_id'      => $this->invoiceMessageId,
            'invoice_name'            => $this->invoiceName,
            'is_first_recurring'      => $this->isFirstRecurring,
            'is_recurring'            => $this->isRecurring,
            'subscription_until_date' => $this->subscriptionUntilDate,
            'total_amount'            => $this->totalAmount,
        ];
    }
}
