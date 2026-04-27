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
         * Identifiers of story albums to which the story is added; only for manageable stories.
         *
         * @var int[]
         */
        protected array                 $albumIds,
        /**
         * Clickable areas to be shown on the story content.
         *
         * @var StoryArea[]
         */
        protected array                 $areas,
        /**
         * True, if the story can be added to an album using createStoryAlbum and addStoryAlbumStories.
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
         * True, if the story can be replied in the chat with the user who posted the story.
         */
        protected bool                  $canBeReplied,
        /**
         * True, if interactions with the story can be received through getStoryInteractions.
         */
        protected bool                  $canGetInteractions,
        /**
         * True, if the story statistics are available through getStoryStatistics.
         */
        protected bool                  $canGetStatistics,
        /**
         * True, if the story privacy settings can be changed.
         */
        protected bool                  $canSetPrivacySettings,
        /**
         * True, if the story's is_posted_to_chat_page value can be changed.
         */
        protected bool                  $canToggleIsPostedToChatPage,
        /**
         * Caption of the story.
         */
        protected FormattedText         $caption,
        /**
         * Type of the chosen reaction; may be null if none.
         */
        protected ?ReactionType         $chosenReactionType,
        /**
         * Content of the story.
         */
        protected StoryContent          $content,
        /**
         * Point in time (Unix timestamp) when the story was published.
         */
        protected int                   $date,
        /**
         * True, if users viewed the story can't be received, because the story has expired more than getOption("story_viewers_expiration_delay") seconds ago.
         */
        protected bool                  $hasExpiredViewers,
        /**
         * Unique story identifier among stories posted by the given chat.
         */
        protected int                   $id,
        /**
         * Information about interactions with the story; may be null if the story isn't owned or there were no interactions.
         */
        protected ?StoryInteractionInfo $interactionInfo,
        /**
         * True, if the story is being edited by the current user.
         */
        protected bool                  $isBeingEdited,
        /**
         * True, if the story is being posted by the current user.
         */
        protected bool                  $isBeingPosted,
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
         * Identifier of the chat that posted the story.
         */
        protected int                   $posterChatId,
        /**
         * Identifier of the user or chat that posted the story; may be null if the story is posted on behalf of the poster_chat_id.
         */
        protected ?MessageSender        $posterId,
        /**
         * Privacy rules affecting story visibility; may be approximate for non-owned stories.
         */
        protected StoryPrivacySettings  $privacySettings,
        /**
         * Information about the original story; may be null if the story wasn't reposted.
         */
        protected ?StoryRepostInfo      $repostInfo,
    ) {}

    public static function fromArray(array $array): Story
    {
        return new static(
            albumIds                   : $array['album_ids'],
            areas                      : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['areas']),
            canBeAddedToAlbum          : $array['can_be_added_to_album'],
            canBeDeleted               : $array['can_be_deleted'],
            canBeEdited                : $array['can_be_edited'],
            canBeForwarded             : $array['can_be_forwarded'],
            canBeReplied               : $array['can_be_replied'],
            canGetInteractions         : $array['can_get_interactions'],
            canGetStatistics           : $array['can_get_statistics'],
            canSetPrivacySettings      : $array['can_set_privacy_settings'],
            canToggleIsPostedToChatPage: $array['can_toggle_is_posted_to_chat_page'],
            caption                    : TdSchemaRegistry::fromArray($array['caption']),
            chosenReactionType         : (isset($array['chosen_reaction_type']) ? TdSchemaRegistry::fromArray($array['chosen_reaction_type']) : null),
            content                    : TdSchemaRegistry::fromArray($array['content']),
            date                       : $array['date'],
            hasExpiredViewers          : $array['has_expired_viewers'],
            id                         : $array['id'],
            interactionInfo            : (isset($array['interaction_info']) ? TdSchemaRegistry::fromArray($array['interaction_info']) : null),
            isBeingEdited              : $array['is_being_edited'],
            isBeingPosted              : $array['is_being_posted'],
            isEdited                   : $array['is_edited'],
            isPostedToChatPage         : $array['is_posted_to_chat_page'],
            isVisibleOnlyForSelf       : $array['is_visible_only_for_self'],
            posterChatId               : $array['poster_chat_id'],
            posterId                   : (isset($array['poster_id']) ? TdSchemaRegistry::fromArray($array['poster_id']) : null),
            privacySettings            : TdSchemaRegistry::fromArray($array['privacy_settings']),
            repostInfo                 : (isset($array['repost_info']) ? TdSchemaRegistry::fromArray($array['repost_info']) : null),
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

    public function getCanSetPrivacySettings(): bool
    {
        return $this->canSetPrivacySettings;
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

    public function setCanSetPrivacySettings(bool $value): static
    {
        $this->canSetPrivacySettings = $value;

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
            'album_ids'                         => $this->albumIds,
            'areas'                             => array_map(static fn($x) => $x->jsonSerialize(), $this->areas),
            'can_be_added_to_album'             => $this->canBeAddedToAlbum,
            'can_be_deleted'                    => $this->canBeDeleted,
            'can_be_edited'                     => $this->canBeEdited,
            'can_be_forwarded'                  => $this->canBeForwarded,
            'can_be_replied'                    => $this->canBeReplied,
            'can_get_interactions'              => $this->canGetInteractions,
            'can_get_statistics'                => $this->canGetStatistics,
            'can_set_privacy_settings'          => $this->canSetPrivacySettings,
            'can_toggle_is_posted_to_chat_page' => $this->canToggleIsPostedToChatPage,
            'caption'                           => $this->caption->jsonSerialize(),
            'chosen_reaction_type'              => (null !== $this->chosenReactionType ? $this->chosenReactionType->jsonSerialize() : null),
            'content'                           => $this->content->jsonSerialize(),
            'date'                              => $this->date,
            'has_expired_viewers'               => $this->hasExpiredViewers,
            'id'                                => $this->id,
            'interaction_info'                  => (null !== $this->interactionInfo ? $this->interactionInfo->jsonSerialize() : null),
            'is_being_edited'                   => $this->isBeingEdited,
            'is_being_posted'                   => $this->isBeingPosted,
            'is_edited'                         => $this->isEdited,
            'is_posted_to_chat_page'            => $this->isPostedToChatPage,
            'is_visible_only_for_self'          => $this->isVisibleOnlyForSelf,
            'poster_chat_id'                    => $this->posterChatId,
            'poster_id'                         => (null !== $this->posterId ? $this->posterId->jsonSerialize() : null),
            'privacy_settings'                  => $this->privacySettings->jsonSerialize(),
            'repost_info'                       => (null !== $this->repostInfo ? $this->repostInfo->jsonSerialize() : null),
        ];
    }
}
