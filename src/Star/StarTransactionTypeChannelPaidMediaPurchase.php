<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\Paid\PaidMedia;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The transaction is a purchase of paid media from a channel by the current user; relevant for regular users only.
 */
class StarTransactionTypeChannelPaidMediaPurchase extends StarTransactionType
{
    public const string TYPE_NAME = 'starTransactionTypeChannelPaidMediaPurchase';

    public function __construct(
        /**
         * Identifier of the channel chat that sent the paid media.
         */
        protected int   $chatId,
        /**
         * The bought media if the transaction wasn't refunded.
         *
         * @var PaidMedia[]
         */
        protected array $media,
        /**
         * Identifier of the corresponding message with paid media; may be 0 or an identifier of a deleted message.
         */
        protected int   $messageId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeChannelPaidMediaPurchase
    {
        return new static(
            chatId   : $array['chat_id'],
            media    : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['media']),
            messageId: $array['message_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMedia(): array
    {
        return $this->media;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setMedia(array $value): static
    {
        $this->media = $value;

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
            'chat_id'    => $this->chatId,
            'media'      => array_map(static fn($x) => $x->jsonSerialize(), $this->media),
            'message_id' => $this->messageId,
        ];
    }
}
