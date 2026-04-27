<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Edit;

use Totaldev\TgSchema\TdFunction;

/**
 * Edits title and icon of a topic in a forum supergroup chat or a chat with a bot with topics; for supergroup chats requires can_manage_topics administrator
 * right unless the user is creator of the topic.
 */
class EditForumTopic extends TdFunction
{
    public const string TYPE_NAME = 'editForumTopic';

    public function __construct(
        /**
         * Identifier of the chat.
         */
        protected int    $chatId,
        /**
         * Pass true to edit the icon of the topic. Icon of the General topic can't be edited.
         */
        protected bool   $editIconCustomEmoji,
        /**
         * Forum topic identifier.
         */
        protected int    $forumTopicId,
        /**
         * Identifier of the new custom emoji for topic icon; pass 0 to remove the custom emoji. Ignored if edit_icon_custom_emoji is false. Telegram Premium users can use any custom emoji, other users can use only a custom emoji returned by getForumTopicDefaultIcons.
         */
        protected int    $iconCustomEmojiId,
        /**
         * New name of the topic; 0-128 characters. If empty, the previous topic name is kept.
         */
        protected string $name,
    ) {}

    public static function fromArray(array $array): EditForumTopic
    {
        return new static(
            chatId             : $array['chat_id'],
            editIconCustomEmoji: $array['edit_icon_custom_emoji'],
            forumTopicId       : $array['forum_topic_id'],
            iconCustomEmojiId  : $array['icon_custom_emoji_id'],
            name               : $array['name'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getEditIconCustomEmoji(): bool
    {
        return $this->editIconCustomEmoji;
    }

    public function getForumTopicId(): int
    {
        return $this->forumTopicId;
    }

    public function getIconCustomEmojiId(): int
    {
        return $this->iconCustomEmojiId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setEditIconCustomEmoji(bool $value): static
    {
        $this->editIconCustomEmoji = $value;

        return $this;
    }

    public function setForumTopicId(int $value): static
    {
        $this->forumTopicId = $value;

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
            '@type'                  => static::TYPE_NAME,
            'chat_id'                => $this->chatId,
            'edit_icon_custom_emoji' => $this->editIconCustomEmoji,
            'forum_topic_id'         => $this->forumTopicId,
            'icon_custom_emoji_id'   => $this->iconCustomEmojiId,
            'name'                   => $this->name,
        ];
    }
}
