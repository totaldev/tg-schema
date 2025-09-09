<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

/**
 * The is_all_history_available setting of a supergroup was toggled.
 */
class ChatEventIsAllHistoryAvailableToggled extends ChatEventAction
{
    public const TYPE_NAME = 'chatEventIsAllHistoryAvailableToggled';

    public function __construct(
        /**
         * New value of is_all_history_available.
         */
        protected bool $isAllHistoryAvailable
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ChatEventIsAllHistoryAvailableToggled
    {
        return new static(
            $array['is_all_history_available'],
        );
    }

    public function getIsAllHistoryAvailable(): bool
    {
        return $this->isAllHistoryAvailable;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                    => static::TYPE_NAME,
            'is_all_history_available' => $this->isAllHistoryAvailable,
        ];
    }
}
