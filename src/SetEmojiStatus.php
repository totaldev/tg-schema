<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Changes the emoji status of the current user; for Telegram Premium users only
 */
class SetEmojiStatus extends TdFunction
{
    public const TYPE_NAME = 'setEmojiStatus';

    /**
     * New emoji status; pass null to switch to the default badge
     *
     * @var EmojiStatus
     */
    protected EmojiStatus $emojiStatus;

    public function __construct(EmojiStatus $emojiStatus)
    {
        $this->emojiStatus = $emojiStatus;
    }

    public static function fromArray(array $array): SetEmojiStatus
    {
        return new static(
            TdSchemaRegistry::fromArray($array['emoji_status']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'emoji_status' => $this->emojiStatus->typeSerialize(),
        ];
    }

    public function getEmojiStatus(): EmojiStatus
    {
        return $this->emojiStatus;
    }
}
