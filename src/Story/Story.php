<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\Reaction\ReactionType;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a story.
 */
class Story extends TdObject
{
    public const string TYPE_NAME = 'story';

    public function __construct(
        /**
         * Unique story identifier among stories posted by the given chat.
         */
        protected int                   $id,
        /**
         * Identifier of the chat that posted the story.
         */
        protected int                   $posterChatId,
        /**
         * Identifier of the user or chat that posted the story; may be null if the story is posted on behalf of the poster_chat_id.
         */
        protected ?MessageSender        $posterId,
        /**
         * Point in time (Unix timestamp) when the story was published.
         */
        protected int                   $date,
        /**
         * True, if the story is being posted by the current user.
         */
        protected bool                  $isBeingPosted,
        /**
         * True, if the story is being edited by the current user.
         */
        protected bool                  $isBeingEdited,
        /**
         * True, if the story was edited.
         */
        protected bool                  $isEdited,
        /**
         * True, if the story is saved in the profile of the chat that posted it and will be available there after expiration.
         */
        protected bool                  $isPostedToChatPage,
        /**
         * True, if the story is visible only for the current user.
         */
        protected bool                  $isVisibleOnlyForSelf,
        /**
         * True, if the story can be added to an album.
         */
        protected bool                  $canBeAddedToAlbum,
        /**
         * True, if the story can be deleted.
         */
        protected bool                  $canBeDeleted,
        /**
         * True, if the story can be edited.
         */
        protected bool                  $canBeEdited,
        /**
         * True, if the story can be forwarded as a message or reposted as a story. Otherwise, screenshotting and saving of the story content must be also forbidden.
         */
        protected bool                  $canBeForwarded,
        /**
         * True, if the story can be replied in the chat with the user that posted the story.
         */
        protected bool                  $canBeReplied,
        /**
         * True, if the story's is_posted_to_chat_page value can be changed.
         */
        protected bool                  $canToggleIsPostedToChatPage,
        /**
         * True, if the story statistics are available through getStoryStatistics.
         */
        protected bool                  $canGetStatistics,
        /**
         * True, if interactions with the story can be received through getStoryInteractions.
         */
        protected bool                  $canGetInteractions,
        /**
         * True, if users viewed the story can't be received, because the story has expired more than getOption("story_viewers_expiration_delay") seconds ago.
         */
        protected bool                  $hasExpiredViewers,
        /**
         * Information about the original story; may be null if the story wasn't reposted.
         */
        protected ?StoryRepostInfo      $repostInfo,
        /**
         * Information about interactions with the story; may be null if the story isn't owned or there were no interactions.
         */
        protected ?StoryInteractionInfo $interactionInfo,
        /**
         * Type of the chosen reaction; may be null if none.
         */
        protected ?ReactionType         $chosenReactionType,
        /**
         * Privacy rules affecting story visibility; may be approximate for non-owned stories.
         */
        protected StoryPrivacySettings  $privacySettings,
        /**
         * Content of the story.
         */
        protected StoryContent          $content,
        /**
         * Clickable areas to be shown on the story content.
         *
         * @var StoryArea[]
         */
        protected array                 $areas,
        /**
         * Caption of the story.
         */
        protected FormattedText         $caption,
        /**
         * Identifiers of story albums to which the story is added; only for manageable stories.
         *
         * @var int[]
         */
        protected array                 $albumIds,
    ) {}

