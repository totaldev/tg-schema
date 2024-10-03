<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Create;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns an existing chat corresponding to a known secret chat.
 */
class CreateSecretChat extends TdFunction
{
    public const TYPE_NAME = 'createSecretChat';

    public function __construct(
        /**
         * Secret chat identifier.
         */
        protected int $secretChatId
    ) {}

    public static function fromArray(array $array): CreateSecretChat
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
