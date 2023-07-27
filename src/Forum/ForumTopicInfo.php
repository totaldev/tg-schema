<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Forum;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains basic information about a forum topic
 */
class ForumTopicInfo extends TdObject
{
    public const TYPE_NAME = 'forumTopicInfo';

    /**
     * Message thread identifier of the topic
     *
     * @var int
     */
    protected int $messageThreadId;

    /**
     * Name of the topic
     *
     * @var string
     */
    protected string $name;

    /**
     * Icon of the topic
     *
     * @var ForumTopicIcon
     */
    protected ForumTopicIcon $icon;

    /**
     * Point in time (Unix timestamp) when the topic was created
     *
     * @var int
     */
    protected int $creationDate;

    /**
     * Identifier of the creator of the topic
     *
     * @var MessageSender
     */
    protected MessageSender $creatorId;

    /**
     * True, if the topic is the General topic list
     *
     * @var bool
     */
    protected bool $isGeneral;

    /**
     * True, if the topic was created by the current user
     *
     * @var bool
     */
    protected bool $isOutgoing;

    /**
     * True, if the topic is closed
     *
     * @var bool
     */
    protected bool $isClosed;

    /**
     * True, if the topic is hidden above the topic list and closed; for General topic only
     *
     * @var bool
     */
    protected bool $isHidden;

    public function __construct(
        int $messageThreadId,
        string $name,
        ForumTopicIcon $icon,
        int $creationDate,
        MessageSender $creatorId,
        bool $isGeneral,
        bool $isOutgoing,
        bool $isClosed,
        bool $isHidden,
    ) {
        $this->messageThreadId = $messageThreadId;
        $this->name = $name;
        $this->icon = $icon;
        $this->creationDate = $creationDate;
        $this->creatorId = $creatorId;
        $this->isGeneral = $isGeneral;
        $this->isOutgoing = $isOutgoing;
        $this->isClosed = $isClosed;
        $this->isHidden = $isHidden;
    }

    public static function fromArray(array $array): ForumTopicInfo
    {
        return new static(
            $array['message_thread_id'],
            $array['name'],
            TdSchemaRegistry::fromArray($array['icon']),
            $array['creation_date'],
            TdSchemaRegistry::fromArray($array['creator_id']),
            $array['is_general'],
            $array['is_outgoing'],
            $array['is_closed'],
            $array['is_hidden'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'message_thread_id' => $this->messageThreadId,
            'name' => $this->name,
            'icon' => $this->icon->typeSerialize(),
            'creation_date' => $this->creationDate,
            'creator_id' => $this->creatorId->typeSerialize(),
            'is_general' => $this->isGeneral,
            'is_outgoing' => $this->isOutgoing,
            'is_closed' => $this->isClosed,
            'is_hidden' => $this->isHidden,
        ];
    }

    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getIcon(): ForumTopicIcon
    {
        return $this->icon;
    }

    public function getCreationDate(): int
    {
        return $this->creationDate;
    }

    public function getCreatorId(): MessageSender
    {
        return $this->creatorId;
    }

    public function getIsGeneral(): bool
    {
        return $this->isGeneral;
    }

    public function getIsOutgoing(): bool
    {
        return $this->isOutgoing;
    }

    public function getIsClosed(): bool
    {
        return $this->isClosed;
    }

    public function getIsHidden(): bool
    {
        return $this->isHidden;
    }
}
