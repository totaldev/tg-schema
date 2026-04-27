<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Search;

use Totaldev\TgSchema\Affiliate\AffiliateProgramSortOrder;
use Totaldev\TgSchema\Affiliate\AffiliateType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Searches affiliate programs that can be connected to the given affiliate.
 */
class SearchAffiliatePrograms extends TdFunction
{
    public const string TYPE_NAME = 'searchAffiliatePrograms';

    public function __construct(
        /**
         * The affiliate for which affiliate programs are searched for.
         */
        protected AffiliateType             $affiliate,
        /**
         * The maximum number of affiliate programs to return.
         */
        protected int                       $limit,
        /**
         * Offset of the first affiliate program to return as received from the previous request; use empty string to get the first chunk of results.
         */
        protected string                    $offset,
        /**
         * Sort order for the results.
         */
        protected AffiliateProgramSortOrder $sortOrder,
    ) {}

    public static function fromArray(array $array): SearchAffiliatePrograms
    {
        return new static(
            affiliate: TdSchemaRegistry::fromArray($array['affiliate']),
            limit    : $array['limit'],
            offset   : $array['offset'],
            sortOrder: TdSchemaRegistry::fromArray($array['sort_order']),
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

    public function getSortOrder(): AffiliateProgramSortOrder
    {
        return $this->sortOrder;
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

    public function setSortOrder(AffiliateProgramSortOrder $value): static
    {
        $this->sortOrder = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'affiliate'  => $this->affiliate->jsonSerialize(),
            'limit'      => $this->limit,
            'offset'     => $this->offset,
            'sort_order' => $this->sortOrder->jsonSerialize(),
        ];
    }
}
