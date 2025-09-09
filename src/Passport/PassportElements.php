<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Passport;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about saved Telegram Passport elements.
 */
class PassportElements extends TdObject
{
    public const TYPE_NAME = 'passportElements';

    public function __construct(
        /**
         * Telegram Passport elements.
         *
         * @var PassportElement[]
         */
        protected array $elements
    ) {}

    public static function fromArray(array $array): PassportElements
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['elements']),
        );
    }

    public function getElements(): array
    {
        return $this->elements;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'elements' => array_map(static fn($x) => $x->typeSerialize(), $this->elements),
        ];
    }
}
