<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns information about an upgraded gift by its name.
 */
class GetUpgradedGift extends TdFunction
{
    public const TYPE_NAME = 'getUpgradedGift';

    public function __construct(
        /**
         * Unique name of the upgraded gift.
         */
        protected string $name
    ) {}

    public static function fromArray(array $array): GetUpgradedGift
    {
        return new static(
            $array['name'],
        );
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'name'  => $this->name,
        ];
    }
}
