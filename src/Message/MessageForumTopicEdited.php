<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A forum topic has been edited
 */
class MessageForumTopicEdited extends MessageContent
{
    public const TYPE_NAME = 'messageForumTopicEdited';

    /**
     * True, if icon's custom_emoji_id is changed
     *
     * @var bool
     */
    protected bool $editIconCustomEmojiId;

    /**
     * New unique identifier of the custom emoji shown on the topic icon; 0 if none. Must be ignored if edit_icon_custom_emoji_id is false
     *
     * @var int
     */
    protected int $iconCustomEmojiId;

    /**
     * If non-empty, the new name of the topic
     *
     * @var string
     */
    protected string $name;

    public function __construct(string $name, bool $editIconCustomEmojiId, int $iconCustomEmojiId)
    {
        parent::__construct();

        $this->name = $name;
        $this->editIconCustomEmojiId = $editIconCustomEmojiId;
        $this->iconCustomEmojiId = $iconCustomEmojiId;
    }

    public static function fromArray(array $array): MessageForumTopicEdited
    {
        return new static(
            $array['name'],
            $array['edit_icon_custom_emoji_id'],
            $array['icon_custom_emoji_id'],
        );
    }

    public function getEditIconCustomEmojiId(): bool
    {
        return $this->editIconCustomEmojiId;
    }

    public function getIconCustomEmojiId(): int
    {
        return $this->iconCustomEmojiId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'name' => $this->name,
            'edit_icon_custom_emoji_id' => $this->editIconCustomEmojiId,
            'icon_custom_emoji_id' => $this->iconCustomEmojiId,
        ];
    }
}
