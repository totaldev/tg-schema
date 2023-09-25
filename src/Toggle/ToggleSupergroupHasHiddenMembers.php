<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Toggles whether non-administrators can receive only administrators and bots using getSupergroupMembers or searchChatMembers. Can be called only if
 * supergroupFullInfo.can_hide_members == true
 */
class ToggleSupergroupHasHiddenMembers extends TdFunction
{
    public const TYPE_NAME = 'toggleSupergroupHasHiddenMembers';

    /**
     * New value of has_hidden_members
     *
     * @var bool
     */
    protected bool $hasHiddenMembers;

    /**
     * Identifier of the supergroup
     *
     * @var int
     */
    protected int $supergroupId;

    public function __construct(int $supergroupId, bool $hasHiddenMembers)
    {
        $this->supergroupId = $supergroupId;
        $this->hasHiddenMembers = $hasHiddenMembers;
    }

    public static function fromArray(array $array): ToggleSupergroupHasHiddenMembers
    {
        return new static(
            $array['supergroup_id'],
            $array['has_hidden_members'],
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'supergroup_id' => $this->supergroupId,
            'has_hidden_members' => $this->hasHiddenMembers,
        ];
    }
}
