<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Emojis;

use Totaldev\TgSchema\TdObject;

/**
 * Represents a list of emojis.
 */
class Emojis extends TdObject
{
    public const TYPE_NAME = 'emojis';

    public function __construct(
        /**
         * List of emojis.
         *
         * @var string[]
         */
        protected array $emojis
    ) {}

    public static function fromArray(array $array): Emojis
    {
        return new static(
            $array['emojis'],
        );
    }

    public function getEmojis(): array
    {
        return $this->emojis;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'emojis' => $this->emojis,
        ];
    }
}
