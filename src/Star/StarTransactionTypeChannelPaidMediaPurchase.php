<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\Paid\PaidMedia;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The transaction is a purchase of paid media from a channel by the current user; for regular users only.
 */
class StarTransactionTypeChannelPaidMediaPurchase extends StarTransactionType
{
    public const TYPE_NAME = 'starTransactionTypeChannelPaidMediaPurchase';

    public function __construct(
        /**
         * Identifier of the channel chat that sent the paid media.
         */
        protected int   $chatId,
        /**
         * Identifier of the corresponding message with paid media; can be 0 or an identifier of a deleted message.
         */
        protected int   $messageId,
        /**
         * The bought media if the transaction wasn't refunded.
         *
         * @var PaidMedia[]
         */
        protected array $media
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeChannelPaidMediaPurchase
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['media']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'message_id' => $this->messageId,
            'media'      => array_map(static fn($x) => $x->typeSerialize(), $this->media),
        ];
    }
}
