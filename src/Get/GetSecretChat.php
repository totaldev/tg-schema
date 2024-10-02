<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns information about a secret chat by its identifier. This is an offline request.
 */
class GetSecretChat extends TdFunction
{
    public const TYPE_NAME = 'getSecretChat';

    public function __construct(
        /**
         * Secret chat identifier.
         */
        protected int $secretChatId
    ) {}

    public static function fromArray(array $array): GetSecretChat
    {
        return new static(
            $array['secret_chat_id'],
        );
    }

    public function getSecretChatId(): int
    {
        return $this->secretChatId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'secret_chat_id' => $this->secretChatId,
        ];
    }
}
