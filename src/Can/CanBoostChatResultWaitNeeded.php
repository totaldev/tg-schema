<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Can;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The user must wait the specified time before the boost can be moved to another chat
 */
class CanBoostChatResultWaitNeeded extends CanBoostChatResult
{
    public const TYPE_NAME = 'canBoostChatResultWaitNeeded';

    /**
     * Time left before the user can boost another chat
     *
     * @var int
     */
    protected int $retryAfter;

    public function __construct(int $retryAfter)
    {
        parent::__construct();

        $this->retryAfter = $retryAfter;
    }

    public static function fromArray(array $array): CanBoostChatResultWaitNeeded
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
