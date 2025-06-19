<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Affiliate\AffiliateType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns affiliate programs that were connected to the given affiliate.
 */
class GetConnectedAffiliatePrograms extends TdFunction
{
    public const TYPE_NAME = 'getConnectedAffiliatePrograms';

    public function __construct(
        /**
         * The affiliate to which the affiliate program were connected.
         */
        protected AffiliateType $affiliate,
        /**
         * Offset of the first affiliate program to return as received from the previous request; use empty string to get the first chunk of results.
         */
        protected string        $offset,
        /**
         * The maximum number of affiliate programs to return.
         */
        protected int           $limit
    ) {}

    public static function fromArray(array $array): GetConnectedAffiliatePrograms
    {
        return new static(
            TdSchemaRegistry::fromArray($array['affiliate']),
            $array['offset'],
            $array['limit'],
        );
    }

    public function getAffiliate(): AffiliateType
    {
        return $this->affiliate;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getOffset(): string
    {
        return $this->offset;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'affiliate' => $this->affiliate->typeSerialize(),
            'offset'    => $this->offset,
            'limit'     => $this->limit,
        ];
    }
}
