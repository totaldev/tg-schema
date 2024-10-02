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
    public const TYPE_NAME = 'foundPosition';

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

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'position' => $this->position,
        ];
    }
}
