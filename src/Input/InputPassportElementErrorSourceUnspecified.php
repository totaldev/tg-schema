<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

/**
 * The element contains an error in an unspecified place. The error will be considered resolved when new data is added.
 */
class InputPassportElementErrorSourceUnspecified extends InputPassportElementErrorSource
{
    public const TYPE_NAME = 'inputPassportElementErrorSourceUnspecified';

    public function __construct(
        /**
         * Current hash of the entire element.
         */
        protected string $elementHash
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputPassportElementErrorSourceUnspecified
    {
        return new static(
            $array['element_hash'],
        );
    }

    public function getElementHash(): string
    {
        return $this->elementHash;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'element_hash' => $this->elementHash,
        ];
    }
}
