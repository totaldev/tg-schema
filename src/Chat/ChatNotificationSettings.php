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
    public const TYPE_NAME = 'chatNotificationSettings';

    public function __construct(
        /**
         * If true, the value for the relevant type of chat or the forum chat is used instead of mute_for.
         */
        protected bool $useDefaultMuteFor,
        /**
         * Time left before notifications will be unmuted, in seconds.
         */
        protected int  $muteFor,
        /**
         * If true, the value for the relevant type of chat or the forum chat is used instead of sound_id.
         */
        protected bool $useDefaultSound,
        /**
         * Identifier of the notification sound to be played for messages; 0 if sound is disabled.
         */
        protected int  $soundId,
        /**
         * If true, the value for the relevant type of chat or the forum chat is used instead of show_preview.
         */
        protected bool $useDefaultShowPreview,
        /**
         * True, if message content must be displayed in notifications.
         */
        protected bool $showPreview,
        /**
         * If true, the value for the relevant type of chat is used instead of mute_stories.
         */
        protected bool $useDefaultMuteStories,
        /**
         * True, if story notifications are disabled for the chat.
         */
        protected bool $muteStories,
        /**
         * If true, the value for the relevant type of chat is used instead of story_sound_id.
         */
        protected bool $useDefaultStorySound,
        /**
         * Identifier of the notification sound to be played for stories; 0 if sound is disabled.
         */
        protected int  $storySoundId,
        /**
         * If true, the value for the relevant type of chat is used instead of show_story_sender.
         */
        protected bool $useDefaultShowStorySender,
        /**
         * True, if the sender of stories must be displayed in notifications.
         */
        protected bool $showStorySender,
        /**
         * If true, the value for the relevant type of chat or the forum chat is used instead of disable_pinned_message_notifications.
         */
        protected bool $useDefaultDisablePinnedMessageNotifications,
        /**
         * If true, notifications for incoming pinned messages will be created as for an ordinary unread message.
         */
        protected bool $disablePinnedMessageNotifications,
        /**
         * If true, the value for the relevant type of chat or the forum chat is used instead of disable_mention_notifications.
         */
        protected bool $useDefaultDisableMentionNotifications,
        /**
         * If true, notifications for messages with mentions will be created as for an ordinary unread message.
         */
        protected bool $disableMentionNotifications,
    ) {}

    public static function fromArray(array $array): ChatNotificationSettings
    {
        return new static(
            $array['use_default_mute_for'],
            $array['mute_for'],
            $array['use_default_sound'],
            $array['sound_id'],
            $array['use_default_show_preview'],
            $array['show_preview'],
            $array['use_default_mute_stories'],
            $array['mute_stories'],
            $array['use_default_story_sound'],
            $array['story_sound_id'],
            $array['use_default_show_story_sender'],
            $array['show_story_sender'],
            $array['use_default_disable_pinned_message_notifications'],
            $array['disable_pinned_message_notifications'],
            $array['use_default_disable_mention_notifications'],
            $array['disable_mention_notifications'],
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

    public function getShowStorySender(): bool
    {
        return $this->showStorySender;
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

    public function getUseDefaultShowStorySender(): bool
    {
        return $this->useDefaultShowStorySender;
    }

    public function getUseDefaultSound(): bool
    {
        return $this->useDefaultSound;
    }

    public function getUseDefaultStorySound(): bool
    {
        return $this->useDefaultStorySound;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                                            => static::TYPE_NAME,
            'use_default_mute_for'                             => $this->useDefaultMuteFor,
            'mute_for'                                         => $this->muteFor,
            'use_default_sound'                                => $this->useDefaultSound,
            'sound_id'                                         => $this->soundId,
            'use_default_show_preview'                         => $this->useDefaultShowPreview,
            'show_preview'                                     => $this->showPreview,
            'use_default_mute_stories'                         => $this->useDefaultMuteStories,
            'mute_stories'                                     => $this->muteStories,
            'use_default_story_sound'                          => $this->useDefaultStorySound,
            'story_sound_id'                                   => $this->storySoundId,
            'use_default_show_story_sender'                    => $this->useDefaultShowStorySender,
            'show_story_sender'                                => $this->showStorySender,
            'use_default_disable_pinned_message_notifications' => $this->useDefaultDisablePinnedMessageNotifications,
            'disable_pinned_message_notifications'             => $this->disablePinnedMessageNotifications,
            'use_default_disable_mention_notifications'        => $this->useDefaultDisableMentionNotifications,
            'disable_mention_notifications'                    => $this->disableMentionNotifications,
        ];
    }
}
