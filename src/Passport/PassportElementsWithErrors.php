<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Passport;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about a Telegram Passport elements and corresponding errors.
 */
class PassportElementsWithErrors extends TdObject
{
    public const string TYPE_NAME = 'passportElementsWithErrors';

    public function __construct(
        /**
         * Telegram Passport elements.
         *
         * @var PassportElement[]
         */
        protected array $elements,
        /**
         * Errors in the elements that are already available.
         *
         * @var PassportElementError[]
         */
        protected array $errors,
    ) {}

    public static function fromArray(array $array): PassportElementsWithErrors
    {
        return new static(
            elements: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['elements']),
            errors  : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['errors']),
        );
    }

    public function getElements(): array
    {
        return $this->elements;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

    public function setElements(array $value): static
    {
        $this->elements = $value;

        return $this;
    }

    public function setErrors(array $value): static
    {
        $this->errors = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'elements' => array_map(static fn($x) => $x->jsonSerialize(), $this->elements),
            'errors'   => array_map(static fn($x) => $x->jsonSerialize(), $this->errors),
        ];
    }
}
