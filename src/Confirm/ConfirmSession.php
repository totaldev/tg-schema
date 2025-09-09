<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Confirm;

use Totaldev\TgSchema\TdFunction;

/**
 * Confirms an unconfirmed session of the current user from another device.
 */
class ConfirmSession extends TdFunction
{
    public const TYPE_NAME = 'confirmSession';

    public function __construct(
        /**
         * Session identifier.
         */
        protected int $sessionId
    ) {}

    public static function fromArray(array $array): ConfirmSession
    {
        return new static(
            $array['session_id'],
        );
    }

    public function getSessionId(): int
    {
        return $this->sessionId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'session_id' => $this->sessionId,
        ];
    }
}
