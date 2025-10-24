<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns information about value of an upgraded gift by its name.
 */
class GetUpgradedGiftValueInfo extends TdFunction
{
    public const string TYPE_NAME = 'getUpgradedGiftValueInfo';

    public function __construct(
        /**
         * Unique name of the upgraded gift.
         */
        protected string $name
    ) {}

    public static function fromArray(array $array): GetUpgradedGiftValueInfo
    {
        return new static(
            $array['name'],
        );
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $value): static
    {
        $this->name = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'name'  => $this->name,
        ];
    }
}
