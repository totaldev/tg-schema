<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Sticker\Sticker;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Toncoins were gifted to a user.
 */
class MessageGiftedTon extends MessageContent
{
    public const string TYPE_NAME = 'messageGiftedTon';

    public function __construct(
        /**
         * The identifier of a user that gifted Toncoins; 0 if the gift was anonymous or is outgoing.
         */
        protected int      $gifterUserId,
        /**
         * The identifier of a user that received Toncoins; 0 if the gift is incoming.
         */
        protected int      $receiverUserId,
        /**
         * A sticker to be shown in the message; may be null if unknown.
         */
        protected ?Sticker $sticker,
        /**
         * The received amount of Toncoins, in the smallest units of the cryptocurrency.
         */
        protected int      $tonAmount,
        /**
         * Identifier of the transaction for Toncoin credit; for receiver only.
         */
        protected string   $transactionId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageGiftedTon
    {
        return new static(
            gifterUserId  : $array['gifter_user_id'],
            receiverUserId: $array['receiver_user_id'],
            sticker       : (isset($array['sticker']) ? TdSchemaRegistry::fromArray($array['sticker']) : null),
            tonAmount     : $array['ton_amount'],
            transactionId : $array['transaction_id'],
        );
    }

    public function getGifterUserId(): int
    {
        return $this->gifterUserId;
    }

    public function getReceiverUserId(): int
    {
        return $this->receiverUserId;
    }

    public function getSticker(): ?Sticker
    {
        return $this->sticker;
    }

    public function getTonAmount(): int
    {
        return $this->tonAmount;
    }

    public function getTransactionId(): string
    {
        return $this->transactionId;
    }

    public function setGifterUserId(int $value): static
    {
        $this->gifterUserId = $value;

        return $this;
    }

    public function setReceiverUserId(int $value): static
    {
        $this->receiverUserId = $value;

        return $this;
    }

    public function setSticker(?Sticker $value): static
    {
        $this->sticker = $value;

        return $this;
    }

    public function setTonAmount(int $value): static
    {
        $this->tonAmount = $value;

        return $this;
    }

    public function setTransactionId(string $value): static
    {
        $this->transactionId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'gifter_user_id'   => $this->gifterUserId,
            'receiver_user_id' => $this->receiverUserId,
            'sticker'          => (null !== $this->sticker ? $this->sticker->jsonSerialize() : null),
            'ton_amount'       => $this->tonAmount,
            'transaction_id'   => $this->transactionId,
        ];
    }
}
