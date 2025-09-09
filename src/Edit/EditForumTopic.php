<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Edit;

use Totaldev\TgSchema\TdFunction;

/**
 * Edits title and icon of a topic in a forum supergroup chat; requires can_manage_topics right in the supergroup unless the user is creator of the topic.
 */
class EditForumTopic extends TdFunction
{
    public const TYPE_NAME = 'editForumTopic';

    public function __construct(
        /**
         * Identifier of the chat.
         */
        protected int    $chatId,
        /**
         * Message thread identifier of the forum topic.
         */
        protected int    $messageThreadId,
        /**
         * New name of the topic; 0-128 characters. If empty, the previous topic name is kept.
         */
        protected string $name,
        /**
         * Pass true to edit the icon of the topic. Icon of the General topic can't be edited.
         */
        protected bool   $editIconCustomEmoji,
        /**
         * Identifier of the new custom emoji for topic icon; pass 0 to remove the custom emoji. Ignored if edit_icon_custom_emoji is false. Telegram Premium users can use any custom emoji, other users can use only a custom emoji returned by getForumTopicDefaultIcons.
         */
        protected int    $iconCustomEmojiId,
    ) {}

    public static function fromArray(array $array): EditForumTopic
    {
        return new static(
            $array['chat_id'],
            $array['message_thread_id'],
            $array['name'],
            $array['edit_icon_custom_emoji'],
            $array['icon_custom_emoji_id'],
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

    public function getIconCustomEmojiId(): int
    {
        return $this->iconCustomEmojiId;
    }

    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'chat_id'                => $this->chatId,
            'message_thread_id'      => $this->messageThreadId,
            'name'                   => $this->name,
            'edit_icon_custom_emoji' => $this->editIconCustomEmoji,
            'icon_custom_emoji_id'   => $this->iconCustomEmojiId,
        ];
    }
}
