<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Can;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The session was created recently, user needs to wait
 */
class CanTransferOwnershipResultSessionTooFresh extends CanTransferOwnershipResult
{
    public const TYPE_NAME = 'canTransferOwnershipResultSessionTooFresh';

    /**
     * Time left before the session can be used to transfer ownership of a chat, in seconds
     *
     * @var int
     */
    protected int $retryAfter;

    public function __construct(int $retryAfter)
    {
        parent::__construct();

        $this->retryAfter = $retryAfter;
    }

    public static function fromArray(array $array): CanTransferOwnershipResultSessionTooFresh
    {
        return new static(
            $array['retry_after'],
        );
    }

    public function getRetryAfter(): int
    {
        return $this->retryAfter;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'retry_after' => $this->retryAfter,
        ];
    }
}
