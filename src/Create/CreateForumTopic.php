<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Create;

use Totaldev\TgSchema\Forum\ForumTopicIcon;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Creates a topic in a forum supergroup chat; requires can_manage_topics administrator or can_create_topics member right in the supergroup.
 */
class CreateForumTopic extends TdFunction
{
    public const TYPE_NAME = 'createForumTopic';

    public function __construct(
        /**
         * Identifier of the chat.
         */
        protected int            $chatId,
        /**
         * Name of the topic; 1-128 characters.
         */
        protected string         $name,
        /**
         * Icon of the topic. Icon color must be one of 0x6FB9F0, 0xFFD67E, 0xCB86DB, 0x8EEE98, 0xFF93B2, or 0xFB6F5F. Telegram Premium users can use any custom emoji as topic icon, other users can use only a custom emoji returned by getForumTopicDefaultIcons.
         */
        protected ForumTopicIcon $icon
    ) {}

    public static function fromArray(array $array): CreateForumTopic
    {
        return new static(
            $array['chat_id'],
            $array['name'],
            TdSchemaRegistry::fromArray($array['icon']),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getIcon(): ForumTopicIcon
    {
        return $this->icon;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'name'    => $this->name,
            'icon'    => $this->icon->typeSerialize(),
        ];
    }
}
