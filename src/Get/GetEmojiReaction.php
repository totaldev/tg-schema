<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns information about a emoji reaction. Returns a 404 error if the reaction is not found
 */
class GetEmojiReaction extends TdFunction
{
    public const TYPE_NAME = 'getEmojiReaction';

    /**
     * Text representation of the reaction
     *
     * @var string
     */
    protected string $emoji;

    public function __construct(string $emoji)
    {
        $this->emoji = $emoji;
    }

    public static function fromArray(array $array): GetEmojiReaction
    {
        return new static(
            $array['emoji'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'emoji' => $this->emoji,
        ];
    }

    public function getEmoji(): string
    {
        return $this->emoji;
    }
}
