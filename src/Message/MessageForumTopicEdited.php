<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * A forum topic has been edited.
 */
class MessageForumTopicEdited extends MessageContent
{
    public const TYPE_NAME = 'messageForumTopicEdited';

    public function __construct(
        /**
         * If non-empty, the new name of the topic.
         */
        protected string $name,
        /**
         * True, if icon's custom_emoji_id is changed.
         */
        protected bool   $editIconCustomEmojiId,
        /**
         * New unique identifier of the custom emoji shown on the topic icon; 0 if none. Must be ignored if edit_icon_custom_emoji_id is false.
         */
        protected int    $iconCustomEmojiId
    ) {
        parent::__construct();
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
            '@type'                     => static::TYPE_NAME,
            'name'                      => $this->name,
            'edit_icon_custom_emoji_id' => $this->editIconCustomEmojiId,
            'icon_custom_emoji_id'      => $this->iconCustomEmojiId,
        ];
    }
}
