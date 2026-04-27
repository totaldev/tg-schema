<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;

/**
 * Contains information about notification settings for a chat or a forum topic.
 */
class ChatNotificationSettings extends TdObject
{
    public const string TYPE_NAME = 'chatNotificationSettings';

    public function __construct(
        /**
         * If true, notifications for messages with mentions will be created as for an ordinary unread message.
         */
        protected bool $disableMentionNotifications,
        /**
         * If true, notifications for incoming pinned messages will be created as for an ordinary unread message.
         */
        protected bool $disablePinnedMessageNotifications,
        /**
         * Time left before notifications will be unmuted, in seconds.
         */
        protected int  $muteFor,
        /**
         * True, if story notifications are disabled for the chat.
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
         * Identifier of the notification sound to be played for messages; 0 if sound is disabled.
         */
        protected int  $soundId,
        /**
         * Identifier of the notification sound to be played for stories; 0 if sound is disabled.
         */
        protected int  $storySoundId,
        /**
         * If true, the value for the relevant type of chat or the forum chat is used instead of disable_mention_notifications.
         */
        protected bool $useDefaultDisableMentionNotifications,
        /**
         * If true, the value for the relevant type of chat or the forum chat is used instead of disable_pinned_message_notifications.
         */
        protected bool $useDefaultDisablePinnedMessageNotifications,
        /**
         * If true, the value for the relevant type of chat or the forum chat is used instead of mute_for.
         */
        protected bool $useDefaultMuteFor,
        /**
         * If true, the value for the relevant type of chat is used instead of mute_stories.
         */
        protected bool $useDefaultMuteStories,
        /**
         * If true, the value for the relevant type of chat or the forum chat is used instead of show_preview.
         */
        protected bool $useDefaultShowPreview,
        /**
         * If true, the value for the relevant type of chat is used instead of show_story_poster.
         */
        protected bool $useDefaultShowStoryPoster,
        /**
         * If true, the value for the relevant type of chat or the forum chat is used instead of sound_id.
         */
        protected bool $useDefaultSound,
        /**
         * If true, the value for the relevant type of chat is used instead of story_sound_id.
         */
        protected bool $useDefaultStorySound,
    ) {}

    public static function fromArray(array $array): ChatNotificationSettings
    {
        return new static(
            disableMentionNotifications                : $array['disable_mention_notifications'],
            disablePinnedMessageNotifications          : $array['disable_pinned_message_notifications'],
            muteFor                                    : $array['mute_for'],
            muteStories                                : $array['mute_stories'],
            showPreview                                : $array['show_preview'],
            showStoryPoster                            : $array['show_story_poster'],
            soundId                                    : $array['sound_id'],
            storySoundId                               : $array['story_sound_id'],
            useDefaultDisableMentionNotifications      : $array['use_default_disable_mention_notifications'],
            useDefaultDisablePinnedMessageNotifications: $array['use_default_disable_pinned_message_notifications'],
            useDefaultMuteFor                          : $array['use_default_mute_for'],
            useDefaultMuteStories                      : $array['use_default_mute_stories'],
            useDefaultShowPreview                      : $array['use_default_show_preview'],
            useDefaultShowStoryPoster                  : $array['use_default_show_story_poster'],
            useDefaultSound                            : $array['use_default_sound'],
            useDefaultStorySound                       : $array['use_default_story_sound'],
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

    public function getUseDefaultDisableMentionNotifications(): bool
    {
        return $this->useDefaultDisableMentionNotifications;
    }

    public function getUseDefaultDisablePinnedMessageNotifications(): bool
    {
        return $this->useDefaultDisablePinnedMessageNotifications;
    }

    public function getUseDefaultMuteFor(): bool
    {
        return $this->useDefaultMuteFor;
    }

    public function getUseDefaultMuteStories(): bool
    {
        return $this->useDefaultMuteStories;
    }

    public function getUseDefaultShowPreview(): bool
    {
        return $this->useDefaultShowPreview;
    }

    public function getUseDefaultShowStoryPoster(): bool
    {
        return $this->useDefaultShowStoryPoster;
    }

    public function getUseDefaultSound(): bool
    {
        return $this->useDefaultSound;
    }

    public function getUseDefaultStorySound(): bool
    {
        return $this->useDefaultStorySound;
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

    public function setUseDefaultDisableMentionNotifications(bool $value): static
    {
        $this->useDefaultDisableMentionNotifications = $value;

        return $this;
    }

    public function setUseDefaultDisablePinnedMessageNotifications(bool $value): static
    {
        $this->useDefaultDisablePinnedMessageNotifications = $value;

        return $this;
    }

    public function setUseDefaultMuteFor(bool $value): static
    {
        $this->useDefaultMuteFor = $value;

        return $this;
    }

    public function setUseDefaultMuteStories(bool $value): static
    {
        $this->useDefaultMuteStories = $value;

        return $this;
    }

    public function setUseDefaultShowPreview(bool $value): static
    {
        $this->useDefaultShowPreview = $value;

        return $this;
    }

    public function setUseDefaultShowStoryPoster(bool $value): static
    {
        $this->useDefaultShowStoryPoster = $value;

        return $this;
    }

    public function setUseDefaultSound(bool $value): static
    {
        $this->useDefaultSound = $value;

        return $this;
    }

    public function setUseDefaultStorySound(bool $value): static
    {
        $this->useDefaultStorySound = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                                            => static::TYPE_NAME,
            'disable_mention_notifications'                    => $this->disableMentionNotifications,
            'disable_pinned_message_notifications'             => $this->disablePinnedMessageNotifications,
            'mute_for'                                         => $this->muteFor,
            'mute_stories'                                     => $this->muteStories,
            'show_preview'                                     => $this->showPreview,
            'show_story_poster'                                => $this->showStoryPoster,
            'sound_id'                                         => $this->soundId,
            'story_sound_id'                                   => $this->storySoundId,
            'use_default_disable_mention_notifications'        => $this->useDefaultDisableMentionNotifications,
            'use_default_disable_pinned_message_notifications' => $this->useDefaultDisablePinnedMessageNotifications,
            'use_default_mute_for'                             => $this->useDefaultMuteFor,
            'use_default_mute_stories'                         => $this->useDefaultMuteStories,
            'use_default_show_preview'                         => $this->useDefaultShowPreview,
            'use_default_show_story_poster'                    => $this->useDefaultShowStoryPoster,
            'use_default_sound'                                => $this->useDefaultSound,
            'use_default_story_sound'                          => $this->useDefaultStorySound,
        ];
    }
}
