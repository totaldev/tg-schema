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
    public const TYPE_NAME = 'searchAffiliatePrograms';

    public function __construct(
        /**
         * The affiliate for which affiliate programs are searched for.
         */
        protected AffiliateType             $affiliate,
        /**
         * Sort order for the results.
         */
        protected AffiliateProgramSortOrder $sortOrder,
        /**
         * Offset of the first affiliate program to return as received from the previous request; use empty string to get the first chunk of results.
         */
        protected string                    $offset,
        /**
         * The maximum number of affiliate programs to return.
         */
        protected int                       $limit,
    ) {}

    public static function fromArray(array $array): SearchAffiliatePrograms
    {
        return new static(
            TdSchemaRegistry::fromArray($array['affiliate']),
            TdSchemaRegistry::fromArray($array['sort_order']),
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

    public function getSortOrder(): AffiliateProgramSortOrder
    {
        return $this->sortOrder;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'affiliate'  => $this->affiliate->typeSerialize(),
            'sort_order' => $this->sortOrder->typeSerialize(),
            'offset'     => $this->offset,
            'limit'      => $this->limit,
        ];
    }
}
