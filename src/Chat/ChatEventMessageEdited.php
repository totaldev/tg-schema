<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\Message\Message;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A message was edited.
 */
class ChatEventMessageEdited extends ChatEventAction
{
    public const string TYPE_NAME = 'chatEventMessageEdited';

    public function __construct(
        /**
         * The message after it was edited.
         */
        protected Message $newMessage,
        /**
         * The original message before the edit.
         */
        protected Message $oldMessage,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventMessageEdited
    {
        return new static(
            newMessage: TdSchemaRegistry::fromArray($array['new_message']),
            oldMessage: TdSchemaRegistry::fromArray($array['old_message']),
        );
    }

    public function getNewMessage(): Message
    {
        return $this->newMessage;
    }

    public function getOldMessage(): Message
    {
        return $this->oldMessage;
    }

    public function setNewMessage(Message $value): static
    {
        $this->newMessage = $value;

        return $this;
    }

    public function setOldMessage(Message $value): static
    {
        $this->oldMessage = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'new_message' => $this->newMessage->jsonSerialize(),
            'old_message' => $this->oldMessage->jsonSerialize(),
        ];
    }
}
