<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns an animated emoji corresponding to a given emoji. Returns a 404 error if the emoji has no animated emoji.
 */
class GetAnimatedEmoji extends TdFunction
{
    public const TYPE_NAME = 'getAnimatedEmoji';

    public function __construct(
        /**
         * The emoji.
         */
        protected string $emoji
    ) {}

    public static function fromArray(array $array): GetAnimatedEmoji
    {
        return new static(
            $array['emoji'],
        );
    }

    public function getEmoji(): string
    {
        return $this->emoji;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'emoji' => $this->emoji,
        ];
    }
}
