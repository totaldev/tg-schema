<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns information about an emoji reaction. Returns a 404 error if the reaction is not found.
 */
class GetEmojiReaction extends TdFunction
{
    public const TYPE_NAME = 'getEmojiReaction';

    public function __construct(
        /**
         * Text representation of the reaction.
         */
        protected string $emoji
    ) {}

    public static function fromArray(array $array): GetEmojiReaction
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
