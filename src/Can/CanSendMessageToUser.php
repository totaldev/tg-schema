<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Can;

use Totaldev\TgSchema\TdFunction;

/**
 * Check whether the current user can message another user or try to create a chat with them.
 */
class CanSendMessageToUser extends TdFunction
{
    public const string TYPE_NAME = 'canSendMessageToUser';

    public function __construct(
        /**
         * Pass true to get only locally available information without sending network requests.
         */
        protected bool $onlyLocal,
        /**
         * Identifier of the other user.
         */
        protected int  $userId,
    ) {}

    public static function fromArray(array $array): CanSendMessageToUser
    {
        return new static(
            onlyLocal: $array['only_local'],
            userId   : $array['user_id'],
        );
    }

    public function getOnlyLocal(): bool
    {
        return $this->onlyLocal;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setOnlyLocal(bool $value): static
    {
        $this->onlyLocal = $value;

        return $this;
    }

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'only_local' => $this->onlyLocal,
            'user_id'    => $this->userId,
        ];
    }
}
