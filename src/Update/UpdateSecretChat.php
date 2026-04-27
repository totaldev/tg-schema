<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Secret\SecretChat;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Some data of a secret chat has changed. This update is guaranteed to come before the secret chat identifier is returned to the application.
 */
class UpdateSecretChat extends Update
{
    public const string TYPE_NAME = 'updateSecretChat';

    public function __construct(
        /**
         * New data about the secret chat.
         */
        protected SecretChat $secretChat
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateSecretChat
    {
        return new static(
            secretChat: TdSchemaRegistry::fromArray($array['secret_chat']),
        );
    }

    public function getSecretChat(): SecretChat
    {
        return $this->secretChat;
    }

    public function setSecretChat(SecretChat $value): static
    {
        $this->secretChat = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'secret_chat' => $this->secretChat->jsonSerialize(),
        ];
    }
}
