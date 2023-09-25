<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Reaction\ReactionType;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a story
 */
class Story extends TdObject
{
    public const TYPE_NAME = 'story';

    /**
     * Clickable areas to be shown on the story content
     *
     * @var StoryArea[]
     */
    protected array $areas;

    /**
     * True, if the story can be deleted
     *
     * @var bool
     */
    protected bool $canBeDeleted;

    /**
     * True, if the story can be edited
     *
     * @var bool
     */
    protected bool $canBeEdited;

    /**
     * True, if the story can be forwarded as a message. Otherwise, screenshots and saving of the story content must be also forbidden
     *
     * @var bool
     */
    protected bool $canBeForwarded;

    /**
     * True, if the story can be replied in the chat with the story sender
     *
     * @var bool
     */
    protected bool $canBeReplied;

    /**
     * True, if users viewed the story can be received through getStoryViewers
     *
     * @var bool
     */
    protected bool $canGetViewers;

    /**
     * True, if the story's is_pinned value can be changed
     *
     * @var bool
     */
    protected bool $canToggleIsPinned;

    /**
     * Caption of the story
     *
     * @var FormattedText
     */
    protected FormattedText $caption;

    /**
     * Type of the chosen reaction; may be null if none
     *
     * @var ReactionType|null
     */
    protected ?ReactionType $chosenReactionType;

    /**
     * Content of the story
     *
     * @var StoryContent
     */
    protected StoryContent $content;

    /**
     * Point in time (Unix timestamp) when the story was published
     *
     * @var int
     */
    protected int $date;

    /**
     * True, if users viewed the story can't be received, because the story has expired more than getOption("story_viewers_expiration_delay") seconds ago
     *
     * @var bool
     */
    protected bool $hasExpiredViewers;

    /**
     * Unique story identifier among stories of the given sender
     *
     * @var int
     */
    protected int $id;

    /**
     * Information about interactions with the story; may be null if the story isn't owned or there were no interactions
     *
     * @var StoryInteractionInfo|null
     */
    protected ?StoryInteractionInfo $interactionInfo;

    /**
     * True, if the story is being edited by the current user
     *
     * @var bool
     */
    protected bool $isBeingEdited;

    /**
     * True, if the story is being sent by the current user
     *
     * @var bool
     */
    protected bool $isBeingSent;

    /**
     * True, if the story was edited
     *
     * @var bool
     */
    protected bool $isEdited;

    /**
     * True, if the story is saved in the sender's profile and will be available there after expiration
     *
     * @var bool
     */
    protected bool $isPinned;

    /**
     * True, if the story is visible only for the current user
     *
     * @var bool
     */
    protected bool $isVisibleOnlyForSelf;

    /**
     * Privacy rules affecting story visibility; may be approximate for non-owned stories
     *
     * @var StoryPrivacySettings
     */
    protected StoryPrivacySettings $privacySettings;

    /**
     * Identifier of the chat that posted the story
     *
     * @var int
     */
    protected int $senderChatId;

    public function __construct(
        int                   $id,
        int                   $senderChatId,
        int                   $date,
        bool                  $isBeingSent,
        bool                  $isBeingEdited,
        bool                  $isEdited,
        bool                  $isPinned,
        bool                  $isVisibleOnlyForSelf,
        bool                  $canBeDeleted,
        bool                  $canBeEdited,
        bool                  $canBeForwarded,
        bool                  $canBeReplied,
        bool                  $canToggleIsPinned,
        bool                  $canGetViewers,
        bool                  $hasExpiredViewers,
        ?StoryInteractionInfo $interactionInfo,
        ?ReactionType         $chosenReactionType,
        StoryPrivacySettings  $privacySettings,
        StoryContent          $content,
        array                 $areas,
        FormattedText         $caption,
    )
    {
        $this->id = $id;
        $this->senderChatId = $senderChatId;
        $this->date = $date;
        $this->isBeingSent = $isBeingSent;
        $this->isBeingEdited = $isBeingEdited;
        $this->isEdited = $isEdited;
        $this->isPinned = $isPinned;
        $this->isVisibleOnlyForSelf = $isVisibleOnlyForSelf;
        $this->canBeDeleted = $canBeDeleted;
        $this->canBeEdited = $canBeEdited;
        $this->canBeForwarded = $canBeForwarded;
        $this->canBeReplied = $canBeReplied;
        $this->canToggleIsPinned = $canToggleIsPinned;
        $this->canGetViewers = $canGetViewers;
        $this->hasExpiredViewers = $hasExpiredViewers;
        $this->interactionInfo = $interactionInfo;
        $this->chosenReactionType = $chosenReactionType;
        $this->privacySettings = $privacySettings;
        $this->content = $content;
        $this->areas = $areas;
        $this->caption = $caption;
    }

