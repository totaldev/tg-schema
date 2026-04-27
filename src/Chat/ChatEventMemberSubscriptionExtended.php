<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A chat member extended their subscription to the chat.
 */
class ChatEventMemberSubscriptionExtended extends ChatEventAction
{
    public const string TYPE_NAME = 'chatEventMemberSubscriptionExtended';

    public function __construct(
        /**
         * New status of the chat member.
         */
        protected ChatMemberStatus $newStatus,
        /**
         * Previous status of the chat member.
         */
        protected ChatMemberStatus $oldStatus,
        /**
         * Affected chat member user identifier.
         */
        protected int              $userId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventMemberSubscriptionExtended
    {
        return new static(
            newStatus: TdSchemaRegistry::fromArray($array['new_status']),
            oldStatus: TdSchemaRegistry::fromArray($array['old_status']),
            userId   : $array['user_id'],
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

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'new_status' => $this->newStatus->jsonSerialize(),
            'old_status' => $this->oldStatus->jsonSerialize(),
            'user_id'    => $this->userId,
        ];
    }
}
