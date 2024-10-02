<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A chat member has gained/lost administrator status, or the list of their administrator privileges has changed.
 */
class ChatEventMemberPromoted extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventMemberPromoted';

    public function __construct(
        /**
         * Affected chat member user identifier.
         */
        protected int              $userId,
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

    public static function fromArray(array $array): ChatEventMemberPromoted
    {
        return new static(
            $array['user_id'],
            TdSchemaRegistry::fromArray($array['old_status']),
            TdSchemaRegistry::fromArray($array['new_status']),
        );
    }

    public function getNewStatus(): ChatMemberStatus
    {
        return $this->newStatus;
    }

    public function getOldStatus(): ChatMemberStatus
    {
        return $this->oldStatus;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'user_id'    => $this->userId,
            'old_status' => $this->oldStatus->typeSerialize(),
            'new_status' => $this->newStatus->typeSerialize(),
        ];
    }
}
