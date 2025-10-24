<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Chat\ChatBackground;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A new background was set in the chat.
 */
class MessageChatSetBackground extends MessageContent
{
    public const string TYPE_NAME = 'messageChatSetBackground';

    public function __construct(
        /**
         * Identifier of the message with a previously set same background; 0 if none. Can be an identifier of a deleted message.
         */
        protected int            $oldBackgroundMessageId,
        /**
         * The new background.
         */
        protected ChatBackground $background,
        /**
         * True, if the background was set only for self.
         */
        protected bool           $onlyForSelf,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageChatSetBackground
    {
        return new static(
            $array['old_background_message_id'],
            TdSchemaRegistry::fromArray($array['background']),
            $array['only_for_self'],
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

    public function getOnlyForSelf(): bool
    {
        return $this->onlyForSelf;
    }

    public function setBackground(ChatBackground $value): static
    {
        $this->background = $value;

        return $this;
    }

    public function setOldBackgroundMessageId(int $value): static
    {
        $this->oldBackgroundMessageId = $value;

        return $this;
    }

    public function setOnlyForSelf(bool $value): static
    {
        $this->onlyForSelf = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                     => static::TYPE_NAME,
            'old_background_message_id' => $this->oldBackgroundMessageId,
            'background'                => $this->background->typeSerialize(),
            'only_for_self'             => $this->onlyForSelf,
        ];
    }
}
