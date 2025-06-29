<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A video chat participant volume level was changed.
 */
class ChatEventVideoChatParticipantVolumeLevelChanged extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventVideoChatParticipantVolumeLevelChanged';

    public function __construct(
        /**
         * Identifier of the affected group call participant.
         */
        protected MessageSender $participantId,
        /**
         * New value of volume_level; 1-20000 in hundreds of percents.
         */
        protected int           $volumeLevel
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventVideoChatParticipantVolumeLevelChanged
    {
        return new static(
            TdSchemaRegistry::fromArray($array['participant_id']),
            $array['volume_level'],
        );
    }

    public function getParticipantId(): MessageSender
    {
        return $this->participantId;
    }

    public function getVolumeLevel(): int
    {
        return $this->volumeLevel;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'participant_id' => $this->participantId->typeSerialize(),
            'volume_level'   => $this->volumeLevel,
        ];
    }
}
