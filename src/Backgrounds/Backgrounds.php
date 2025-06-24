<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Backgrounds;

use Totaldev\TgSchema\Background\Background;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of backgrounds.
 */
class Backgrounds extends TdObject
{
    public const TYPE_NAME = 'backgrounds';

    public function __construct(
        /**
         * A list of backgrounds.
         *
         * @var Background[]
         */
        protected array $backgrounds
    ) {}

    public static function fromArray(array $array): Backgrounds
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['backgrounds']),
        );
    }

    public function getBackgrounds(): array
    {
        return $this->backgrounds;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(static fn($x) => $x->typeSerialize(), $this->backgrounds),
        ];
    }
}
