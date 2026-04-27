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
    public const string TYPE_NAME = 'groupCall';

    public function __construct(
        /**
         * True, if the current user can manage the group call; for video chats only.
         */
        protected bool   $canBeManaged,
        /**
         * True, if the current user can broadcast video or share screen.
         */
        protected bool   $canEnableVideo,
        /**
         * True, if users can send messages to the group call.
         */
        protected bool   $canSendMessages,
        /**
         * True, if the current user can enable or disable sending messages in the group call.
         */
        protected bool   $canToggleCanSendMessages,
        /**
         * True, if the current user can enable or disable mute_new_participants setting; for video chats only.
         */
        protected bool   $canToggleMuteNewParticipants,
        /**
         * Call duration, in seconds; for ended calls only.
         */
        protected int    $duration,
        /**
         * True, if the group call is scheduled and the current user will receive a notification when the group call starts; for video chats only.
         */
        protected bool   $enabledStartNotification,
        /**
         * True, if group call participants, which are muted, aren't returned in participant list; for video chats only.
         */
        protected bool   $hasHiddenListeners,
        /**
         * Group call identifier.
         */
        protected int    $id,
        /**
         * Invite link for the group call; for group calls that aren't bound to a chat. For video chats call getVideoChatInviteLink to get the link.
         */
        protected string $inviteLink,
        /**
         * True, if the call is active.
         */
        protected bool   $isActive,
        /**
         * True, if the call is joined.
         */
        protected bool   $isJoined,
        /**
         * True, if the current user's video is enabled.
         */
        protected bool   $isMyVideoEnabled,
        /**
         * True, if the current user's video is paused.
         */
        protected bool   $isMyVideoPaused,
        /**
         * True, if the user is the owner of the call and can end the call, change volume level of other users, or ban users there; for group calls that aren't bound to a chat.
         */
        protected bool   $isOwned,
        /**
         * True, if the call is an RTMP stream instead of an ordinary video chat; for video chats only.
         */
        protected bool   $isRtmpStream,
        /**
         * True, if the call is bound to a chat.
         */
        protected bool   $isVideoChat,
        /**
         * True, if a video file is being recorded for the call.
         */
        protected bool   $isVideoRecorded,
        /**
         * True, if all group call participants are loaded.
         */
        protected bool   $loadedAllParticipants,
        /**
         * True, if only group call administrators can unmute new participants; for video chats only.
         */
        protected bool   $muteNewParticipants,
        /**
         * True, if user was kicked from the call because of network loss and the call needs to be rejoined.
         */
        protected bool   $needRejoin,
        /**
         * Number of participants in the group call.
         */
        protected int    $participantCount,
        /**
         * At most 3 recently speaking users in the group call.
         *
         * @var GroupCallRecentSpeaker[]
         */
        protected array  $recentSpeakers,
        /**
         * Duration of the ongoing group call recording, in seconds; 0 if none. An updateGroupCall update is not triggered when value of this field changes, but the same recording goes on.
         */
        protected int    $recordDuration,
        /**
         * Point in time (Unix timestamp) when the group call is expected to be started by an administrator; 0 if it is already active or was ended; for video chats only.
         */
        protected int    $scheduledStartDate,
        /**
         * Group call title; for video chats only.
         */
        protected string $title,
    ) {}

    public static function fromArray(array $array): GroupCall
    {
        return new static(
            canBeManaged                : $array['can_be_managed'],
            canEnableVideo              : $array['can_enable_video'],
            canSendMessages             : $array['can_send_messages'],
            canToggleCanSendMessages    : $array['can_toggle_can_send_messages'],
            canToggleMuteNewParticipants: $array['can_toggle_mute_new_participants'],
            duration                    : $array['duration'],
            enabledStartNotification    : $array['enabled_start_notification'],
            hasHiddenListeners          : $array['has_hidden_listeners'],
            id                          : $array['id'],
            inviteLink                  : $array['invite_link'],
            isActive                    : $array['is_active'],
            isJoined                    : $array['is_joined'],
            isMyVideoEnabled            : $array['is_my_video_enabled'],
            isMyVideoPaused             : $array['is_my_video_paused'],
            isOwned                     : $array['is_owned'],
            isRtmpStream                : $array['is_rtmp_stream'],
            isVideoChat                 : $array['is_video_chat'],
            isVideoRecorded             : $array['is_video_recorded'],
            loadedAllParticipants       : $array['loaded_all_participants'],
            muteNewParticipants         : $array['mute_new_participants'],
            needRejoin                  : $array['need_rejoin'],
            participantCount            : $array['participant_count'],
            recentSpeakers              : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['recent_speakers']),
            recordDuration              : $array['record_duration'],
            scheduledStartDate          : $array['scheduled_start_date'],
            title                       : $array['title'],
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

    public function getCanSendMessages(): bool
    {
        return $this->canSendMessages;
    }

    public function getCanToggleCanSendMessages(): bool
    {
        return $this->canToggleCanSendMessages;
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

    public function setCanBeManaged(bool $value): static
    {
        $this->canBeManaged = $value;

        return $this;
    }

    public function setCanEnableVideo(bool $value): static
    {
        $this->canEnableVideo = $value;

        return $this;
    }

    public function setCanSendMessages(bool $value): static
    {
        $this->canSendMessages = $value;

        return $this;
    }

    public function setCanToggleCanSendMessages(bool $value): static
    {
        $this->canToggleCanSendMessages = $value;

        return $this;
    }

    public function setCanToggleMuteNewParticipants(bool $value): static
    {
        $this->canToggleMuteNewParticipants = $value;

        return $this;
    }

    public function setDuration(int $value): static
    {
        $this->duration = $value;

        return $this;
    }

    public function setEnabledStartNotification(bool $value): static
    {
        $this->enabledStartNotification = $value;

        return $this;
    }

    public function setHasHiddenListeners(bool $value): static
    {
        $this->hasHiddenListeners = $value;

        return $this;
    }

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setInviteLink(string $value): static
    {
        $this->inviteLink = $value;

        return $this;
    }

    public function setIsActive(bool $value): static
    {
        $this->isActive = $value;

        return $this;
    }

    public function setIsJoined(bool $value): static
    {
        $this->isJoined = $value;

        return $this;
    }

    public function setIsMyVideoEnabled(bool $value): static
    {
        $this->isMyVideoEnabled = $value;

        return $this;
    }

    public function setIsMyVideoPaused(bool $value): static
    {
        $this->isMyVideoPaused = $value;

        return $this;
    }

    public function setIsOwned(bool $value): static
    {
        $this->isOwned = $value;

        return $this;
    }

    public function setIsRtmpStream(bool $value): static
    {
        $this->isRtmpStream = $value;

        return $this;
    }

    public function setIsVideoChat(bool $value): static
    {
        $this->isVideoChat = $value;

        return $this;
    }

    public function setIsVideoRecorded(bool $value): static
    {
        $this->isVideoRecorded = $value;

        return $this;
    }

    public function setLoadedAllParticipants(bool $value): static
    {
        $this->loadedAllParticipants = $value;

        return $this;
    }

    public function setMuteNewParticipants(bool $value): static
    {
        $this->muteNewParticipants = $value;

        return $this;
    }

    public function setNeedRejoin(bool $value): static
    {
        $this->needRejoin = $value;

        return $this;
    }

    public function setParticipantCount(int $value): static
    {
        $this->participantCount = $value;

        return $this;
    }

    public function setRecentSpeakers(array $value): static
    {
        $this->recentSpeakers = $value;

        return $this;
    }

    public function setRecordDuration(int $value): static
    {
        $this->recordDuration = $value;

        return $this;
    }

    public function setScheduledStartDate(int $value): static
    {
        $this->scheduledStartDate = $value;

        return $this;
    }

    public function setTitle(string $value): static
    {
        $this->title = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                            => static::TYPE_NAME,
            'can_be_managed'                   => $this->canBeManaged,
            'can_enable_video'                 => $this->canEnableVideo,
            'can_send_messages'                => $this->canSendMessages,
            'can_toggle_can_send_messages'     => $this->canToggleCanSendMessages,
            'can_toggle_mute_new_participants' => $this->canToggleMuteNewParticipants,
            'duration'                         => $this->duration,
            'enabled_start_notification'       => $this->enabledStartNotification,
            'has_hidden_listeners'             => $this->hasHiddenListeners,
            'id'                               => $this->id,
            'invite_link'                      => $this->inviteLink,
            'is_active'                        => $this->isActive,
            'is_joined'                        => $this->isJoined,
            'is_my_video_enabled'              => $this->isMyVideoEnabled,
            'is_my_video_paused'               => $this->isMyVideoPaused,
            'is_owned'                         => $this->isOwned,
            'is_rtmp_stream'                   => $this->isRtmpStream,
            'is_video_chat'                    => $this->isVideoChat,
            'is_video_recorded'                => $this->isVideoRecorded,
            'loaded_all_participants'          => $this->loadedAllParticipants,
            'mute_new_participants'            => $this->muteNewParticipants,
            'need_rejoin'                      => $this->needRejoin,
            'participant_count'                => $this->participantCount,
            'recent_speakers'                  => array_map(static fn($x) => $x->jsonSerialize(), $this->recentSpeakers),
            'record_duration'                  => $this->recordDuration,
            'scheduled_start_date'             => $this->scheduledStartDate,
            'title'                            => $this->title,
        ];
    }
}
