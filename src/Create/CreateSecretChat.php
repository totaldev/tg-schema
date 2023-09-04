<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Create;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns an existing chat corresponding to a known secret chat
 */
class CreateSecretChat extends TdFunction
{
    public const TYPE_NAME = 'createSecretChat';

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

    public static function fromArray(array $array): CreateSecretChat
    {
        return new static(
            $array['secret_chat_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'secret_chat_id' => $this->secretChatId,
        ];
    }

    public function getSecretChatId(): int
    {
        return $this->secretChatId;
    }
}
