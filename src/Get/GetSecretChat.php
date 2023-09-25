<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns information about a secret chat by its identifier. This is an offline request
 */
class GetSecretChat extends TdFunction
{
    public const TYPE_NAME = 'getSecretChat';

    /**
     * Secret chat identifier
     *
     * @var int
     */
    protected int $secretChatId;

    public function __construct(int $secretChatId)
    {
        $this->secretChatId = $secretChatId;
    }

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
            '@type' => static::TYPE_NAME,
            'secret_chat_id' => $this->secretChatId,
        ];
    }
}
