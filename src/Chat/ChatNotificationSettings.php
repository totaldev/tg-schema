<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about notification settings for a chat or a forum topic
 */
class ChatNotificationSettings extends TdObject
{
    public const TYPE_NAME = 'chatNotificationSettings';

    /**
     * If true, mute_for is ignored and the value for the relevant type of chat or the forum chat is used instead
     *
     * @var bool
     */
    protected bool $useDefaultMuteFor;

    /**
     * Time left before notifications will be unmuted, in seconds
     *
     * @var int
     */
    protected int $muteFor;

    /**
     * If true, the value for the relevant type of chat or the forum chat is used instead of sound_id
     *
     * @var bool
     */
    protected bool $useDefaultSound;

    /**
     * Identifier of the notification sound to be played for messages; 0 if sound is disabled
     *
     * @var int
     */
    protected int $soundId;

    /**
     * If true, show_preview is ignored and the value for the relevant type of chat or the forum chat is used instead
     *
     * @var bool
     */
    protected bool $useDefaultShowPreview;

    /**
     * True, if message content must be displayed in notifications
     *
     * @var bool
     */
    protected bool $showPreview;

    /**
     * If true, mute_stories is ignored and the value for the relevant type of chat is used instead
     *
     * @var bool
     */
    protected bool $useDefaultMuteStories;

    /**
     * True, if story notifications are disabled for the chat
     *
     * @var bool
     */
    protected bool $muteStories;

    /**
     * If true, the value for the relevant type of chat is used instead of story_sound_id
     *
     * @var bool
     */
    protected bool $useDefaultStorySound;

    /**
     * Identifier of the notification sound to be played for stories; 0 if sound is disabled
     *
     * @var int
     */
    protected int $storySoundId;

    /**
     * If true, show_story_sender is ignored and the value for the relevant type of chat is used instead
     *
     * @var bool
     */
    protected bool $useDefaultShowStorySender;

    /**
     * True, if the sender of stories must be displayed in notifications
     *
     * @var bool
     */
    protected bool $showStorySender;

    /**
     * If true, disable_pinned_message_notifications is ignored and the value for the relevant type of chat or the forum chat is used instead
     *
     * @var bool
     */
    protected bool $useDefaultDisablePinnedMessageNotifications;

    /**
     * If true, notifications for incoming pinned messages will be created as for an ordinary unread message
     *
     * @var bool
     */
    protected bool $disablePinnedMessageNotifications;

    /**
     * If true, disable_mention_notifications is ignored and the value for the relevant type of chat or the forum chat is used instead
     *
     * @var bool
     */
    protected bool $useDefaultDisableMentionNotifications;

    /**
     * If true, notifications for messages with mentions will be created as for an ordinary unread message
     *
     * @var bool
     */
    protected bool $disableMentionNotifications;

    public function __construct(
        bool $useDefaultMuteFor,
        int $muteFor,
        bool $useDefaultSound,
        int $soundId,
        bool $useDefaultShowPreview,
        bool $showPreview,
        bool $useDefaultMuteStories,
        bool $muteStories,
        bool $useDefaultStorySound,
        int $storySoundId,
        bool $useDefaultShowStorySender,
        bool $showStorySender,
        bool $useDefaultDisablePinnedMessageNotifications,
        bool $disablePinnedMessageNotifications,
        bool $useDefaultDisableMentionNotifications,
        bool $disableMentionNotifications,
    ) {
        $this->useDefaultMuteFor = $useDefaultMuteFor;
        $this->muteFor = $muteFor;
        $this->useDefaultSound = $useDefaultSound;
        $this->soundId = $soundId;
        $this->useDefaultShowPreview = $useDefaultShowPreview;
        $this->showPreview = $showPreview;
        $this->useDefaultMuteStories = $useDefaultMuteStories;
        $this->muteStories = $muteStories;
        $this->useDefaultStorySound = $useDefaultStorySound;
        $this->storySoundId = $storySoundId;
        $this->useDefaultShowStorySender = $useDefaultShowStorySender;
        $this->showStorySender = $showStorySender;
        $this->useDefaultDisablePinnedMessageNotifications = $useDefaultDisablePinnedMessageNotifications;
        $this->disablePinnedMessageNotifications = $disablePinnedMessageNotifications;
        $this->useDefaultDisableMentionNotifications = $useDefaultDisableMentionNotifications;
        $this->disableMentionNotifications = $disableMentionNotifications;
    }

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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'use_default_mute_for' => $this->useDefaultMuteFor,
            'mute_for' => $this->muteFor,
            'use_default_sound' => $this->useDefaultSound,
            'sound_id' => $this->soundId,
            'use_default_show_preview' => $this->useDefaultShowPreview,
            'show_preview' => $this->showPreview,
            'use_default_mute_stories' => $this->useDefaultMuteStories,
            'mute_stories' => $this->muteStories,
            'use_default_story_sound' => $this->useDefaultStorySound,
            'story_sound_id' => $this->storySoundId,
            'use_default_show_story_sender' => $this->useDefaultShowStorySender,
            'show_story_sender' => $this->showStorySender,
            'use_default_disable_pinned_message_notifications' => $this->useDefaultDisablePinnedMessageNotifications,
            'disable_pinned_message_notifications' => $this->disablePinnedMessageNotifications,
            'use_default_disable_mention_notifications' => $this->useDefaultDisableMentionNotifications,
            'disable_mention_notifications' => $this->disableMentionNotifications,
        ];
    }

    public function getUseDefaultMuteFor(): bool
    {
        return $this->useDefaultMuteFor;
    }

    public function getMuteFor(): int
    {
        return $this->muteFor;
    }

    public function getUseDefaultSound(): bool
    {
        return $this->useDefaultSound;
    }

    public function getSoundId(): int
    {
        return $this->soundId;
    }

    public function getUseDefaultShowPreview(): bool
    {
        return $this->useDefaultShowPreview;
    }

    public function getShowPreview(): bool
    {
        return $this->showPreview;
    }

    public function getUseDefaultMuteStories(): bool
    {
        return $this->useDefaultMuteStories;
    }

    public function getMuteStories(): bool
    {
        return $this->muteStories;
    }

    public function getUseDefaultStorySound(): bool
    {
        return $this->useDefaultStorySound;
    }

    public function getStorySoundId(): int
    {
        return $this->storySoundId;
    }

    public function getUseDefaultShowStorySender(): bool
    {
        return $this->useDefaultShowStorySender;
    }

    public function getShowStorySender(): bool
    {
        return $this->showStorySender;
    }

    public function getUseDefaultDisablePinnedMessageNotifications(): bool
    {
        return $this->useDefaultDisablePinnedMessageNotifications;
    }

    public function getDisablePinnedMessageNotifications(): bool
    {
        return $this->disablePinnedMessageNotifications;
    }

    public function getUseDefaultDisableMentionNotifications(): bool
    {
        return $this->useDefaultDisableMentionNotifications;
    }

    public function getDisableMentionNotifications(): bool
    {
        return $this->disableMentionNotifications;
    }
}
