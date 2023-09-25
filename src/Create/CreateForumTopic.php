<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Create;

use Totaldev\TgSchema\Forum\ForumTopicIcon;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Creates a topic in a forum supergroup chat; requires can_manage_topics rights in the supergroup
 */
class CreateForumTopic extends TdFunction
{
    public const TYPE_NAME = 'createForumTopic';

    /**
     * Identifier of the chat
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Icon of the topic. Icon color must be one of 0x6FB9F0, 0xFFD67E, 0xCB86DB, 0x8EEE98, 0xFF93B2, or 0xFB6F5F. Telegram Premium users can use any custom
     * emoji as topic icon, other users can use only a custom emoji returned by getForumTopicDefaultIcons
     *
     * @var ForumTopicIcon
     */
    protected ForumTopicIcon $icon;

    /**
     * Name of the topic; 1-128 characters
     *
     * @var string
     */
    protected string $name;

    public function __construct(int $chatId, string $name, ForumTopicIcon $icon)
    {
        $this->chatId = $chatId;
        $this->name = $name;
        $this->icon = $icon;
    }

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
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'name' => $this->name,
            'icon' => $this->icon->typeSerialize(),
        ];
    }
}
