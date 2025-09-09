<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A limit was exceeded.
 */
class PremiumSourceLimitExceeded extends PremiumSource
{
    public const TYPE_NAME = 'premiumSourceLimitExceeded';

    public function __construct(
        /**
         * Type of the exceeded limit.
         */
        protected PremiumLimitType $limitType
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PremiumSourceLimitExceeded
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
            '@type'      => static::TYPE_NAME,
            'limit_type' => $this->limitType->typeSerialize(),
        ];
    }
}
