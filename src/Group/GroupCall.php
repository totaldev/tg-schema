<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Group;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a group call.
 */
class GroupCall extends TdObject
{
    public const TYPE_NAME = 'groupCall';

    public function __construct(
        /**
         * Group call identifier.
         */
        protected int    $id,
        /**
         * Group call title; for video chats only.
         */
        protected string $title,
        /**
         * Invite link for the group call; for group calls that aren't bound to a chat. For video chats call getVideoChatInviteLink to get the link.
         */
        protected string $inviteLink,
        /**
         * Point in time (Unix timestamp) when the group call is expected to be started by an administrator; 0 if it is already active or was ended; for video chats only.
         */
        protected int    $scheduledStartDate,
        /**
         * True, if the group call is scheduled and the current user will receive a notification when the group call starts; for video chats only.
         */
        protected bool   $enabledStartNotification,
        /**
         * True, if the call is active.
         */
        protected bool   $isActive,
        /**
         * True, if the call is bound to a chat.
         */
        protected bool   $isVideoChat,
        /**
         * True, if the call is an RTMP stream instead of an ordinary video chat; for video chats only.
         */
        protected bool   $isRtmpStream,
        /**
         * True, if the call is joined.
         */
        protected bool   $isJoined,
        /**
         * True, if user was kicked from the call because of network loss and the call needs to be rejoined.
         */
        protected bool   $needRejoin,
        /**
         * True, if the user is the owner of the call and can end the call, change volume level of other users, or ban users there; for group calls that aren't bound to a chat.
         */
        protected bool   $isOwned,
        /**
         * True, if the current user can manage the group call; for video chats only.
         */
        protected bool   $canBeManaged,
        /**
         * Number of participants in the group call.
         */
        protected int    $participantCount,
        /**
         * True, if group call participants, which are muted, aren't returned in participant list; for video chats only.
         */
        protected bool   $hasHiddenListeners,
        /**
         * True, if all group call participants are loaded.
         */
        protected bool   $loadedAllParticipants,
        /**
         * At most 3 recently speaking users in the group call.
         *
         * @var GroupCallRecentSpeaker[]
         */
        protected array  $recentSpeakers,
        /**
         * True, if the current user's video is enabled.
         */
        protected bool   $isMyVideoEnabled,
        /**
         * True, if the current user's video is paused.
         */
        protected bool   $isMyVideoPaused,
        /**
         * True, if the current user can broadcast video or share screen.
         */
        protected bool   $canEnableVideo,
        /**
         * True, if only group call administrators can unmute new participants; for video chats only.
         */
        protected bool   $muteNewParticipants,
        /**
         * True, if the current user can enable or disable mute_new_participants setting; for video chats only.
         */
        protected bool   $canToggleMuteNewParticipants,
        /**
         * Duration of the ongoing group call recording, in seconds; 0 if none. An updateGroupCall update is not triggered when value of this field changes, but the same recording goes on.
         */
        protected int    $recordDuration,
        /**
         * True, if a video file is being recorded for the call.
         */
        protected bool   $isVideoRecorded,
        /**
         * Call duration, in seconds; for ended calls only.
         */
        protected int    $duration,
    ) {}

    public static function fromArray(array $array): GroupCall
    {
        return new static(
            $array['id'],
            $array['title'],
            $array['invite_link'],
            $array['scheduled_start_date'],
            $array['enabled_start_notification'],
            $array['is_active'],
            $array['is_video_chat'],
            $array['is_rtmp_stream'],
            $array['is_joined'],
            $array['need_rejoin'],
            $array['is_owned'],
            $array['can_be_managed'],
            $array['participant_count'],
            $array['has_hidden_listeners'],
            $array['loaded_all_participants'],
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['recent_speakers']),
            $array['is_my_video_enabled'],
            $array['is_my_video_paused'],
            $array['can_enable_video'],
            $array['mute_new_participants'],
            $array['can_toggle_mute_new_participants'],
            $array['record_duration'],
            $array['is_video_recorded'],
            $array['duration'],
        );
    }

    public function getCanBeManaged(): bool
    {
        return $this->canBeManaged;
    }

    public function getCanEnableVideo(): bool
    {
        return $this->canEnableVideo;
    }

    public function getCanToggleMuteNewParticipants(): bool
    {
        return $this->canToggleMuteNewParticipants;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getEnabledStartNotification(): bool
    {
        return $this->enabledStartNotification;
    }

    public function getHasHiddenListeners(): bool
    {
        return $this->hasHiddenListeners;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getInviteLink(): string
    {
        return $this->inviteLink;
    }

    public function getIsActive(): bool
    {
        return $this->isActive;
    }

    public function getIsJoined(): bool
    {
        return $this->isJoined;
    }

    public function getIsMyVideoEnabled(): bool
    {
        return $this->isMyVideoEnabled;
    }

    public function getIsMyVideoPaused(): bool
    {
        return $this->isMyVideoPaused;
    }

    public function getIsOwned(): bool
    {
        return $this->isOwned;
    }

    public function getIsRtmpStream(): bool
    {
        return $this->isRtmpStream;
    }

    public function getIsVideoChat(): bool
    {
        return $this->isVideoChat;
    }

    public function getIsVideoRecorded(): bool
    {
        return $this->isVideoRecorded;
    }

    public function getLoadedAllParticipants(): bool
    {
        return $this->loadedAllParticipants;
    }

    public function getMuteNewParticipants(): bool
    {
        return $this->muteNewParticipants;
    }

    public function getNeedRejoin(): bool
    {
        return $this->needRejoin;
    }

    public function getParticipantCount(): int
    {
        return $this->participantCount;
    }

    public function getRecentSpeakers(): array
    {
        return $this->recentSpeakers;
    }

    public function getRecordDuration(): int
    {
        return $this->recordDuration;
    }

    public function getScheduledStartDate(): int
    {
        return $this->scheduledStartDate;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                            => static::TYPE_NAME,
            'id'                               => $this->id,
            'title'                            => $this->title,
            'invite_link'                      => $this->inviteLink,
            'scheduled_start_date'             => $this->scheduledStartDate,
            'enabled_start_notification'       => $this->enabledStartNotification,
            'is_active'                        => $this->isActive,
            'is_video_chat'                    => $this->isVideoChat,
            'is_rtmp_stream'                   => $this->isRtmpStream,
            'is_joined'                        => $this->isJoined,
            'need_rejoin'                      => $this->needRejoin,
            'is_owned'                         => $this->isOwned,
            'can_be_managed'                   => $this->canBeManaged,
            'participant_count'                => $this->participantCount,
            'has_hidden_listeners'             => $this->hasHiddenListeners,
            'loaded_all_participants'          => $this->loadedAllParticipants,
            'recent_speakers'                  => array_map(static fn($x) => $x->typeSerialize(), $this->recentSpeakers),
            'is_my_video_enabled'              => $this->isMyVideoEnabled,
            'is_my_video_paused'               => $this->isMyVideoPaused,
            'can_enable_video'                 => $this->canEnableVideo,
            'mute_new_participants'            => $this->muteNewParticipants,
            'can_toggle_mute_new_participants' => $this->canToggleMuteNewParticipants,
            'record_duration'                  => $this->recordDuration,
            'is_video_recorded'                => $this->isVideoRecorded,
            'duration'                         => $this->duration,
        ];
    }
}
