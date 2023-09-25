<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Chat\ChatBackground;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A new background was set in the chat
 */
class MessageChatSetBackground extends MessageContent
{
    public const TYPE_NAME = 'messageChatSetBackground';

    /**
     * The new background
     *
     * @var ChatBackground
     */
    protected ChatBackground $background;

    /**
     * Identifier of the message with a previously set same background; 0 if none. Can be an identifier of a deleted message
     *
     * @var int
     */
    protected int $oldBackgroundMessageId;

    public function __construct(int $oldBackgroundMessageId, ChatBackground $background)
    {
        parent::__construct();

        $this->oldBackgroundMessageId = $oldBackgroundMessageId;
        $this->background = $background;
    }

    public static function fromArray(array $array): MessageChatSetBackground
    {
        return new static(
            $array['old_background_message_id'],
            TdSchemaRegistry::fromArray($array['background']),
        );
    }

    public function getBackground(): ChatBackground
    {
        return $this->background;
    }

    public function getOldBackgroundMessageId(): int
    {
        return $this->oldBackgroundMessageId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'old_background_message_id' => $this->oldBackgroundMessageId,
            'background' => $this->background->typeSerialize(),
        ];
    }
}
