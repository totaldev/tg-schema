<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns a globally unique push notification subscription identifier for identification of an account, which has received a push notification. Can be called
 * synchronously.
 */
class GetPushReceiverId extends TdFunction
{
    public const TYPE_NAME = 'getPushReceiverId';

    public function __construct(
        /**
         * JSON-encoded push notification payload.
         */
        protected string $payload
    ) {}

    public static function fromArray(array $array): GetPushReceiverId
    {
        return new static(
            $array['payload'],
        );
    }

    public function getPayload(): string
    {
        return $this->payload;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'payload' => $this->payload,
        ];
    }
}
