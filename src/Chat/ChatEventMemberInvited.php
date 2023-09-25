<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A new chat member was invited
 */
class ChatEventMemberInvited extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventMemberInvited';

    /**
     * New member status
     *
     * @var ChatMemberStatus
     */
    protected ChatMemberStatus $status;

    /**
     * New member user identifier
     *
     * @var int
     */
    protected int $userId;

    public function __construct(int $userId, ChatMemberStatus $status)
    {
        parent::__construct();

        $this->userId = $userId;
        $this->status = $status;
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'user_id' => $this->userId,
            'status' => $this->status->typeSerialize(),
        ];
    }
}
