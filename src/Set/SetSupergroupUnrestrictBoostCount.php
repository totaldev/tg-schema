<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the number of times the supergroup must be boosted by a user to ignore slow mode and chat permission restrictions; requires can_restrict_members
 * administrator right.
 */
class SetSupergroupUnrestrictBoostCount extends TdFunction
{
    public const TYPE_NAME = 'setSupergroupUnrestrictBoostCount';

    public function __construct(
        /**
         * Identifier of the supergroup.
         */
        protected int $supergroupId,
        /**
         * New value of the unrestrict_boost_count supergroup setting; 0-8. Use 0 to remove the setting.
         */
        protected int $unrestrictBoostCount
    ) {}

    public static function fromArray(array $array): SetSupergroupUnrestrictBoostCount
    {
        return new static(
            $array['supergroup_id'],
            $array['unrestrict_boost_count'],
        );
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function getUnrestrictBoostCount(): int
    {
        return $this->unrestrictBoostCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'supergroup_id'          => $this->supergroupId,
            'unrestrict_boost_count' => $this->unrestrictBoostCount,
        ];
    }
}
