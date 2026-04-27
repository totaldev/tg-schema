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
    public const string TYPE_NAME = 'messageForumTopicEdited';

    public function __construct(
        /**
         * True, if icon's custom_emoji_id is changed.
         */
        protected bool   $editIconCustomEmojiId,
        /**
         * New unique identifier of the custom emoji shown on the topic icon; 0 if none. Must be ignored if edit_icon_custom_emoji_id is false.
         */
        protected int    $iconCustomEmojiId,
        /**
         * If non-empty, the new name of the topic.
         */
        protected string $name,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageForumTopicEdited
    {
        return new static(
            editIconCustomEmojiId: $array['edit_icon_custom_emoji_id'],
            iconCustomEmojiId    : $array['icon_custom_emoji_id'],
            name                 : $array['name'],
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

    public function setEditIconCustomEmojiId(bool $value): static
    {
        $this->editIconCustomEmojiId = $value;

        return $this;
    }

    public function setIconCustomEmojiId(int $value): static
    {
        $this->iconCustomEmojiId = $value;

        return $this;
    }

    public function setName(string $value): static
    {
        $this->name = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                     => static::TYPE_NAME,
            'edit_icon_custom_emoji_id' => $this->editIconCustomEmojiId,
            'icon_custom_emoji_id'      => $this->iconCustomEmojiId,
            'name'                      => $this->name,
        ];
    }
}
