<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Message\MessageInteractionInfo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The information about interactions with a message has changed.
 */
class UpdateMessageInteractionInfo extends Update
{
    public const TYPE_NAME = 'updateMessageInteractionInfo';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int                     $chatId,
        /**
         * Message identifier.
         */
        protected int                     $messageId,
        /**
         * New information about interactions with the message; may be null.
         */
        protected ?MessageInteractionInfo $interactionInfo
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateMessageInteractionInfo
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            isset($array['interaction_info']) ? TdSchemaRegistry::fromArray($array['interaction_info']) : null,
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getInteractionInfo(): ?MessageInteractionInfo
    {
        return $this->interactionInfo;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'chat_id'          => $this->chatId,
            'message_id'       => $this->messageId,
            'interaction_info' => $this->interactionInfo ?? null,
        ];
    }
}
