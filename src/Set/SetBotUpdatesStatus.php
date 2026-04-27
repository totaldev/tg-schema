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
    public const string TYPE_NAME = 'setBotUpdatesStatus';

    public function __construct(
        /**
         * The last error message.
         */
        protected string $errorMessage,
        /**
         * The number of pending updates.
         */
        protected int    $pendingUpdateCount,
    ) {}

    public static function fromArray(array $array): SetBotUpdatesStatus
    {
        return new static(
            errorMessage      : $array['error_message'],
            pendingUpdateCount: $array['pending_update_count'],
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

    public function setErrorMessage(string $value): static
    {
        $this->errorMessage = $value;

        return $this;
    }

    public function setPendingUpdateCount(int $value): static
    {
        $this->pendingUpdateCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'error_message'        => $this->errorMessage,
            'pending_update_count' => $this->pendingUpdateCount,
        ];
    }
}
