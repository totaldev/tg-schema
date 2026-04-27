<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Toggles whether non-administrators can receive only administrators and bots using getSupergroupMembers or searchChatMembers. Can be called only if
 * supergroupFullInfo.can_hide_members == true.
 */
class ToggleSupergroupHasHiddenMembers extends TdFunction
{
    public const string TYPE_NAME = 'toggleSupergroupHasHiddenMembers';

    public function __construct(
        /**
         * New value of has_hidden_members.
         */
        protected bool $hasHiddenMembers,
        /**
         * Identifier of the supergroup.
         */
        protected int  $supergroupId,
    ) {}

    public static function fromArray(array $array): ToggleSupergroupHasHiddenMembers
    {
        return new static(
            hasHiddenMembers: $array['has_hidden_members'],
            supergroupId    : $array['supergroup_id'],
        );
    }

    public function getHasHiddenMembers(): bool
    {
        return $this->hasHiddenMembers;
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function setHasHiddenMembers(bool $value): static
    {
        $this->hasHiddenMembers = $value;

        return $this;
    }

    public function setSupergroupId(int $value): static
    {
        $this->supergroupId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'has_hidden_members' => $this->hasHiddenMembers,
            'supergroup_id'      => $this->supergroupId,
        ];
    }
}
