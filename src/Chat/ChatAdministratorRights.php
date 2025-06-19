<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;

/**
 * Describes rights of the administrator.
 */
class ChatAdministratorRights extends TdObject
{
    public const TYPE_NAME = 'chatAdministratorRights';

    public function __construct(
        /**
         * True, if the administrator can access the chat event log, get boost list, see hidden supergroup and channel members, report supergroup spam messages, ignore slow mode, and send messages to the chat without paying Telegram Stars. Implied by any other privilege; applicable to supergroups and channels only.
         */
        protected bool $canManageChat,
        /**
         * True, if the administrator can change the chat title, photo, and other settings.
         */
        protected bool $canChangeInfo,
        /**
         * True, if the administrator can create channel posts, answer to channel direct messages, or view channel statistics; applicable to channels only.
         */
        protected bool $canPostMessages,
        /**
         * True, if the administrator can edit messages of other users and pin messages; applicable to channels only.
         */
        protected bool $canEditMessages,
        /**
         * True, if the administrator can delete messages of other users.
         */
        protected bool $canDeleteMessages,
        /**
         * True, if the administrator can invite new users to the chat.
         */
        protected bool $canInviteUsers,
        /**
         * True, if the administrator can restrict, ban, or unban chat members or view supergroup statistics; always true for channels.
         */
        protected bool $canRestrictMembers,
        /**
         * True, if the administrator can pin messages; applicable to basic groups and supergroups only.
         */
        protected bool $canPinMessages,
        /**
         * True, if the administrator can create, rename, close, reopen, hide, and unhide forum topics; applicable to forum supergroups only.
         */
        protected bool $canManageTopics,
        /**
         * True, if the administrator can add new administrators with a subset of their own privileges or demote administrators that were directly or indirectly promoted by them.
         */
        protected bool $canPromoteMembers,
        /**
         * True, if the administrator can manage video chats.
         */
        protected bool $canManageVideoChats,
        /**
         * True, if the administrator can create new chat stories, or edit and delete posted stories; applicable to supergroups and channels only.
         */
        protected bool $canPostStories,
        /**
         * True, if the administrator can edit stories posted by other users, post stories to the chat page, pin chat stories, and access story archive; applicable to supergroups and channels only.
         */
        protected bool $canEditStories,
        /**
         * True, if the administrator can delete stories posted by other users; applicable to supergroups and channels only.
         */
        protected bool $canDeleteStories,
        /**
         * True, if the administrator isn't shown in the chat member list and sends messages anonymously; applicable to supergroups only.
         */
        protected bool $isAnonymous,
    ) {}

    public static function fromArray(array $array): ChatAdministratorRights
    {
        return new static(
            $array['can_manage_chat'],
            $array['can_change_info'],
            $array['can_post_messages'],
            $array['can_edit_messages'],
            $array['can_delete_messages'],
            $array['can_invite_users'],
            $array['can_restrict_members'],
            $array['can_pin_messages'],
            $array['can_manage_topics'],
            $array['can_promote_members'],
            $array['can_manage_video_chats'],
            $array['can_post_stories'],
            $array['can_edit_stories'],
            $array['can_delete_stories'],
            $array['is_anonymous'],
        );
    }

    public function getCanChangeInfo(): bool
    {
        return $this->canChangeInfo;
    }

    public function getCanDeleteMessages(): bool
    {
        return $this->canDeleteMessages;
    }

    public function getCanDeleteStories(): bool
    {
        return $this->canDeleteStories;
    }

    public function getCanEditMessages(): bool
    {
        return $this->canEditMessages;
    }

    public function getCanEditStories(): bool
    {
        return $this->canEditStories;
    }

    public function getCanInviteUsers(): bool
    {
        return $this->canInviteUsers;
    }

    public function getCanManageChat(): bool
    {
        return $this->canManageChat;
    }

    public function getCanManageTopics(): bool
    {
        return $this->canManageTopics;
    }

    public function getCanManageVideoChats(): bool
    {
        return $this->canManageVideoChats;
    }

    public function getCanPinMessages(): bool
    {
        return $this->canPinMessages;
    }

    public function getCanPostMessages(): bool
    {
        return $this->canPostMessages;
    }

    public function getCanPostStories(): bool
    {
        return $this->canPostStories;
    }

    public function getCanPromoteMembers(): bool
    {
        return $this->canPromoteMembers;
    }

    public function getCanRestrictMembers(): bool
    {
        return $this->canRestrictMembers;
    }

    public function getIsAnonymous(): bool
    {
        return $this->isAnonymous;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'can_manage_chat'        => $this->canManageChat,
            'can_change_info'        => $this->canChangeInfo,
            'can_post_messages'      => $this->canPostMessages,
            'can_edit_messages'      => $this->canEditMessages,
            'can_delete_messages'    => $this->canDeleteMessages,
            'can_invite_users'       => $this->canInviteUsers,
            'can_restrict_members'   => $this->canRestrictMembers,
            'can_pin_messages'       => $this->canPinMessages,
            'can_manage_topics'      => $this->canManageTopics,
            'can_promote_members'    => $this->canPromoteMembers,
            'can_manage_video_chats' => $this->canManageVideoChats,
            'can_post_stories'       => $this->canPostStories,
            'can_edit_stories'       => $this->canEditStories,
            'can_delete_stories'     => $this->canDeleteStories,
            'is_anonymous'           => $this->isAnonymous,
        ];
    }
}
