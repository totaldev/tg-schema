<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Process;

use Totaldev\TgSchema\TdFunction;

/**
 * Handles a pending gift purchase offer.
 */
class ProcessGiftPurchaseOffer extends TdFunction
{
    public const string TYPE_NAME = 'processGiftPurchaseOffer';

    public function __construct(
        /**
         * Pass true to accept the request; pass false to reject it.
         */
        protected bool $accept,
        /**
         * Identifier of the message with the gift purchase offer.
         */
        protected int  $messageId,
    ) {}

    public static function fromArray(array $array): ProcessGiftPurchaseOffer
    {
        return new static(
            accept   : $array['accept'],
            messageId: $array['message_id'],
        );
    }

    public function getAccept(): bool
    {
        return $this->accept;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function setAccept(bool $value): static
    {
        $this->accept = $value;

        return $this;
    }

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'accept'     => $this->accept,
            'message_id' => $this->messageId,
        ];
    }
}
