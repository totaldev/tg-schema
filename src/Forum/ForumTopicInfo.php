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
    public const string TYPE_NAME = 'forumTopicInfo';

    public function __construct(
        /**
         * Identifier of a forum supergroup chat or a chat with a bot to which the topic belongs.
         */
        protected int            $chatId,
        /**
         * Point in time (Unix timestamp) when the topic was created.
         */
        protected int            $creationDate,
        /**
         * Identifier of the creator of the topic.
         */
        protected MessageSender  $creatorId,
        /**
         * Forum topic identifier of the topic.
         */
        protected int            $forumTopicId,
        /**
         * Icon of the topic.
         */
        protected ForumTopicIcon $icon,
        /**
         * True, if the topic is closed. If the topic is closed, then the user must have can_manage_topics administrator right in the supergroup or must be the creator of the topic to send messages there.
         */
        protected bool           $isClosed,
        /**
         * True, if the topic is the General topic.
         */
        protected bool           $isGeneral,
        /**
         * True, if the topic is hidden above the topic list and closed; for General topic only.
         */
        protected bool           $isHidden,
        /**
         * True, if the name of the topic wasn't added explicitly.
         */
        protected bool           $isNameImplicit,
        /**
         * True, if the topic was created by the current user.
         */
        protected bool           $isOutgoing,
        /**
         * Name of the topic.
         */
        protected string         $name,
    ) {}

    public static function fromArray(array $array): ForumTopicInfo
    {
        return new static(
            chatId        : $array['chat_id'],
            creationDate  : $array['creation_date'],
            creatorId     : TdSchemaRegistry::fromArray($array['creator_id']),
            forumTopicId  : $array['forum_topic_id'],
            icon          : TdSchemaRegistry::fromArray($array['icon']),
            isClosed      : $array['is_closed'],
            isGeneral     : $array['is_general'],
            isHidden      : $array['is_hidden'],
            isNameImplicit: $array['is_name_implicit'],
            isOutgoing    : $array['is_outgoing'],
            name          : $array['name'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getCreationDate(): int
    {
        return $this->creationDate;
    }

    public function getCreatorId(): MessageSender
    {
        return $this->creatorId;
    }

    public function getForumTopicId(): int
    {
        return $this->forumTopicId;
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

    public function getIsNameImplicit(): bool
    {
        return $this->isNameImplicit;
    }

    public function getIsOutgoing(): bool
    {
        return $this->isOutgoing;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setCreationDate(int $value): static
    {
        $this->creationDate = $value;

        return $this;
    }

    public function setCreatorId(MessageSender $value): static
    {
        $this->creatorId = $value;

        return $this;
    }

    public function setForumTopicId(int $value): static
    {
        $this->forumTopicId = $value;

        return $this;
    }

    public function setIcon(ForumTopicIcon $value): static
    {
        $this->icon = $value;

        return $this;
    }

    public function setIsClosed(bool $value): static
    {
        $this->isClosed = $value;

        return $this;
    }

    public function setIsGeneral(bool $value): static
    {
        $this->isGeneral = $value;

        return $this;
    }

    public function setIsHidden(bool $value): static
    {
        $this->isHidden = $value;

        return $this;
    }

    public function setIsNameImplicit(bool $value): static
    {
        $this->isNameImplicit = $value;

        return $this;
    }

    public function setIsOutgoing(bool $value): static
    {
        $this->isOutgoing = $value;

        return $this;
    }

    public function setName(string $value): static
    {
        $this->name = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'chat_id'          => $this->chatId,
            'creation_date'    => $this->creationDate,
            'creator_id'       => $this->creatorId->jsonSerialize(),
            'forum_topic_id'   => $this->forumTopicId,
            'icon'             => $this->icon->jsonSerialize(),
            'is_closed'        => $this->isClosed,
            'is_general'       => $this->isGeneral,
            'is_hidden'        => $this->isHidden,
            'is_name_implicit' => $this->isNameImplicit,
            'is_outgoing'      => $this->isOutgoing,
            'name'             => $this->name,
        ];
    }
}
