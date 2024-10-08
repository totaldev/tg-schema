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
    public const TYPE_NAME = 'toggleSupergroupIsForum';

    public function __construct(
        /**
         * Identifier of the supergroup.
         */
        protected int  $supergroupId,
        /**
         * New value of is_forum.
         */
        protected bool $isForum,
    ) {}

    public static function fromArray(array $array): ToggleSupergroupIsForum
    {
        return new static(
            $array['supergroup_id'],
            $array['is_forum'],
        );
    }

    public function getIsForum(): bool
    {
        return $this->isForum;
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'supergroup_id' => $this->supergroupId,
            'is_forum'      => $this->isForum,
        ];
    }
}
