<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Passport;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a description of the required Telegram Passport element that was requested by a service.
 */
class PassportRequiredElement extends TdObject
{
    public const TYPE_NAME = 'passportRequiredElement';

    public function __construct(
        /**
         * List of Telegram Passport elements any of which is enough to provide.
         *
         * @var PassportSuitableElement[]
         */
        protected array $suitableElements
    ) {}

    public static function fromArray(array $array): PassportRequiredElement
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['suitable_elements']),
        );
    }

    public function getSuitableElements(): array
    {
        return $this->suitableElements;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'suitable_elements' => array_map(static fn($x) => $x->typeSerialize(), $this->suitableElements),
        ];
    }
}
