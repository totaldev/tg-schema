<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Group;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a group call participant.
 */
class GroupCallParticipant extends TdObject
{
    public const TYPE_NAME = 'groupCallParticipant';

    public function __construct(
        /**
         * Identifier of the group call participant.
         */
        protected MessageSender                  $participantId,
        /**
         * User's audio channel synchronization source identifier.
         */
        protected int                            $audioSourceId,
        /**
         * User's screen sharing audio channel synchronization source identifier.
         */
        protected int                            $screenSharingAudioSourceId,
        /**
         * Information about user's video channel; may be null if there is no active video.
         */
        protected ?GroupCallParticipantVideoInfo $videoInfo,
        /**
         * Information about user's screen sharing video channel; may be null if there is no active screen sharing video.
         */
        protected ?GroupCallParticipantVideoInfo $screenSharingVideoInfo,
        /**
         * The participant user's bio or the participant chat's description.
         */
        protected string                         $bio,
        /**
         * True, if the participant is the current user.
         */
        protected bool                           $isCurrentUser,
        /**
         * True, if the participant is speaking as set by setGroupCallParticipantIsSpeaking.
         */
        protected bool                           $isSpeaking,
        /**
         * True, if the participant hand is raised.
         */
        protected bool                           $isHandRaised,
        /**
         * True, if the current user can mute the participant for all other group call participants.
         */
        protected bool                           $canBeMutedForAllUsers,
        /**
         * True, if the current user can allow the participant to unmute themselves or unmute the participant (if the participant is the current user).
         */
        protected bool                           $canBeUnmutedForAllUsers,
        /**
         * True, if the current user can mute the participant only for self.
         */
        protected bool                           $canBeMutedForCurrentUser,
        /**
         * True, if the current user can unmute the participant for self.
         */
        protected bool                           $canBeUnmutedForCurrentUser,
        /**
         * True, if the participant is muted for all users.
         */
        protected bool                           $isMutedForAllUsers,
        /**
         * True, if the participant is muted for the current user.
         */
        protected bool                           $isMutedForCurrentUser,
        /**
         * True, if the participant is muted for all users, but can unmute themselves.
         */
        protected bool                           $canUnmuteSelf,
        /**
         * Participant's volume level; 1-20000 in hundreds of percents.
         */
        protected int                            $volumeLevel,
        /**
         * User's order in the group call participant list. Orders must be compared lexicographically. The bigger is order, the higher is user in the list. If order is empty, the user must be removed from the participant list.
         */
        protected string                         $order,
    ) {}

    public static function fromArray(array $array): GroupCallParticipant
    {
        return new static(
            TdSchemaRegistry::fromArray($array['participant_id']),
            $array['audio_source_id'],
            $array['screen_sharing_audio_source_id'],
            isset($array['video_info']) ? TdSchemaRegistry::fromArray($array['video_info']) : null,
            isset($array['screen_sharing_video_info']) ? TdSchemaRegistry::fromArray($array['screen_sharing_video_info']) : null,
            $array['bio'],
            $array['is_current_user'],
            $array['is_speaking'],
            $array['is_hand_raised'],
            $array['can_be_muted_for_all_users'],
            $array['can_be_unmuted_for_all_users'],
            $array['can_be_muted_for_current_user'],
            $array['can_be_unmuted_for_current_user'],
            $array['is_muted_for_all_users'],
            $array['is_muted_for_current_user'],
            $array['can_unmute_self'],
            $array['volume_level'],
            $array['order'],
        );
    }

    public function getAudioSourceId(): int
    {
        return $this->audioSourceId;
    }

    public function getBio(): string
    {
        return $this->bio;
    }

    public function getCanBeMutedForAllUsers(): bool
    {
        return $this->canBeMutedForAllUsers;
    }

    public function getCanBeMutedForCurrentUser(): bool
    {
        return $this->canBeMutedForCurrentUser;
    }

    public function getCanBeUnmutedForAllUsers(): bool
    {
        return $this->canBeUnmutedForAllUsers;
    }

    public function getCanBeUnmutedForCurrentUser(): bool
    {
        return $this->canBeUnmutedForCurrentUser;
    }

    public function getCanUnmuteSelf(): bool
    {
        return $this->canUnmuteSelf;
    }

    public function getIsCurrentUser(): bool
    {
        return $this->isCurrentUser;
    }

    public function getIsHandRaised(): bool
    {
        return $this->isHandRaised;
    }

    public function getIsMutedForAllUsers(): bool
    {
        return $this->isMutedForAllUsers;
    }

    public function getIsMutedForCurrentUser(): bool
    {
        return $this->isMutedForCurrentUser;
    }

    public function getIsSpeaking(): bool
    {
        return $this->isSpeaking;
    }

    public function getOrder(): string
    {
        return $this->order;
    }

    public function getParticipantId(): MessageSender
    {
        return $this->participantId;
    }

    public function getScreenSharingAudioSourceId(): int
    {
        return $this->screenSharingAudioSourceId;
    }

    public function getScreenSharingVideoInfo(): ?GroupCallParticipantVideoInfo
    {
        return $this->screenSharingVideoInfo;
    }

    public function getVideoInfo(): ?GroupCallParticipantVideoInfo
    {
        return $this->videoInfo;
    }

    public function getVolumeLevel(): int
    {
        return $this->volumeLevel;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                           => static::TYPE_NAME,
            'participant_id'                  => $this->participantId->typeSerialize(),
            'audio_source_id'                 => $this->audioSourceId,
            'screen_sharing_audio_source_id'  => $this->screenSharingAudioSourceId,
            'video_info'                      => $this->videoInfo ?? null,
            'screen_sharing_video_info'       => $this->screenSharingVideoInfo ?? null,
            'bio'                             => $this->bio,
            'is_current_user'                 => $this->isCurrentUser,
            'is_speaking'                     => $this->isSpeaking,
            'is_hand_raised'                  => $this->isHandRaised,
            'can_be_muted_for_all_users'      => $this->canBeMutedForAllUsers,
            'can_be_unmuted_for_all_users'    => $this->canBeUnmutedForAllUsers,
            'can_be_muted_for_current_user'   => $this->canBeMutedForCurrentUser,
            'can_be_unmuted_for_current_user' => $this->canBeUnmutedForCurrentUser,
            'is_muted_for_all_users'          => $this->isMutedForAllUsers,
            'is_muted_for_current_user'       => $this->isMutedForCurrentUser,
            'can_unmute_self'                 => $this->canUnmuteSelf,
            'volume_level'                    => $this->volumeLevel,
            'order'                           => $this->order,
        ];
    }
}
