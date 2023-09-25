<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about a limit, increased for Premium users
 */
class PremiumLimit extends TdObject
{
    public const TYPE_NAME = 'premiumLimit';

    /**
     * Default value of the limit
     *
     * @var int
     */
    protected int $defaultValue;

    /**
     * Value of the limit for Premium users
     *
     * @var int
     */
    protected int $premiumValue;

    /**
     * The type of the limit
     *
     * @var PremiumLimitType
     */
    protected PremiumLimitType $type;

    public function __construct(PremiumLimitType $type, int $defaultValue, int $premiumValue)
    {
        $this->type = $type;
        $this->defaultValue = $defaultValue;
        $this->premiumValue = $premiumValue;
    }

    public static function fromArray(array $array): PremiumLimit
    {
        return new static(
            TdSchemaRegistry::fromArray($array['type']),
            $array['default_value'],
            $array['premium_value'],
        );
    }

    public function getDefaultValue(): int
    {
        return $this->defaultValue;
    }

    public function getPremiumValue(): int
    {
        return $this->premiumValue;
    }

    public function getType(): PremiumLimitType
    {
        return $this->type;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'type' => $this->type->typeSerialize(),
            'default_value' => $this->defaultValue,
            'premium_value' => $this->premiumValue,
        ];
    }
}
