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
    public const string TYPE_NAME = 'starTransactionTypeBotPaidMediaSale';

    public function __construct(
        /**
         * Information about the affiliate which received commission from the transaction; may be null if none.
         */
        protected ?AffiliateInfo $affiliate,
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
         * Identifier of the user that bought the media.
         */
        protected int            $userId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionTypeBotPaidMediaSale
    {
        return new static(
            affiliate: (isset($array['affiliate']) ? TdSchemaRegistry::fromArray($array['affiliate']) : null),
            media    : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['media']),
            payload  : $array['payload'],
            userId   : $array['user_id'],
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

    public function setAffiliate(?AffiliateInfo $value): static
    {
        $this->affiliate = $value;

        return $this;
    }

    public function setMedia(array $value): static
    {
        $this->media = $value;

        return $this;
    }

    public function setPayload(string $value): static
    {
        $this->payload = $value;

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
            '@type'     => static::TYPE_NAME,
            'affiliate' => (null !== $this->affiliate ? $this->affiliate->jsonSerialize() : null),
            'media'     => array_map(static fn($x) => $x->jsonSerialize(), $this->media),
            'payload'   => $this->payload,
            'user_id'   => $this->userId,
        ];
    }
}
