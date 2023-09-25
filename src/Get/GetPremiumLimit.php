<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Premium\PremiumLimitType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns information about a limit, increased for Premium users. Returns a 404 error if the limit is unknown
 */
class GetPremiumLimit extends TdFunction
{
    public const TYPE_NAME = 'getPremiumLimit';

    /**
     * Type of the limit
     *
     * @var PremiumLimitType
     */
    protected PremiumLimitType $limitType;

    public function __construct(PremiumLimitType $limitType)
    {
        $this->limitType = $limitType;
    }

    public static function fromArray(array $array): GetPremiumLimit
    {
        return new static(
            TdSchemaRegistry::fromArray($array['limit_type']),
        );
    }

    public function getLimitType(): PremiumLimitType
    {
        return $this->limitType;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'limit_type' => $this->limitType->typeSerialize(),
        ];
    }
}
