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
    public const TYPE_NAME = 'messagePaymentSuccessful';

    public function __construct(
        /**
         * Identifier of the chat, containing the corresponding invoice message.
         */
        protected int    $invoiceChatId,
        /**
         * Identifier of the message with the corresponding invoice; can be 0 or an identifier of a deleted message.
         */
        protected int    $invoiceMessageId,
        /**
         * Currency for the price of the product.
         */
        protected string $currency,
        /**
         * Total price for the product, in the smallest units of the currency.
         */
        protected int    $totalAmount,
        /**
         * Point in time (Unix timestamp) when the subscription will expire; 0 if unknown or the payment isn't recurring.
         */
        protected int    $subscriptionUntilDate,
        /**
         * True, if this is a recurring payment.
         */
        protected bool   $isRecurring,
        /**
         * True, if this is the first recurring payment.
         */
        protected bool   $isFirstRecurring,
        /**
         * Name of the invoice; may be empty if unknown.
         */
        protected string $invoiceName,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessagePaymentSuccessful
    {
        return new static(
            $array['invoice_chat_id'],
            $array['invoice_message_id'],
            $array['currency'],
            $array['total_amount'],
            $array['subscription_until_date'],
            $array['is_recurring'],
            $array['is_first_recurring'],
            $array['invoice_name'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'invoice_chat_id'         => $this->invoiceChatId,
            'invoice_message_id'      => $this->invoiceMessageId,
            'currency'                => $this->currency,
            'total_amount'            => $this->totalAmount,
            'subscription_until_date' => $this->subscriptionUntilDate,
            'is_recurring'            => $this->isRecurring,
            'is_first_recurring'      => $this->isFirstRecurring,
            'invoice_name'            => $this->invoiceName,
        ];
    }
}
