<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\Paid\PaidMedia;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The transaction is a purchase of paid media from a bot or a business account by the current user; for regular users only.
 */
class StarTransactionTypeBotPaidMediaPurchase extends StarTransactionType
{
    public const TYPE_NAME = 'starTransactionTypeBotPaidMediaPurchase';

    public function __construct(
        /**
         * Identifier of the bot or the business account user that sent the paid media.
         */
        protected int   $userId,
        /**
         * The bought media if the transaction wasn't refunded.
         *
         * @var PaidMedia[]
         */
        protected array $media
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeBotPaidMediaPurchase
    {
        return new static(
            $array['user_id'],
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['media']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'user_id' => $this->userId,
            'media'   => array_map(static fn($x) => $x->typeSerialize(), $this->media),
        ];
    }
}
