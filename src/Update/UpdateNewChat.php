<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Chat\Chat;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A new chat has been loaded/created. This update is guaranteed to come before the chat identifier is returned to the application. The chat field changes will
 * be reported through separate updates
 */
class UpdateNewChat extends Update
{
    public const TYPE_NAME = 'updateNewChat';

    /**
     * The chat
     *
     * @var Chat
     */
    protected Chat $chat;

    public function __construct(Chat $chat)
    {
        parent::__construct();

        $this->chat = $chat;
    }

    public static function fromArray(array $array): UpdateNewChat
    {
        return new static(
            TdSchemaRegistry::fromArray($array['chat']),
        );
    }

    public function getChat(): Chat
    {
        return $this->chat;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat' => $this->chat->typeSerialize(),
        ];
    }
}
