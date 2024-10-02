<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Forum;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains basic information about a forum topic.
 */
class ForumTopicInfo extends TdObject
{
    public const TYPE_NAME = 'forumTopicInfo';

    public function __construct(
        /**
         * Message thread identifier of the topic.
         */
        protected int            $messageThreadId,
        /**
         * Name of the topic.
         */
        protected string         $name,
        /**
         * Icon of the topic.
         */
        protected ForumTopicIcon $icon,
        /**
         * Point in time (Unix timestamp) when the topic was created.
         */
        protected int            $creationDate,
        /**
         * Identifier of the creator of the topic.
         */
        protected MessageSender  $creatorId,
        /**
         * True, if the topic is the General topic list.
         */
        protected bool           $isGeneral,
        /**
         * True, if the topic was created by the current user.
         */
        protected bool           $isOutgoing,
        /**
         * True, if the topic is closed.
         */
        protected bool           $isClosed,
        /**
         * True, if the topic is hidden above the topic list and closed; for General topic only.
         */
        protected bool           $isHidden,
    ) {}

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

    public function getCreationDate(): int
    {
        return $this->creationDate;
    }

    public function getCreatorId(): MessageSender
    {
        return $this->creatorId;
    }

    public function getIcon(): ForumTopicIcon
    {
        return $this->icon;
    }

    public function getIsClosed(): bool
    {
        return $this->isClosed;
    }

    public function getIsGeneral(): bool
    {
        return $this->isGeneral;
    }

    public function getIsHidden(): bool
    {
        return $this->isHidden;
    }

    public function getIsOutgoing(): bool
    {
        return $this->isOutgoing;
    }

    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'message_thread_id' => $this->messageThreadId,
            'name'              => $this->name,
            'icon'              => $this->icon->typeSerialize(),
            'creation_date'     => $this->creationDate,
            'creator_id'        => $this->creatorId->typeSerialize(),
            'is_general'        => $this->isGeneral,
            'is_outgoing'       => $this->isOutgoing,
            'is_closed'         => $this->isClosed,
            'is_hidden'         => $this->isHidden,
        ];
    }
}
