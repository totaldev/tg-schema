<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Story;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a story
 */
class Story extends TdObject
{
    public const TYPE_NAME = 'story';

    /**
     * Unique story identifier among stories of the given sender
     *
     * @var int
     */
    protected int $id;

    /**
     * Identifier of the chat that posted the story
     *
     * @var int
     */
    protected int $senderChatId;

    /**
     * Point in time (Unix timestamp) when the story was published
     *
     * @var int
     */
    protected int $date;

    /**
     * True, if the story is being edited by the current user
     *
     * @var bool
     */
    protected bool $isBeingEdited;

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
     * True, if users viewed the story can't be received, because the story has expired more than getOption("story_viewers_expiration_delay") seconds ago
     *
     * @var bool
     */
    protected bool $hasExpiredViewers;

    /**
     * Information about interactions with the story; may be null if the story isn't owned or there were no interactions
     *
     * @var StoryInteractionInfo|null
     */
    protected ?StoryInteractionInfo $interactionInfo;

    /**
     * Privacy rules affecting story visibility; may be approximate for non-owned stories
     *
     * @var StoryPrivacySettings
     */
    protected StoryPrivacySettings $privacySettings;

    /**
     * Content of the story
     *
     * @var StoryContent
     */
    protected StoryContent $content;

    /**
     * Caption of the story
     *
     * @var FormattedText
     */
    protected FormattedText $caption;

    public function __construct(
        int $id,
        int $senderChatId,
        int $date,
        bool $isBeingEdited,
        bool $isEdited,
        bool $isPinned,
        bool $isVisibleOnlyForSelf,
        bool $canBeForwarded,
        bool $canBeReplied,
        bool $canGetViewers,
        bool $hasExpiredViewers,
        ?StoryInteractionInfo $interactionInfo,
        StoryPrivacySettings $privacySettings,
        StoryContent $content,
        FormattedText $caption,
    ) {
        $this->id = $id;
        $this->senderChatId = $senderChatId;
        $this->date = $date;
        $this->isBeingEdited = $isBeingEdited;
        $this->isEdited = $isEdited;
        $this->isPinned = $isPinned;
        $this->isVisibleOnlyForSelf = $isVisibleOnlyForSelf;
        $this->canBeForwarded = $canBeForwarded;
        $this->canBeReplied = $canBeReplied;
        $this->canGetViewers = $canGetViewers;
        $this->hasExpiredViewers = $hasExpiredViewers;
        $this->interactionInfo = $interactionInfo;
        $this->privacySettings = $privacySettings;
        $this->content = $content;
        $this->caption = $caption;
    }

    public static function fromArray(array $array): Story
    {
        return new static(
            $array['id'],
            $array['sender_chat_id'],
            $array['date'],
            $array['is_being_edited'],
            $array['is_edited'],
            $array['is_pinned'],
            $array['is_visible_only_for_self'],
            $array['can_be_forwarded'],
            $array['can_be_replied'],
            $array['can_get_viewers'],
            $array['has_expired_viewers'],
            (isset($array['interaction_info']) ? TdSchemaRegistry::fromArray($array['interaction_info']) : null),
            TdSchemaRegistry::fromArray($array['privacy_settings']),
            TdSchemaRegistry::fromArray($array['content']),
            TdSchemaRegistry::fromArray($array['caption']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
            'sender_chat_id' => $this->senderChatId,
            'date' => $this->date,
            'is_being_edited' => $this->isBeingEdited,
            'is_edited' => $this->isEdited,
            'is_pinned' => $this->isPinned,
            'is_visible_only_for_self' => $this->isVisibleOnlyForSelf,
            'can_be_forwarded' => $this->canBeForwarded,
            'can_be_replied' => $this->canBeReplied,
            'can_get_viewers' => $this->canGetViewers,
            'has_expired_viewers' => $this->hasExpiredViewers,
            'interaction_info' => (isset($this->interactionInfo) ? $this->interactionInfo : null),
            'privacy_settings' => $this->privacySettings->typeSerialize(),
            'content' => $this->content->typeSerialize(),
            'caption' => $this->caption->typeSerialize(),
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getSenderChatId(): int
    {
        return $this->senderChatId;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getIsBeingEdited(): bool
    {
        return $this->isBeingEdited;
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

    public function getHasExpiredViewers(): bool
    {
        return $this->hasExpiredViewers;
    }

    public function getInteractionInfo(): ?StoryInteractionInfo
    {
        return $this->interactionInfo;
    }

    public function getPrivacySettings(): StoryPrivacySettings
    {
        return $this->privacySettings;
    }

    public function getContent(): StoryContent
    {
        return $this->content;
    }

    public function getCaption(): FormattedText
    {
        return $this->caption;
    }
}
