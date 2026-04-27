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
         * True, if forum-related actions need to be returned.
         */
        protected bool $forumChanges,
        /**
         * True, if changes in chat information need to be returned.
         */
        protected bool $infoChanges,
        /**
         * True, if changes to invite links need to be returned.
         */
        protected bool $inviteLinkChanges,
        /**
         * True, if invited member events need to be returned.
         */
        protected bool $memberInvites,
        /**
         * True, if members joining events need to be returned.
         */
        protected bool $memberJoins,
        /**
         * True, if members leaving events need to be returned.
         */
        protected bool $memberLeaves,
        /**
         * True, if member promotion/demotion events need to be returned.
         */
        protected bool $memberPromotions,
        /**
         * True, if member restricted/unrestricted/banned/unbanned events need to be returned.
         */
        protected bool $memberRestrictions,
        /**
         * True, if member tag and custom title change events need to be returned.
         */
        protected bool $memberTagChanges,
        /**
         * True, if message deletions need to be returned.
         */
        protected bool $messageDeletions,
        /**
         * True, if message edits need to be returned.
         */
        protected bool $messageEdits,
        /**
         * True, if pin/unpin events need to be returned.
         */
        protected bool $messagePins,
        /**
         * True, if changes in chat settings need to be returned.
         */
        protected bool $settingChanges,
        /**
         * True, if subscription extensions need to be returned.
         */
        protected bool $subscriptionExtensions,
        /**
         * True, if video chat actions need to be returned.
         */
        protected bool $videoChatChanges,
    ) {}

    public static function fromArray(array $array): ChatEventLogFilters
    {
        return new static(
            forumChanges          : $array['forum_changes'],
            infoChanges           : $array['info_changes'],
            inviteLinkChanges     : $array['invite_link_changes'],
            memberInvites         : $array['member_invites'],
            memberJoins           : $array['member_joins'],
            memberLeaves          : $array['member_leaves'],
            memberPromotions      : $array['member_promotions'],
            memberRestrictions    : $array['member_restrictions'],
            memberTagChanges      : $array['member_tag_changes'],
            messageDeletions      : $array['message_deletions'],
            messageEdits          : $array['message_edits'],
            messagePins           : $array['message_pins'],
            settingChanges        : $array['setting_changes'],
            subscriptionExtensions: $array['subscription_extensions'],
            videoChatChanges      : $array['video_chat_changes'],
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

    public function getMemberTagChanges(): bool
    {
        return $this->memberTagChanges;
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

    public function setMemberTagChanges(bool $value): static
    {
        $this->memberTagChanges = $value;

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
            'forum_changes'           => $this->forumChanges,
            'info_changes'            => $this->infoChanges,
            'invite_link_changes'     => $this->inviteLinkChanges,
            'member_invites'          => $this->memberInvites,
            'member_joins'            => $this->memberJoins,
            'member_leaves'           => $this->memberLeaves,
            'member_promotions'       => $this->memberPromotions,
            'member_restrictions'     => $this->memberRestrictions,
            'member_tag_changes'      => $this->memberTagChanges,
            'message_deletions'       => $this->messageDeletions,
            'message_edits'           => $this->messageEdits,
            'message_pins'            => $this->messagePins,
            'setting_changes'         => $this->settingChanges,
            'subscription_extensions' => $this->subscriptionExtensions,
            'video_chat_changes'      => $this->videoChatChanges,
        ];
    }
}
