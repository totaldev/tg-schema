<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Poll;

use Totaldev\TgSchema\TdObject;

/**
 * Contains properties of a poll option and describes actions that can be done with the option right now.
 */
class PollOptionProperties extends TdObject
{
    public const string TYPE_NAME = 'pollOptionProperties';

    public function __construct(
        /**
         * True, if the option can be deleted using deletePollOption.
         */
        protected bool $canBeDeleted,
        /**
         * True, if the poll option can be replied in the same chat and forum topic using inputMessageReplyToMessage.
         */
        protected bool $canBeReplied,
        /**
         * True, if the poll option can be replied in another chat or forum topic using inputMessageReplyToExternalMessage.
         */
        protected bool $canBeRepliedInAnotherChat,
        /**
         * True, if a link can be generated for the poll option using getMessageLink.
         */
        protected bool $canGetLink,
    ) {}

    public static function fromArray(array $array): PollOptionProperties
    {
        return new static(
            canBeDeleted             : $array['can_be_deleted'],
            canBeReplied             : $array['can_be_replied'],
            canBeRepliedInAnotherChat: $array['can_be_replied_in_another_chat'],
            canGetLink               : $array['can_get_link'],
        );
    }

    public function getCanBeDeleted(): bool
    {
        return $this->canBeDeleted;
    }

    public function getCanBeReplied(): bool
    {
        return $this->canBeReplied;
    }

    public function getCanBeRepliedInAnotherChat(): bool
    {
        return $this->canBeRepliedInAnotherChat;
    }

    public function getCanGetLink(): bool
    {
        return $this->canGetLink;
    }

    public function setCanBeDeleted(bool $value): static
    {
        $this->canBeDeleted = $value;

        return $this;
    }

    public function setCanBeReplied(bool $value): static
    {
        $this->canBeReplied = $value;

        return $this;
    }

    public function setCanBeRepliedInAnotherChat(bool $value): static
    {
        $this->canBeRepliedInAnotherChat = $value;

        return $this;
    }

    public function setCanGetLink(bool $value): static
    {
        $this->canGetLink = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                          => static::TYPE_NAME,
            'can_be_deleted'                 => $this->canBeDeleted,
            'can_be_replied'                 => $this->canBeReplied,
            'can_be_replied_in_another_chat' => $this->canBeRepliedInAnotherChat,
            'can_get_link'                   => $this->canGetLink,
        ];
    }
}
