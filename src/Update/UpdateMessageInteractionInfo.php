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
    public const string TYPE_NAME = 'updateMessageInteractionInfo';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int                     $chatId,
        /**
         * New information about interactions with the message; may be null.
         */
        protected ?MessageInteractionInfo $interactionInfo,
        /**
         * Message identifier.
         */
        protected int                     $messageId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateMessageInteractionInfo
    {
        return new static(
            chatId         : $array['chat_id'],
            interactionInfo: (isset($array['interaction_info']) ? TdSchemaRegistry::fromArray($array['interaction_info']) : null),
            messageId      : $array['message_id'],
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

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setInteractionInfo(?MessageInteractionInfo $value): static
    {
        $this->interactionInfo = $value;

        return $this;
    }

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'chat_id'          => $this->chatId,
            'interaction_info' => (null !== $this->interactionInfo ? $this->interactionInfo->jsonSerialize() : null),
            'message_id'       => $this->messageId,
        ];
    }
}
