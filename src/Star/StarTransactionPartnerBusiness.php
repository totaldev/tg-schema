<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\Paid\PaidMedia;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The transaction is a transaction with a business account.
 */
class StarTransactionPartnerBusiness extends StarTransactionPartner
{
    public const TYPE_NAME = 'starTransactionPartnerBusiness';

    public function __construct(
        /**
         * Identifier of the business account user.
         */
        protected int   $userId,
        /**
         * The bought media if the trancastion wasn't refunded.
         *
         * @var PaidMedia[]
         */
        protected array $media,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarTransactionPartnerBusiness
    {
        return new static(
            $array['user_id'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['media']),
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
            array_map(fn($x) => $x->typeSerialize(), $this->media),
        ];
    }
}
