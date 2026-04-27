<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\Paid\PaidMedia;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The transaction is a sale of paid media by the channel chat; relevant for channel chats only.
 */
class StarTransactionTypeChannelPaidMediaSale extends StarTransactionType
{
    public const string TYPE_NAME = 'starTransactionTypeChannelPaidMediaSale';

    public function __construct(
        /**
         * The bought media.
         *
         * @var PaidMedia[]
         */
        protected array $media,
        /**
         * Identifier of the corresponding message with paid media; may be 0 or an identifier of a deleted message.
         */
        protected int   $messageId,
        /**
         * Identifier of the user who bought the media.
         */
        protected int   $userId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeChannelPaidMediaSale
    {
        return new static(
            media    : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['media']),
            messageId: $array['message_id'],
            userId   : $array['user_id'],
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

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'media'      => array_map(static fn($x) => $x->jsonSerialize(), $this->media),
            'message_id' => $this->messageId,
            'user_id'    => $this->userId,
        ];
    }
}
