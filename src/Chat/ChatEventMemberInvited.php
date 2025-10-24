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
         * New member user identifier.
         */
        protected int              $userId,
        /**
         * New member status.
         */
        protected ChatMemberStatus $status,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventMemberInvited
    {
        return new static(
            $array['user_id'],
            TdSchemaRegistry::fromArray($array['status']),
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
            'user_id' => $this->userId,
            'status'  => $this->status->typeSerialize(),
        ];
    }
}
