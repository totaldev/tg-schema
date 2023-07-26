<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace TotaldevTgSchema;

/**
 * Describes actions that a user is allowed to take in a chat
 */
class ChatPermissions extends TdObject
{
    public const TYPE_NAME = 'chatPermissions';

    /**
     * True, if the user can send text messages, contacts, invoices, locations, and venues
     *
     * @var bool
     */
    protected bool $canSendBasicMessages;

    /**
     * True, if the user can send music files
     *
     * @var bool
     */
    protected bool $canSendAudios;

    /**
     * True, if the user can send documents
     *
     * @var bool
     */
    protected bool $canSendDocuments;

    /**
     * True, if the user can send audio photos
     *
     * @var bool
     */
    protected bool $canSendPhotos;

    /**
     * True, if the user can send audio videos
     *
     * @var bool
     */
    protected bool $canSendVideos;

    /**
     * True, if the user can send video notes
     *
     * @var bool
     */
    protected bool $canSendVideoNotes;

    /**
     * True, if the user can send voice notes
     *
     * @var bool
     */
    protected bool $canSendVoiceNotes;

    /**
     * True, if the user can send polls
     *
     * @var bool
     */
    protected bool $canSendPolls;

    /**
     * True, if the user can send animations, games, stickers, and dice and use inline bots
     *
     * @var bool
     */
    protected bool $canSendOtherMessages;

    /**
     * True, if the user may add a web page preview to their messages
     *
     * @var bool
     */
    protected bool $canAddWebPagePreviews;

    /**
     * True, if the user can change the chat title, photo, and other settings
     *
     * @var bool
     */
    protected bool $canChangeInfo;

    /**
     * True, if the user can invite new users to the chat
     *
     * @var bool
     */
    protected bool $canInviteUsers;

    /**
     * True, if the user can pin messages
     *
     * @var bool
     */
    protected bool $canPinMessages;

    /**
     * True, if the user can manage topics
     *
     * @var bool
     */
    protected bool $canManageTopics;

    public function __construct(
        bool $canSendBasicMessages,
        bool $canSendAudios,
        bool $canSendDocuments,
        bool $canSendPhotos,
        bool $canSendVideos,
        bool $canSendVideoNotes,
        bool $canSendVoiceNotes,
        bool $canSendPolls,
        bool $canSendOtherMessages,
        bool $canAddWebPagePreviews,
        bool $canChangeInfo,
        bool $canInviteUsers,
        bool $canPinMessages,
        bool $canManageTopics
    ) {
        $this->canSendBasicMessages = $canSendBasicMessages;
        $this->canSendAudios = $canSendAudios;
        $this->canSendDocuments = $canSendDocuments;
        $this->canSendPhotos = $canSendPhotos;
        $this->canSendVideos = $canSendVideos;
        $this->canSendVideoNotes = $canSendVideoNotes;
        $this->canSendVoiceNotes = $canSendVoiceNotes;
        $this->canSendPolls = $canSendPolls;
        $this->canSendOtherMessages = $canSendOtherMessages;
        $this->canAddWebPagePreviews = $canAddWebPagePreviews;
        $this->canChangeInfo = $canChangeInfo;
        $this->canInviteUsers = $canInviteUsers;
        $this->canPinMessages = $canPinMessages;
        $this->canManageTopics = $canManageTopics;
    }

    public static function fromArray(array $array): ChatPermissions
    {
        return new static(
            $array['can_send_basic_messages'],
            $array['can_send_audios'],
            $array['can_send_documents'],
            $array['can_send_photos'],
            $array['can_send_videos'],
            $array['can_send_video_notes'],
            $array['can_send_voice_notes'],
            $array['can_send_polls'],
            $array['can_send_other_messages'],
            $array['can_add_web_page_previews'],
            $array['can_change_info'],
            $array['can_invite_users'],
            $array['can_pin_messages'],
            $array['can_manage_topics'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'can_send_basic_messages' => $this->canSendBasicMessages,
            'can_send_audios' => $this->canSendAudios,
            'can_send_documents' => $this->canSendDocuments,
            'can_send_photos' => $this->canSendPhotos,
            'can_send_videos' => $this->canSendVideos,
            'can_send_video_notes' => $this->canSendVideoNotes,
            'can_send_voice_notes' => $this->canSendVoiceNotes,
            'can_send_polls' => $this->canSendPolls,
            'can_send_other_messages' => $this->canSendOtherMessages,
            'can_add_web_page_previews' => $this->canAddWebPagePreviews,
            'can_change_info' => $this->canChangeInfo,
            'can_invite_users' => $this->canInviteUsers,
            'can_pin_messages' => $this->canPinMessages,
            'can_manage_topics' => $this->canManageTopics,
        ];
    }

    public function getCanSendBasicMessages(): bool
    {
        return $this->canSendBasicMessages;
    }

    public function getCanSendAudios(): bool
    {
        return $this->canSendAudios;
    }

    public function getCanSendDocuments(): bool
    {
        return $this->canSendDocuments;
    }

    public function getCanSendPhotos(): bool
    {
        return $this->canSendPhotos;
    }

    public function getCanSendVideos(): bool
    {
        return $this->canSendVideos;
    }

    public function getCanSendVideoNotes(): bool
    {
        return $this->canSendVideoNotes;
    }

    public function getCanSendVoiceNotes(): bool
    {
        return $this->canSendVoiceNotes;
    }

    public function getCanSendPolls(): bool
    {
        return $this->canSendPolls;
    }

    public function getCanSendOtherMessages(): bool
    {
        return $this->canSendOtherMessages;
    }

    public function getCanAddWebPagePreviews(): bool
    {
        return $this->canAddWebPagePreviews;
    }

    public function getCanChangeInfo(): bool
    {
        return $this->canChangeInfo;
    }

    public function getCanInviteUsers(): bool
    {
        return $this->canInviteUsers;
    }

    public function getCanPinMessages(): bool
    {
        return $this->canPinMessages;
    }

    public function getCanManageTopics(): bool
    {
        return $this->canManageTopics;
    }
}
