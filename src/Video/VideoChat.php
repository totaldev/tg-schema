<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Video;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a video chat, i.e. a group call bound to a chat.
 */
class VideoChat extends TdObject
{
    public const TYPE_NAME = 'videoChat';

    public function __construct(
        /**
         * Group call identifier of an active video chat; 0 if none. Full information about the video chat can be received through the method getGroupCall.
         */
        protected int            $groupCallId,
        /**
         * True, if the video chat has participants.
         */
        protected bool           $hasParticipants,
        /**
         * Default group call participant identifier to join the video chat; may be null.
         */
        protected ?MessageSender $defaultParticipantId
    ) {}

    public static function fromArray(array $array): VideoChat
    {
        return new static(
            $array['group_call_id'],
            $array['has_participants'],
            isset($array['default_participant_id']) ? TdSchemaRegistry::fromArray($array['default_participant_id']) : null,
        );
    }

    public function getDefaultParticipantId(): ?MessageSender
    {
        return $this->defaultParticipantId;
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getHasParticipants(): bool
    {
        return $this->hasParticipants;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'group_call_id'          => $this->groupCallId,
            'has_participants'       => $this->hasParticipants,
            'default_participant_id' => $this->defaultParticipantId ?? null,
        ];
    }
}
