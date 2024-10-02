<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Toggles whether the message history of a supergroup is available to new members; requires can_change_info member right.
 */
class ToggleSupergroupIsAllHistoryAvailable extends TdFunction
{
    public const TYPE_NAME = 'toggleSupergroupIsAllHistoryAvailable';

    public function __construct(
        /**
         * The identifier of the supergroup.
         */
        protected int  $supergroupId,
        /**
         * The new value of is_all_history_available.
         */
        protected bool $isAllHistoryAvailable,
    ) {}

    public static function fromArray(array $array): ToggleSupergroupIsAllHistoryAvailable
    {
        return new static(
            $array['supergroup_id'],
            $array['is_all_history_available'],
        );
    }

    public function getIsAllHistoryAvailable(): bool
    {
        return $this->isAllHistoryAvailable;
    }

    public function getSupergroupId(): int
    {
        return $this->supergroupId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                    => static::TYPE_NAME,
            'supergroup_id'            => $this->supergroupId,
            'is_all_history_available' => $this->isAllHistoryAvailable,
        ];
    }
}
