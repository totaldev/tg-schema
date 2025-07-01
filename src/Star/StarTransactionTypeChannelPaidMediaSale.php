<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\Paid\PaidMedia;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The transaction is a sale of paid media by the channel chat; for channel chats only.
 */
class StarTransactionTypeChannelPaidMediaSale extends StarTransactionType
{
    public const TYPE_NAME = 'starTransactionTypeChannelPaidMediaSale';

    public function __construct(
        /**
         * Identifier of the user that bought the media.
         */
        protected int   $userId,
        /**
         * Identifier of the corresponding message with paid media; can be 0 or an identifier of a deleted message.
         */
        protected int   $messageId,
        /**
         * The bought media.
         *
         * @var PaidMedia[]
         */
        protected array $media
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeChannelPaidMediaSale
    {
        return new static(
            $array['user_id'],
            $array['message_id'],
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['media']),
        );
    }

    public function getMedia(): array
    {
        return $this->media;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'user_id'    => $this->userId,
            'message_id' => $this->messageId,
            'media'      => array_map(static fn($x) => $x->typeSerialize(), $this->media),
        ];
    }
}
