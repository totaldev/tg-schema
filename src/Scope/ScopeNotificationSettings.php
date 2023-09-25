<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Scope;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about notification settings for several chats
 */
class ScopeNotificationSettings extends TdObject
{
    public const TYPE_NAME = 'scopeNotificationSettings';

    /**
     * Time left before notifications will be unmuted, in seconds
     *
     * @var int
     */
    protected int $muteFor;

    /**
     * Identifier of the notification sound to be played; 0 if sound is disabled
     *
     * @var int
     */
    protected int $soundId;

    /**
     * True, if message content must be displayed in notifications
     *
     * @var bool
     */
    protected bool $showPreview;

    /**
     * If true, mute_stories is ignored and story notifications are received only for the first 5 chats from topChatCategoryUsers
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
     * Identifier of the notification sound to be played for stories; 0 if sound is disabled
     *
     * @var int
     */
    protected int $storySoundId;

    /**
     * True, if the sender of stories must be displayed in notifications
     *
     * @var bool
     */
    protected bool $showStorySender;

    /**
     * True, if notifications for incoming pinned messages will be created as for an ordinary unread message
     *
     * @var bool
     */
    protected bool $disablePinnedMessageNotifications;

    /**
     * True, if notifications for messages with mentions will be created as for an ordinary unread message
     *
     * @var bool
     */
    protected bool $disableMentionNotifications;

    public function __construct(
        int $muteFor,
        int $soundId,
        bool $showPreview,
        bool $useDefaultMuteStories,
        bool $muteStories,
        int $storySoundId,
        bool $showStorySender,
        bool $disablePinnedMessageNotifications,
        bool $disableMentionNotifications,
    ) {
        $this->muteFor = $muteFor;
        $this->soundId = $soundId;
        $this->showPreview = $showPreview;
        $this->useDefaultMuteStories = $useDefaultMuteStories;
        $this->muteStories = $muteStories;
        $this->storySoundId = $storySoundId;
        $this->showStorySender = $showStorySender;
        $this->disablePinnedMessageNotifications = $disablePinnedMessageNotifications;
        $this->disableMentionNotifications = $disableMentionNotifications;
    }

    public static function fromArray(array $array): ScopeNotificationSettings
    {
        return new static(
            $array['mute_for'],
            $array['sound_id'],
            $array['show_preview'],
            $array['use_default_mute_stories'],
            $array['mute_stories'],
            $array['story_sound_id'],
            $array['show_story_sender'],
            $array['disable_pinned_message_notifications'],
            $array['disable_mention_notifications'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'mute_for' => $this->muteFor,
            'sound_id' => $this->soundId,
            'show_preview' => $this->showPreview,
            'use_default_mute_stories' => $this->useDefaultMuteStories,
            'mute_stories' => $this->muteStories,
            'story_sound_id' => $this->storySoundId,
            'show_story_sender' => $this->showStorySender,
            'disable_pinned_message_notifications' => $this->disablePinnedMessageNotifications,
            'disable_mention_notifications' => $this->disableMentionNotifications,
        ];
    }

    public function getMuteFor(): int
    {
        return $this->muteFor;
    }

    public function getSoundId(): int
    {
        return $this->soundId;
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

    public function getStorySoundId(): int
    {
        return $this->storySoundId;
    }

    public function getShowStorySender(): bool
    {
        return $this->showStorySender;
    }

    public function getDisablePinnedMessageNotifications(): bool
    {
        return $this->disablePinnedMessageNotifications;
    }

    public function getDisableMentionNotifications(): bool
    {
        return $this->disableMentionNotifications;
    }
}
