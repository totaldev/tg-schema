<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Reaction;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about notification settings for reactions and poll votes.
 */
class ReactionNotificationSettings extends TdObject
{
    public const string TYPE_NAME = 'reactionNotificationSettings';

    public function __construct(
        /**
         * Source of message reactions for which notifications are shown.
         */
        protected ReactionNotificationSource $messageReactionSource,
        /**
         * Source of poll votes for which notifications are shown.
         */
        protected ReactionNotificationSource $pollVoteSource,
        /**
         * True, if reaction sender and emoji must be displayed in notifications.
         */
        protected bool                       $showPreview,
        /**
         * Identifier of the notification sound to be played; 0 if sound is disabled.
         */
        protected int                        $soundId,
        /**
         * Source of story reactions for which notifications are shown.
         */
        protected ReactionNotificationSource $storyReactionSource,
    ) {}

    public static function fromArray(array $array): ReactionNotificationSettings
    {
        return new static(
            messageReactionSource: TdSchemaRegistry::fromArray($array['message_reaction_source']),
            pollVoteSource       : TdSchemaRegistry::fromArray($array['poll_vote_source']),
            showPreview          : $array['show_preview'],
            soundId              : $array['sound_id'],
            storyReactionSource  : TdSchemaRegistry::fromArray($array['story_reaction_source']),
        );
    }

    public function getMessageReactionSource(): ReactionNotificationSource
    {
        return $this->messageReactionSource;
    }

    public function getPollVoteSource(): ReactionNotificationSource
    {
        return $this->pollVoteSource;
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

    public function setMessageReactionSource(ReactionNotificationSource $value): static
    {
        $this->messageReactionSource = $value;

        return $this;
    }

    public function setPollVoteSource(ReactionNotificationSource $value): static
    {
        $this->pollVoteSource = $value;

        return $this;
    }

    public function setShowPreview(bool $value): static
    {
        $this->showPreview = $value;

        return $this;
    }

    public function setSoundId(int $value): static
    {
        $this->soundId = $value;

        return $this;
    }

    public function setStoryReactionSource(ReactionNotificationSource $value): static
    {
        $this->storyReactionSource = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'message_reaction_source' => $this->messageReactionSource->jsonSerialize(),
            'poll_vote_source'        => $this->pollVoteSource->jsonSerialize(),
            'show_preview'            => $this->showPreview,
            'sound_id'                => $this->soundId,
            'story_reaction_source'   => $this->storyReactionSource->jsonSerialize(),
        ];
    }
}
