<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Premium;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A limit was exceeded
 */
class PremiumSourceLimitExceeded extends PremiumSource
{
    public const TYPE_NAME = 'premiumSourceLimitExceeded';

    /**
     * Type of the exceeded limit
     *
     * @var PremiumLimitType
     */
    protected PremiumLimitType $limitType;

    public function __construct(PremiumLimitType $limitType)
    {
        parent::__construct();

        $this->limitType = $limitType;
    }

    public static function fromArray(array $array): PremiumSourceLimitExceeded
    {
        return new static(
            TdSchemaRegistry::fromArray($array['limit_type']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'limit_type' => $this->limitType->typeSerialize(),
        ];
    }

    public function getLimitType(): PremiumLimitType
    {
        return $this->limitType;
    }
}
