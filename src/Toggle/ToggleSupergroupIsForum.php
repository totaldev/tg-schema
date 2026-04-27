<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Toggles whether the supergroup is a forum; requires owner privileges in the supergroup. Discussion supergroups can't be converted to forums.
 */
class ToggleSupergroupIsForum extends TdFunction
{
    public const string TYPE_NAME = 'toggleSupergroupIsForum';

    public function __construct(
        /**
         * New value of has_forum_tabs; ignored if is_forum is false.
         */
        protected bool $hasForumTabs,
        /**
         * New value of is_forum.
         */
        protected bool $isForum,
        /**
         * Identifier of the supergroup.
         */
        protected int  $supergroupId,
    ) {}

    public static function fromArray(array $array): ToggleSupergroupIsForum
    {
        return new static(
            hasForumTabs: $array['has_forum_tabs'],
            isForum     : $array['is_forum'],
            supergroupId: $array['supergroup_id'],
        );
    }

    public function getHasForumTabs(): bool
    {
        return $this->hasForumTabs;
    }

    public function getIsForum(): bool
    {
        return $this->isForum;
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function setHasForumTabs(bool $value): static
    {
        $this->hasForumTabs = $value;

        return $this;
    }

    public function setIsForum(bool $value): static
    {
        $this->isForum = $value;

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
            '@type'          => static::TYPE_NAME,
            'has_forum_tabs' => $this->hasForumTabs,
            'is_forum'       => $this->isForum,
            'supergroup_id'  => $this->supergroupId,
        ];
    }
}
