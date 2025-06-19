<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes default participant identifier, on whose behalf a video chat in the chat will be joined.
 */
class SetVideoChatDefaultParticipant extends TdFunction
{
    public const TYPE_NAME = 'setVideoChatDefaultParticipant';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int           $chatId,
        /**
         * Default group call participant identifier to join the video chats.
         */
        protected MessageSender $defaultParticipantId
    ) {}

    public static function fromArray(array $array): SetVideoChatDefaultParticipant
    {
        return new static(
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['default_participant_id']),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getDefaultParticipantId(): MessageSender
    {
        return $this->defaultParticipantId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'chat_id'                => $this->chatId,
            'default_participant_id' => $this->defaultParticipantId->typeSerialize(),
        ];
    }
}
