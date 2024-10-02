<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * The number of Telegram Stars owned by the current user has changed.
 */
class UpdateOwnedStarCount extends Update
{
    public const TYPE_NAME = 'updateOwnedStarCount';

    public function __construct(
        /**
         * The new number of Telegram Stars owned.
         */
        protected int $starCount
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateOwnedStarCount
    {
        return new static(
            $array['star_count'],
        );
    }

    public function getStarCount(): int
    {
        return $this->starCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'star_count' => $this->starCount,
        ];
    }
}