    public static function fromArray(array $array): Story
    {
        return new static(
            $array['id'],
            $array['sender_chat_id'],
            $array['date'],
            $array['is_being_sent'],
            $array['is_being_edited'],
            $array['is_edited'],
            $array['is_pinned'],
            $array['is_visible_only_for_self'],
            $array['can_be_deleted'],
            $array['can_be_edited'],
            $array['can_be_forwarded'],
            $array['can_be_replied'],
            $array['can_toggle_is_pinned'],
            $array['can_get_viewers'],
            $array['has_expired_viewers'],
            (isset($array['interaction_info']) ? TdSchemaRegistry::fromArray($array['interaction_info']) : null),
            (isset($array['chosen_reaction_type']) ? TdSchemaRegistry::fromArray($array['chosen_reaction_type']) : null),
            TdSchemaRegistry::fromArray($array['privacy_settings']),
            TdSchemaRegistry::fromArray($array['content']),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['areas']),
            TdSchemaRegistry::fromArray($array['caption']),
        );
    }

    public function getAreas(): array
    {
        return $this->areas;
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

    public function getCanGetViewers(): bool
    {
        return $this->canGetViewers;
    }

    public function getCanToggleIsPinned(): bool
    {
        return $this->canToggleIsPinned;
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

    public function getIsBeingSent(): bool
    {
        return $this->isBeingSent;
    }

    public function getIsEdited(): bool
    {
        return $this->isEdited;
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    public function getIsVisibleOnlyForSelf(): bool
    {
        return $this->isVisibleOnlyForSelf;
    }

    public function getPrivacySettings(): StoryPrivacySettings
    {
        return $this->privacySettings;
    }

    public function getSenderChatId(): int
    {
        return $this->senderChatId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
            'sender_chat_id' => $this->senderChatId,
            'date' => $this->date,
            'is_being_sent' => $this->isBeingSent,
            'is_being_edited' => $this->isBeingEdited,
            'is_edited' => $this->isEdited,
            'is_pinned' => $this->isPinned,
            'is_visible_only_for_self' => $this->isVisibleOnlyForSelf,
            'can_be_deleted' => $this->canBeDeleted,
            'can_be_edited' => $this->canBeEdited,
            'can_be_forwarded' => $this->canBeForwarded,
            'can_be_replied' => $this->canBeReplied,
            'can_toggle_is_pinned' => $this->canToggleIsPinned,
            'can_get_viewers' => $this->canGetViewers,
            'has_expired_viewers' => $this->hasExpiredViewers,
            'interaction_info' => (isset($this->interactionInfo) ? $this->interactionInfo : null),
            'chosen_reaction_type' => (isset($this->chosenReactionType) ? $this->chosenReactionType : null),
            'privacy_settings' => $this->privacySettings->typeSerialize(),
            'content' => $this->content->typeSerialize(),
            array_map(fn($x) => $x->typeSerialize(), $this->areas),
            'caption' => $this->caption->typeSerialize(),
        ];
    }
}
