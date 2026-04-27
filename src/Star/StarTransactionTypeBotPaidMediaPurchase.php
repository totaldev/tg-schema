<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\Paid\PaidMedia;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The transaction is a purchase of paid media from a bot or a business account by the current user; relevant for regular users only.
 */
class StarTransactionTypeBotPaidMediaPurchase extends StarTransactionType
{
    public const string TYPE_NAME = 'starTransactionTypeBotPaidMediaPurchase';

    public function __construct(
        /**
         * The bought media if the transaction wasn't refunded.
         *
         * @var PaidMedia[]
         */
        protected array $media,
        /**
         * Identifier of the bot or the business account user who sent the paid media.
         */
        protected int   $userId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeBotPaidMediaPurchase
    {
        return new static(
            media : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['media']),
            userId: $array['user_id'],
        );
    }

    public function getMedia(): array
    {
        return $this->media;
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

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'media'   => array_map(static fn($x) => $x->jsonSerialize(), $this->media),
            'user_id' => $this->userId,
        ];
    }
}
