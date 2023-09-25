<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Confirm;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Confirms an unconfirmed session of the current user from another device
 */
class ConfirmSession extends TdFunction
{
    public const TYPE_NAME = 'confirmSession';

    /**
     * Session identifier
     *
     * @var int
     */
    protected int $sessionId;

    public function __construct(int $sessionId)
    {
        $this->sessionId = $sessionId;
    }

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
            '@type' => static::TYPE_NAME,
            'session_id' => $this->sessionId,
        ];
    }
}
