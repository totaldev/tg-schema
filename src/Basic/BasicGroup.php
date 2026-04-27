<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Basic;

use Totaldev\TgSchema\Chat\ChatMemberStatus;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a basic group of 0-200 users (must be upgraded to a supergroup to accommodate more than 200 users).
 */
class BasicGroup extends TdObject
{
    public const string TYPE_NAME = 'basicGroup';

    public function __construct(
        /**
         * Group identifier.
         */
        protected int              $id,
        /**
         * True, if the group is active.
         */
        protected bool             $isActive,
        /**
         * Number of members in the group.
         */
        protected int              $memberCount,
        /**
         * Status of the current user in the group.
         */
        protected ChatMemberStatus $status,
        /**
         * Identifier of the supergroup to which this group was upgraded; 0 if none.
         */
        protected int              $upgradedToSupergroupId,
    ) {}

    public static function fromArray(array $array): BasicGroup
    {
        return new static(
            id                    : $array['id'],
            isActive              : $array['is_active'],
            memberCount           : $array['member_count'],
            status                : TdSchemaRegistry::fromArray($array['status']),
            upgradedToSupergroupId: $array['upgraded_to_supergroup_id'],
        );
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getIsActive(): bool
    {
        return $this->isActive;
    }

    public function getMemberCount(): int
    {
        return $this->memberCount;
    }

    public function getStatus(): ChatMemberStatus
    {
        return $this->status;
    }

    public function getUpgradedToSupergroupId(): int
    {
        return $this->upgradedToSupergroupId;
    }

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setIsActive(bool $value): static
    {
        $this->isActive = $value;

        return $this;
    }

    public function setMemberCount(int $value): static
    {
        $this->memberCount = $value;

        return $this;
    }

    public function setStatus(ChatMemberStatus $value): static
    {
        $this->status = $value;

        return $this;
    }

    public function setUpgradedToSupergroupId(int $value): static
    {
        $this->upgradedToSupergroupId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                     => static::TYPE_NAME,
            'id'                        => $this->id,
            'is_active'                 => $this->isActive,
            'member_count'              => $this->memberCount,
            'status'                    => $this->status->jsonSerialize(),
            'upgraded_to_supergroup_id' => $this->upgradedToSupergroupId,
        ];
    }
}
