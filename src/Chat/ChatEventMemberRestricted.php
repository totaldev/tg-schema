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
    public const TYPE_NAME = 'chatEventMemberRestricted';

    public function __construct(
        /**
         * Affected chat member identifier.
         */
        protected MessageSender    $memberId,
        /**
         * Previous status of the chat member.
         */
        protected ChatMemberStatus $oldStatus,
        /**
         * New status of the chat member.
         */
        protected ChatMemberStatus $newStatus,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventMemberRestricted
    {
        return new static(
            TdSchemaRegistry::fromArray($array['member_id']),
            TdSchemaRegistry::fromArray($array['old_status']),
            TdSchemaRegistry::fromArray($array['new_status']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'member_id'  => $this->memberId->typeSerialize(),
            'old_status' => $this->oldStatus->typeSerialize(),
            'new_status' => $this->newStatus->typeSerialize(),
        ];
    }
}
