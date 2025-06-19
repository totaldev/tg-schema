<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\Affiliate\AffiliateInfo;
use Totaldev\TgSchema\Paid\PaidMedia;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The transaction is a sale of paid media by the bot or a business account managed by the bot; for bots only.
 */
class StarTransactionTypeBotPaidMediaSale extends StarTransactionType
{
    public const TYPE_NAME = 'starTransactionTypeBotPaidMediaSale';

    public function __construct(
        /**
         * Identifier of the user that bought the media.
         */
        protected int            $userId,
        /**
         * The bought media.
         *
         * @var PaidMedia[]
         */
        protected array          $media,
        /**
         * Bot-provided payload.
         */
        protected string         $payload,
        /**
         * Information about the affiliate which received commission from the transaction; may be null if none.
         */
        protected ?AffiliateInfo $affiliate
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeBotPaidMediaSale
    {
        return new static(
            $array['user_id'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['media']),
            $array['payload'],
            isset($array['affiliate']) ? TdSchemaRegistry::fromArray($array['affiliate']) : null,
        );
    }

    public function getAffiliate(): ?AffiliateInfo
    {
        return $this->affiliate;
    }

    public function getMedia(): array
    {
        return $this->media;
    }

    public function getPayload(): string
    {
        return $this->payload;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'user_id'   => $this->userId,
            array_map(fn($x) => $x->typeSerialize(), $this->media),
            'payload'   => $this->payload,
            'affiliate' => (isset($this->affiliate) ? $this->affiliate : null),
        ];
    }
}
