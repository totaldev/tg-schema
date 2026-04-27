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
    public const string TYPE_NAME = 'getConnectedAffiliatePrograms';

    public function __construct(
        /**
         * The affiliate to which the affiliate program were connected.
         */
        protected AffiliateType $affiliate,
        /**
         * The maximum number of affiliate programs to return.
         */
        protected int           $limit,
        /**
         * Offset of the first affiliate program to return as received from the previous request; use empty string to get the first chunk of results.
         */
        protected string        $offset,
    ) {}

    public static function fromArray(array $array): GetConnectedAffiliatePrograms
    {
        return new static(
            affiliate: TdSchemaRegistry::fromArray($array['affiliate']),
            limit    : $array['limit'],
            offset   : $array['offset'],
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

    public function setAffiliate(AffiliateType $value): static
    {
        $this->affiliate = $value;

        return $this;
    }

    public function setLimit(int $value): static
    {
        $this->limit = $value;

        return $this;
    }

    public function setOffset(string $value): static
    {
        $this->offset = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'affiliate' => $this->affiliate->jsonSerialize(),
            'limit'     => $this->limit,
            'offset'    => $this->offset,
        ];
    }
}
