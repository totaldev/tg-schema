<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Edit;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Edits title and icon of a topic in a forum supergroup chat; requires can_manage_topics administrator right in the supergroup unless the user is creator of the topic
 */
class EditForumTopic extends TdFunction
{
    public const TYPE_NAME = 'editForumTopic';

    /**
     * Identifier of the chat
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Message thread identifier of the forum topic
     *
     * @var int
     */
    protected int $messageThreadId;

    /**
     * New name of the topic; 0-128 characters. If empty, the previous topic name is kept
     *
     * @var string
     */
    protected string $name;

    /**
     * Pass true to edit the icon of the topic. Icon of the General topic can't be edited
     *
     * @var bool
     */
    protected bool $editIconCustomEmoji;

    /**
     * Identifier of the new custom emoji for topic icon; pass 0 to remove the custom emoji. Ignored if edit_icon_custom_emoji is false. Telegram Premium users can use any custom emoji, other users can use only a custom emoji returned by getForumTopicDefaultIcons
     *
     * @var int
     */
    protected int $iconCustomEmojiId;

    public function __construct(
        int $chatId,
        int $messageThreadId,
        string $name,
        bool $editIconCustomEmoji,
        int $iconCustomEmojiId,
    ) {
        $this->chatId = $chatId;
        $this->messageThreadId = $messageThreadId;
        $this->name = $name;
        $this->editIconCustomEmoji = $editIconCustomEmoji;
        $this->iconCustomEmojiId = $iconCustomEmojiId;
    }

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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_thread_id' => $this->messageThreadId,
            'name' => $this->name,
            'edit_icon_custom_emoji' => $this->editIconCustomEmoji,
            'icon_custom_emoji_id' => $this->iconCustomEmojiId,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getEditIconCustomEmoji(): bool
    {
        return $this->editIconCustomEmoji;
    }

    public function getIconCustomEmojiId(): int
    {
        return $this->iconCustomEmojiId;
    }
}
