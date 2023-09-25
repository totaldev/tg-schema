<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A chat member has gained/lost administrator status, or the list of their administrator privileges has changed
 */
class ChatEventMemberPromoted extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventMemberPromoted';

    /**
     * New status of the chat member
     *
     * @var ChatMemberStatus
     */
    protected ChatMemberStatus $newStatus;

    /**
     * Previous status of the chat member
     *
     * @var ChatMemberStatus
     */
    protected ChatMemberStatus $oldStatus;

    /**
     * Affected chat member user identifier
     *
     * @var int
     */
    protected int $userId;

    public function __construct(int $userId, ChatMemberStatus $oldStatus, ChatMemberStatus $newStatus)
    {
        parent::__construct();

        $this->userId = $userId;
        $this->oldStatus = $oldStatus;
        $this->newStatus = $newStatus;
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
            '@type' => static::TYPE_NAME,
            'user_id' => $this->userId,
            'old_status' => $this->oldStatus->typeSerialize(),
            'new_status' => $this->newStatus->typeSerialize(),
        ];
    }
}
