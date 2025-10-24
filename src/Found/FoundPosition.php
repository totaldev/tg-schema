<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Found;

use Totaldev\TgSchema\TdObject;

/**
 * Contains 0-based match position.
 */
class FoundPosition extends TdObject
{
    public const string TYPE_NAME = 'foundPosition';

    public function __construct(
        /**
         * The position of the match.
         */
        protected int $position
    ) {}

    public static function fromArray(array $array): FoundPosition
    {
        return new static(
            $array['position'],
        );
    }

    public function getPosition(): int
    {
        return $this->position;
    }

    public function setPosition(int $value): static
    {
        $this->position = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'position' => $this->position,
        ];
    }
}
