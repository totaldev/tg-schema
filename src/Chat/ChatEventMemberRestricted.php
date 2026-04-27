<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A chat member was restricted/unrestricted or banned/unbanned, or the list of their restrictions has changed.
 */
class ChatEventMemberRestricted extends ChatEventAction
{
    public const string TYPE_NAME = 'chatEventMemberRestricted';

    public function __construct(
        /**
         * Affected chat member identifier.
         */
        protected MessageSender    $memberId,
        /**
         * New status of the chat member.
         */
        protected ChatMemberStatus $newStatus,
        /**
         * Previous status of the chat member.
         */
        protected ChatMemberStatus $oldStatus,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventMemberRestricted
    {
        return new static(
            memberId : TdSchemaRegistry::fromArray($array['member_id']),
            newStatus: TdSchemaRegistry::fromArray($array['new_status']),
            oldStatus: TdSchemaRegistry::fromArray($array['old_status']),
        );
    }

    public function getMemberId(): MessageSender
    {
        return $this->memberId;
    }

    public function getNewStatus(): ChatMemberStatus
    {
        return $this->newStatus;
    }

    public function getOldStatus(): ChatMemberStatus
    {
        return $this->oldStatus;
    }

    public function setMemberId(MessageSender $value): static
    {
        $this->memberId = $value;

        return $this;
    }

    public function setNewStatus(ChatMemberStatus $value): static
    {
        $this->newStatus = $value;

        return $this;
    }

    public function setOldStatus(ChatMemberStatus $value): static
    {
        $this->oldStatus = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'member_id'  => $this->memberId->jsonSerialize(),
            'new_status' => $this->newStatus->jsonSerialize(),
            'old_status' => $this->oldStatus->jsonSerialize(),
        ];
    }
}
