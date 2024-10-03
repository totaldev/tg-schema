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
    public const TYPE_NAME = 'chatEventMessageEdited';

    public function __construct(
        /**
         * The original message before the edit.
         */
        protected Message $oldMessage,
        /**
         * The message after it was edited.
         */
        protected Message $newMessage,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventMessageEdited
    {
        return new static(
            TdSchemaRegistry::fromArray($array['old_message']),
            TdSchemaRegistry::fromArray($array['new_message']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'old_message' => $this->oldMessage->typeSerialize(),
            'new_message' => $this->newMessage->typeSerialize(),
        ];
    }
}
