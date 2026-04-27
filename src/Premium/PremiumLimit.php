<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Premium;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about a limit, increased for Premium users.
 */
class PremiumLimit extends TdObject
{
    public const string TYPE_NAME = 'premiumLimit';

    public function __construct(
        /**
         * Default value of the limit.
         */
        protected int              $defaultValue,
        /**
         * Value of the limit for Premium users.
         */
        protected int              $premiumValue,
        /**
         * The type of the limit.
         */
        protected PremiumLimitType $type,
    ) {}

    public static function fromArray(array $array): PremiumLimit
    {
        return new static(
            defaultValue: $array['default_value'],
            premiumValue: $array['premium_value'],
            type        : TdSchemaRegistry::fromArray($array['type']),
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

    public function setDefaultValue(int $value): static
    {
        $this->defaultValue = $value;

        return $this;
    }

    public function setPremiumValue(int $value): static
    {
        $this->premiumValue = $value;

        return $this;
    }

    public function setType(PremiumLimitType $value): static
    {
        $this->type = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'default_value' => $this->defaultValue,
            'premium_value' => $this->premiumValue,
            'type'          => $this->type->jsonSerialize(),
        ];
    }
}
