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
    public const string TYPE_NAME = 'toggleSupergroupIsAllHistoryAvailable';

    public function __construct(
        /**
         * The new value of is_all_history_available.
         */
        protected bool $isAllHistoryAvailable,
        /**
         * The identifier of the supergroup.
         */
        protected int  $supergroupId,
    ) {}

    public static function fromArray(array $array): ToggleSupergroupIsAllHistoryAvailable
    {
        return new static(
            isAllHistoryAvailable: $array['is_all_history_available'],
            supergroupId         : $array['supergroup_id'],
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

    public function setIsAllHistoryAvailable(bool $value): static
    {
        $this->isAllHistoryAvailable = $value;

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
            '@type'                    => static::TYPE_NAME,
            'is_all_history_available' => $this->isAllHistoryAvailable,
            'supergroup_id'            => $this->supergroupId,
        ];
    }
}