    public static function fromArray(array $array): Story
    {
        return new static(
            $array['id'],
            $array['poster_chat_id'],
            isset($array['poster_id']) ? TdSchemaRegistry::fromArray($array['poster_id']) : null,
            $array['date'],
            $array['is_being_posted'],
            $array['is_being_edited'],
            $array['is_edited'],
            $array['is_posted_to_chat_page'],
            $array['is_visible_only_for_self'],
            $array['can_be_added_to_album'],
            $array['can_be_deleted'],
            $array['can_be_edited'],
            $array['can_be_forwarded'],
            $array['can_be_replied'],
            $array['can_toggle_is_posted_to_chat_page'],
            $array['can_get_statistics'],
            $array['can_get_interactions'],
            $array['has_expired_viewers'],
            isset($array['repost_info']) ? TdSchemaRegistry::fromArray($array['repost_info']) : null,
            isset($array['interaction_info']) ? TdSchemaRegistry::fromArray($array['interaction_info']) : null,
            isset($array['chosen_reaction_type']) ? TdSchemaRegistry::fromArray($array['chosen_reaction_type']) : null,
            TdSchemaRegistry::fromArray($array['privacy_settings']),
            TdSchemaRegistry::fromArray($array['content']),
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['areas']),
            TdSchemaRegistry::fromArray($array['caption']),
            $array['album_ids'],
        );
    }

    public function getAlbumIds(): array
    {
        return $this->albumIds;
    }

    public function getAreas(): array
    {
        return $this->areas;
    }

    public function getCanBeAddedToAlbum(): bool
    {
        return $this->canBeAddedToAlbum;
    }

    public function getCanBeDeleted(): bool
    {
        return $this->canBeDeleted;
    }

    public function getCanBeEdited(): bool
    {
        return $this->canBeEdited;
    }

    public function getCanBeForwarded(): bool
    {
        return $this->canBeForwarded;
    }

    public function getCanBeReplied(): bool
    {
        return $this->canBeReplied;
    }

    public function getCanGetInteractions(): bool
    {
        return $this->canGetInteractions;
    }

    public function getCanGetStatistics(): bool
    {
        return $this->canGetStatistics;
    }

    public function getCanToggleIsPostedToChatPage(): bool
    {
        return $this->canToggleIsPostedToChatPage;
    }

    public function getCaption(): FormattedText
    {
        return $this->caption;
    }

    public function getChosenReactionType(): ?ReactionType
    {
        return $this->chosenReactionType;
    }

    public function getContent(): StoryContent
    {
        return $this->content;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getHasExpiredViewers(): bool
    {
        return $this->hasExpiredViewers;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getInteractionInfo(): ?StoryInteractionInfo
    {
        return $this->interactionInfo;
    }

    public function getIsBeingEdited(): bool
    {
        return $this->isBeingEdited;
    }

    public function getIsBeingPosted(): bool
    {
        return $this->isBeingPosted;
    }

    public function getIsEdited(): bool
    {
        return $this->isEdited;
    }

    public function getIsPostedToChatPage(): bool
    {
        return $this->isPostedToChatPage;
    }

    public function getIsVisibleOnlyForSelf(): bool
    {
        return $this->isVisibleOnlyForSelf;
    }

    public function getPosterChatId(): int
    {
        return $this->posterChatId;
    }

    public function getPosterId(): ?MessageSender
    {
        return $this->posterId;
    }

    public function getPrivacySettings(): StoryPrivacySettings
    {
        return $this->privacySettings;
    }

    public function getRepostInfo(): ?StoryRepostInfo
    {
        return $this->repostInfo;
    }

    public function setAlbumIds(array $value): static
    {
        $this->albumIds = $value;

        return $this;
    }

    public function setAreas(array $value): static
    {
        $this->areas = $value;

        return $this;
    }

    public function setCanBeAddedToAlbum(bool $value): static
    {
        $this->canBeAddedToAlbum = $value;

        return $this;
    }

    public function setCanBeDeleted(bool $value): static
    {
        $this->canBeDeleted = $value;

        return $this;
    }

    public function setCanBeEdited(bool $value): static
    {
        $this->canBeEdited = $value;

        return $this;
    }

    public function setCanBeForwarded(bool $value): static
    {
        $this->canBeForwarded = $value;

        return $this;
    }

    public function setCanBeReplied(bool $value): static
    {
        $this->canBeReplied = $value;

        return $this;
    }

    public function setCanGetInteractions(bool $value): static
    {
        $this->canGetInteractions = $value;

        return $this;
    }

    public function setCanGetStatistics(bool $value): static
    {
        $this->canGetStatistics = $value;

        return $this;
    }

    public function setCanToggleIsPostedToChatPage(bool $value): static
    {
        $this->canToggleIsPostedToChatPage = $value;

        return $this;
    }

    public function setCaption(FormattedText $value): static
    {
        $this->caption = $value;

        return $this;
    }

    public function setChosenReactionType(?ReactionType $value): static
    {
        $this->chosenReactionType = $value;

        return $this;
    }

    public function setContent(StoryContent $value): static
    {
        $this->content = $value;

        return $this;
    }

    public function setDate(int $value): static
    {
        $this->date = $value;

        return $this;
    }

    public function setHasExpiredViewers(bool $value): static
    {
        $this->hasExpiredViewers = $value;

        return $this;
    }

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setInteractionInfo(?StoryInteractionInfo $value): static
    {
        $this->interactionInfo = $value;

        return $this;
    }

    public function setIsBeingEdited(bool $value): static
    {
        $this->isBeingEdited = $value;

        return $this;
    }

    public function setIsBeingPosted(bool $value): static
    {
        $this->isBeingPosted = $value;

        return $this;
    }

    public function setIsEdited(bool $value): static
    {
        $this->isEdited = $value;

        return $this;
    }

    public function setIsPostedToChatPage(bool $value): static
    {
        $this->isPostedToChatPage = $value;

        return $this;
    }

    public function setIsVisibleOnlyForSelf(bool $value): static
    {
        $this->isVisibleOnlyForSelf = $value;

        return $this;
    }

    public function setPosterChatId(int $value): static
    {
        $this->posterChatId = $value;

        return $this;
    }

    public function setPosterId(?MessageSender $value): static
    {
        $this->posterId = $value;

        return $this;
    }

    public function setPrivacySettings(StoryPrivacySettings $value): static
    {
        $this->privacySettings = $value;

        return $this;
    }

    public function setRepostInfo(?StoryRepostInfo $value): static
    {
        $this->repostInfo = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                             => static::TYPE_NAME,
            'id'                                => $this->id,
            'poster_chat_id'                    => $this->posterChatId,
            'poster_id'                         => $this->posterId ?? null,
            'date'                              => $this->date,
            'is_being_posted'                   => $this->isBeingPosted,
            'is_being_edited'                   => $this->isBeingEdited,
            'is_edited'                         => $this->isEdited,
            'is_posted_to_chat_page'            => $this->isPostedToChatPage,
            'is_visible_only_for_self'          => $this->isVisibleOnlyForSelf,
            'can_be_added_to_album'             => $this->canBeAddedToAlbum,
            'can_be_deleted'                    => $this->canBeDeleted,
            'can_be_edited'                     => $this->canBeEdited,
            'can_be_forwarded'                  => $this->canBeForwarded,
            'can_be_replied'                    => $this->canBeReplied,
            'can_toggle_is_posted_to_chat_page' => $this->canToggleIsPostedToChatPage,
            'can_get_statistics'                => $this->canGetStatistics,
            'can_get_interactions'              => $this->canGetInteractions,
            'has_expired_viewers'               => $this->hasExpiredViewers,
            'repost_info'                       => $this->repostInfo ?? null,
            'interaction_info'                  => $this->interactionInfo ?? null,
            'chosen_reaction_type'              => $this->chosenReactionType ?? null,
            'privacy_settings'                  => $this->privacySettings->typeSerialize(),
            'content'                           => $this->content->typeSerialize(),
            'areas'                             => array_map(static fn($x) => $x->typeSerialize(), $this->areas),
            'caption'                           => $this->caption->typeSerialize(),
            'album_ids'                         => $this->albumIds,
        ];
    }
}
