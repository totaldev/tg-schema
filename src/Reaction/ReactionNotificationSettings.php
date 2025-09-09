<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Reaction;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about notification settings for reactions.
 */
class ReactionNotificationSettings extends TdObject
{
    public const TYPE_NAME = 'reactionNotificationSettings';

    public function __construct(
        /**
         * Source of message reactions for which notifications are shown.
         */
        protected ReactionNotificationSource $messageReactionSource,
        /**
         * Source of story reactions for which notifications are shown.
         */
        protected ReactionNotificationSource $storyReactionSource,
        /**
         * Identifier of the notification sound to be played; 0 if sound is disabled.
         */
        protected int                        $soundId,
        /**
         * True, if reaction sender and emoji must be displayed in notifications.
         */
        protected bool                       $showPreview,
    ) {}

    public static function fromArray(array $array): ReactionNotificationSettings
    {
        return new static(
            TdSchemaRegistry::fromArray($array['message_reaction_source']),
            TdSchemaRegistry::fromArray($array['story_reaction_source']),
            $array['sound_id'],
            $array['show_preview'],
        );
    }

    public function getMessageReactionSource(): ReactionNotificationSource
    {
        return $this->messageReactionSource;
    }

    public function getShowPreview(): bool
    {
        return $this->showPreview;
    }

    public function getSoundId(): int
    {
        return $this->soundId;
    }

    public function getStoryReactionSource(): ReactionNotificationSource
    {
        return $this->storyReactionSource;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'message_reaction_source' => $this->messageReactionSource->typeSerialize(),
            'story_reaction_source'   => $this->storyReactionSource->typeSerialize(),
            'sound_id'                => $this->soundId,
            'show_preview'            => $this->showPreview,
        ];
    }
}
