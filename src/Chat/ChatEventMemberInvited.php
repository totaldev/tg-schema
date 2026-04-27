<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A new chat member was invited.
 */
class ChatEventMemberInvited extends ChatEventAction
{
    public const string TYPE_NAME = 'chatEventMemberInvited';

    public function __construct(
        /**
         * New member status.
         */
        protected ChatMemberStatus $status,
        /**
         * New member user identifier.
         */
        protected int              $userId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventMemberInvited
    {
        return new static(
            status: TdSchemaRegistry::fromArray($array['status']),
            userId: $array['user_id'],
        );
    }

    public function getStatus(): ChatMemberStatus
    {
        return $this->status;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setStatus(ChatMemberStatus $value): static
    {
        $this->status = $value;

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
            '@type'   => static::TYPE_NAME,
            'status'  => $this->status->jsonSerialize(),
            'user_id' => $this->userId,
        ];
    }
}
