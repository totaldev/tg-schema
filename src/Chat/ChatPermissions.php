<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;

/**
 * Describes actions that a user is allowed to take in a chat.
 */
class ChatPermissions extends TdObject
{
    public const TYPE_NAME = 'chatPermissions';

    public function __construct(
        /**
         * True, if the user can send text messages, contacts, giveaways, giveaway winners, invoices, locations, and venues.
         */
        protected bool $canSendBasicMessages,
        /**
         * True, if the user can send music files.
         */
        protected bool $canSendAudios,
        /**
         * True, if the user can send documents.
         */
        protected bool $canSendDocuments,
        /**
         * True, if the user can send photos.
         */
        protected bool $canSendPhotos,
        /**
         * True, if the user can send videos.
         */
        protected bool $canSendVideos,
        /**
         * True, if the user can send video notes.
         */
        protected bool $canSendVideoNotes,
        /**
         * True, if the user can send voice notes.
         */
        protected bool $canSendVoiceNotes,
        /**
         * True, if the user can send polls.
         */
        protected bool $canSendPolls,
        /**
         * True, if the user can send animations, games, stickers, and dice and use inline bots.
         */
        protected bool $canSendOtherMessages,
        /**
         * True, if the user may add a link preview to their messages.
         */
        protected bool $canAddLinkPreviews,
        /**
         * True, if the user can change the chat title, photo, and other settings.
         */
        protected bool $canChangeInfo,
        /**
         * True, if the user can invite new users to the chat.
         */
        protected bool $canInviteUsers,
        /**
         * True, if the user can pin messages.
         */
        protected bool $canPinMessages,
        /**
         * True, if the user can create topics.
         */
        protected bool $canCreateTopics,
    ) {}

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
            $array['can_add_link_previews'],
            $array['can_change_info'],
            $array['can_invite_users'],
            $array['can_pin_messages'],
            $array['can_create_topics'],
        );
    }

    public function getCanAddLinkPreviews(): bool
    {
        return $this->canAddLinkPreviews;
    }

    public function getCanChangeInfo(): bool
    {
        return $this->canChangeInfo;
    }

    public function getCanCreateTopics(): bool
    {
        return $this->canCreateTopics;
    }

    public function getCanInviteUsers(): bool
    {
        return $this->canInviteUsers;
    }

    public function getCanPinMessages(): bool
    {
        return $this->canPinMessages;
    }

    public function getCanSendAudios(): bool
    {
        return $this->canSendAudios;
    }

    public function getCanSendBasicMessages(): bool
    {
        return $this->canSendBasicMessages;
    }

    public function getCanSendDocuments(): bool
    {
        return $this->canSendDocuments;
    }

    public function getCanSendOtherMessages(): bool
    {
        return $this->canSendOtherMessages;
    }

    public function getCanSendPhotos(): bool
    {
        return $this->canSendPhotos;
    }

    public function getCanSendPolls(): bool
    {
        return $this->canSendPolls;
    }

    public function getCanSendVideoNotes(): bool
    {
        return $this->canSendVideoNotes;
    }

    public function getCanSendVideos(): bool
    {
        return $this->canSendVideos;
    }

    public function getCanSendVoiceNotes(): bool
    {
        return $this->canSendVoiceNotes;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'can_send_basic_messages' => $this->canSendBasicMessages,
            'can_send_audios'         => $this->canSendAudios,
            'can_send_documents'      => $this->canSendDocuments,
            'can_send_photos'         => $this->canSendPhotos,
            'can_send_videos'         => $this->canSendVideos,
            'can_send_video_notes'    => $this->canSendVideoNotes,
            'can_send_voice_notes'    => $this->canSendVoiceNotes,
            'can_send_polls'          => $this->canSendPolls,
            'can_send_other_messages' => $this->canSendOtherMessages,
            'can_add_link_previews'   => $this->canAddLinkPreviews,
            'can_change_info'         => $this->canChangeInfo,
            'can_invite_users'        => $this->canInviteUsers,
            'can_pin_messages'        => $this->canPinMessages,
            'can_create_topics'       => $this->canCreateTopics,
        ];
    }
}
