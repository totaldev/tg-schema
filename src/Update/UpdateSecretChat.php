<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Secret\SecretChat;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Some data of a secret chat has changed. This update is guaranteed to come before the secret chat identifier is returned to the application
 */
class UpdateSecretChat extends Update
{
    public const TYPE_NAME = 'updateSecretChat';

    /**
     * New data about the secret chat
     *
     * @var SecretChat
     */
    protected SecretChat $secretChat;

    public function __construct(SecretChat $secretChat)
    {
        parent::__construct();

        $this->secretChat = $secretChat;
    }

    public static function fromArray(array $array): UpdateSecretChat
    {
        return new static(
            TdSchemaRegistry::fromArray($array['secret_chat']),
        );
    }

    public function getSecretChat(): SecretChat
    {
        return $this->secretChat;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'secret_chat' => $this->secretChat->typeSerialize(),
        ];
    }
}
