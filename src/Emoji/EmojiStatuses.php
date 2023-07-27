<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Emoji;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of custom emoji identifiers, which can be set as emoji statuses
 */
class EmojiStatuses extends TdObject
{
    public const TYPE_NAME = 'emojiStatuses';

    /**
     * The list of custom emoji identifiers
     *
     * @var int[]
     */
    protected array $customEmojiIds;

    public function __construct(array $customEmojiIds)
    {
        $this->customEmojiIds = $customEmojiIds;
    }

    public static function fromArray(array $array): EmojiStatuses
    {
        return new static(
            $array['custom_emoji_ids'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'custom_emoji_ids' => $this->customEmojiIds,
        ];
    }

    public function getCustomEmojiIds(): array
    {
        return $this->customEmojiIds;
    }
}
