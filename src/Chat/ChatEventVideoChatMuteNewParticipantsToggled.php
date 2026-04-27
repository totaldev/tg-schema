<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * The mute_new_participants setting of a video chat was toggled.
 */
class ChatEventVideoChatMuteNewParticipantsToggled extends ChatEventAction
{
    public const string TYPE_NAME = 'chatEventVideoChatMuteNewParticipantsToggled';

    public function __construct(
        /**
         * New value of the mute_new_participants setting.
         */
        protected bool $muteNewParticipants
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventVideoChatMuteNewParticipantsToggled
    {
        return new static(
            muteNewParticipants: $array['mute_new_participants'],
        );
    }

    public function getMuteNewParticipants(): bool
    {
        return $this->muteNewParticipants;
    }

    public function setMuteNewParticipants(bool $value): static
    {
        $this->muteNewParticipants = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'mute_new_participants' => $this->muteNewParticipants,
        ];
    }
}
