<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Scope;

use Totaldev\TgSchema\TdObject;

/**
 * Contains information about notification settings for several chats.
 */
class ScopeNotificationSettings extends TdObject
{
    public const string TYPE_NAME = 'scopeNotificationSettings';

    public function __construct(
        /**
         * True, if notifications for messages with mentions will be created as for an ordinary unread message.
         */
        protected bool $disableMentionNotifications,
        /**
         * True, if notifications for incoming pinned messages will be created as for an ordinary unread message.
         */
        protected bool $disablePinnedMessageNotifications,
        /**
         * Time left before notifications will be unmuted, in seconds.
         */
        protected int  $muteFor,
        /**
         * True, if story notifications are disabled.
         */
        protected bool $muteStories,
        /**
         * True, if message content must be displayed in notifications.
         */
        protected bool $showPreview,
        /**
         * True, if the chat that posted a story must be displayed in notifications.
         */
        protected bool $showStoryPoster,
        /**
         * Identifier of the notification sound to be played; 0 if sound is disabled.
         */
        protected int  $soundId,
        /**
         * Identifier of the notification sound to be played for stories; 0 if sound is disabled.
         */
        protected int  $storySoundId,
        /**
         * If true, story notifications are received only for the first 5 chats from topChatCategoryUsers regardless of the value of mute_stories.
         */
        protected bool $useDefaultMuteStories,
    ) {}

    public static function fromArray(array $array): ScopeNotificationSettings
    {
        return new static(
            disableMentionNotifications      : $array['disable_mention_notifications'],
            disablePinnedMessageNotifications: $array['disable_pinned_message_notifications'],
            muteFor                          : $array['mute_for'],
            muteStories                      : $array['mute_stories'],
            showPreview                      : $array['show_preview'],
            showStoryPoster                  : $array['show_story_poster'],
            soundId                          : $array['sound_id'],
            storySoundId                     : $array['story_sound_id'],
            useDefaultMuteStories            : $array['use_default_mute_stories'],
        );
    }

    public function getDisableMentionNotifications(): bool
    {
        return $this->disableMentionNotifications;
    }

    public function getDisablePinnedMessageNotifications(): bool
    {
        return $this->disablePinnedMessageNotifications;
    }

    public function getMuteFor(): int
    {
        return $this->muteFor;
    }

    public function getMuteStories(): bool
    {
        return $this->muteStories;
    }

    public function getShowPreview(): bool
    {
        return $this->showPreview;
    }

    public function getShowStoryPoster(): bool
    {
        return $this->showStoryPoster;
    }

    public function getSoundId(): int
    {
        return $this->soundId;
    }

    public function getStorySoundId(): int
    {
        return $this->storySoundId;
    }

    public function getUseDefaultMuteStories(): bool
    {
        return $this->useDefaultMuteStories;
    }

    public function setDisableMentionNotifications(bool $value): static
    {
        $this->disableMentionNotifications = $value;

        return $this;
    }

    public function setDisablePinnedMessageNotifications(bool $value): static
    {
        $this->disablePinnedMessageNotifications = $value;

        return $this;
    }

    public function setMuteFor(int $value): static
    {
        $this->muteFor = $value;

        return $this;
    }

    public function setMuteStories(bool $value): static
    {
        $this->muteStories = $value;

        return $this;
    }

    public function setShowPreview(bool $value): static
    {
        $this->showPreview = $value;

        return $this;
    }

    public function setShowStoryPoster(bool $value): static
    {
        $this->showStoryPoster = $value;

        return $this;
    }

    public function setSoundId(int $value): static
    {
        $this->soundId = $value;

        return $this;
    }

    public function setStorySoundId(int $value): static
    {
        $this->storySoundId = $value;

        return $this;
    }

    public function setUseDefaultMuteStories(bool $value): static
    {
        $this->useDefaultMuteStories = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                                => static::TYPE_NAME,
            'disable_mention_notifications'        => $this->disableMentionNotifications,
            'disable_pinned_message_notifications' => $this->disablePinnedMessageNotifications,
            'mute_for'                             => $this->muteFor,
            'mute_stories'                         => $this->muteStories,
            'show_preview'                         => $this->showPreview,
            'show_story_poster'                    => $this->showStoryPoster,
            'sound_id'                             => $this->soundId,
            'story_sound_id'                       => $this->storySoundId,
            'use_default_mute_stories'             => $this->useDefaultMuteStories,
        ];
    }
}
