<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;

/**
 * Represents a set of filters used to obtain a chat event log.
 */
class ChatEventLogFilters extends TdObject
{
    public const string TYPE_NAME = 'chatEventLogFilters';

    public function __construct(
        /**
         * True, if message edits need to be returned.
         */
        protected bool $messageEdits,
        /**
         * True, if message deletions need to be returned.
         */
        protected bool $messageDeletions,
        /**
         * True, if pin/unpin events need to be returned.
         */
        protected bool $messagePins,
        /**
         * True, if members joining events need to be returned.
         */
        protected bool $memberJoins,
        /**
         * True, if members leaving events need to be returned.
         */
        protected bool $memberLeaves,
        /**
         * True, if invited member events need to be returned.
         */
        protected bool $memberInvites,
        /**
         * True, if member promotion/demotion events need to be returned.
         */
        protected bool $memberPromotions,
        /**
         * True, if member restricted/unrestricted/banned/unbanned events need to be returned.
         */
        protected bool $memberRestrictions,
        /**
         * True, if changes in chat information need to be returned.
         */
        protected bool $infoChanges,
        /**
         * True, if changes in chat settings need to be returned.
         */
        protected bool $settingChanges,
        /**
         * True, if changes to invite links need to be returned.
         */
        protected bool $inviteLinkChanges,
        /**
         * True, if video chat actions need to be returned.
         */
        protected bool $videoChatChanges,
        /**
         * True, if forum-related actions need to be returned.
         */
        protected bool $forumChanges,
        /**
         * True, if subscription extensions need to be returned.
         */
        protected bool $subscriptionExtensions,
    ) {}

    public static function fromArray(array $array): ChatEventLogFilters
    {
        return new static(
            $array['message_edits'],
            $array['message_deletions'],
            $array['message_pins'],
            $array['member_joins'],
            $array['member_leaves'],
            $array['member_invites'],
            $array['member_promotions'],
            $array['member_restrictions'],
            $array['info_changes'],
            $array['setting_changes'],
            $array['invite_link_changes'],
            $array['video_chat_changes'],
            $array['forum_changes'],
            $array['subscription_extensions'],
        );
    }

    public function getForumChanges(): bool
    {
        return $this->forumChanges;
    }

    public function getInfoChanges(): bool
    {
        return $this->infoChanges;
    }

    public function getInviteLinkChanges(): bool
    {
        return $this->inviteLinkChanges;
    }

    public function getMemberInvites(): bool
    {
        return $this->memberInvites;
    }

    public function getMemberJoins(): bool
    {
        return $this->memberJoins;
    }

    public function getMemberLeaves(): bool
    {
        return $this->memberLeaves;
    }

    public function getMemberPromotions(): bool
    {
        return $this->memberPromotions;
    }

    public function getMemberRestrictions(): bool
    {
        return $this->memberRestrictions;
    }

    public function getMessageDeletions(): bool
    {
        return $this->messageDeletions;
    }

    public function getMessageEdits(): bool
    {
        return $this->messageEdits;
    }

    public function getMessagePins(): bool
    {
        return $this->messagePins;
    }

    public function getSettingChanges(): bool
    {
        return $this->settingChanges;
    }

    public function getSubscriptionExtensions(): bool
    {
        return $this->subscriptionExtensions;
    }

    public function getVideoChatChanges(): bool
    {
        return $this->videoChatChanges;
    }

    public function setForumChanges(bool $value): static
    {
        $this->forumChanges = $value;

        return $this;
    }

    public function setInfoChanges(bool $value): static
    {
        $this->infoChanges = $value;

        return $this;
    }

    public function setInviteLinkChanges(bool $value): static
    {
        $this->inviteLinkChanges = $value;

        return $this;
    }

    public function setMemberInvites(bool $value): static
    {
        $this->memberInvites = $value;

        return $this;
    }

    public function setMemberJoins(bool $value): static
    {
        $this->memberJoins = $value;

        return $this;
    }

    public function setMemberLeaves(bool $value): static
    {
        $this->memberLeaves = $value;

        return $this;
    }

    public function setMemberPromotions(bool $value): static
    {
        $this->memberPromotions = $value;

        return $this;
    }

    public function setMemberRestrictions(bool $value): static
    {
        $this->memberRestrictions = $value;

        return $this;
    }

    public function setMessageDeletions(bool $value): static
    {
        $this->messageDeletions = $value;

        return $this;
    }

    public function setMessageEdits(bool $value): static
    {
        $this->messageEdits = $value;

        return $this;
    }

    public function setMessagePins(bool $value): static
    {
        $this->messagePins = $value;

        return $this;
    }

    public function setSettingChanges(bool $value): static
    {
        $this->settingChanges = $value;

        return $this;
    }

    public function setSubscriptionExtensions(bool $value): static
    {
        $this->subscriptionExtensions = $value;

        return $this;
    }

    public function setVideoChatChanges(bool $value): static
    {
        $this->videoChatChanges = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'message_edits'           => $this->messageEdits,
            'message_deletions'       => $this->messageDeletions,
            'message_pins'            => $this->messagePins,
            'member_joins'            => $this->memberJoins,
            'member_leaves'           => $this->memberLeaves,
            'member_invites'          => $this->memberInvites,
            'member_promotions'       => $this->memberPromotions,
            'member_restrictions'     => $this->memberRestrictions,
            'info_changes'            => $this->infoChanges,
            'setting_changes'         => $this->settingChanges,
            'invite_link_changes'     => $this->inviteLinkChanges,
            'video_chat_changes'      => $this->videoChatChanges,
            'forum_changes'           => $this->forumChanges,
            'subscription_extensions' => $this->subscriptionExtensions,
        ];
    }
}
