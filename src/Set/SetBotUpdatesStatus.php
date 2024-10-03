<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Informs the server about the number of pending bot updates if they haven't been processed for a long time; for bots only.
 */
class SetBotUpdatesStatus extends TdFunction
{
    public const TYPE_NAME = 'setBotUpdatesStatus';

    public function __construct(
        /**
         * The number of pending updates.
         */
        protected int    $pendingUpdateCount,
        /**
         * The last error message.
         */
        protected string $errorMessage,
    ) {}

    public static function fromArray(array $array): SetBotUpdatesStatus
    {
        return new static(
            $array['pending_update_count'],
            $array['error_message'],
        );
    }

    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    public function getPendingUpdateCount(): int
    {
        return $this->pendingUpdateCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'pending_update_count' => $this->pendingUpdateCount,
            'error_message'        => $this->errorMessage,
        ];
    }
}
