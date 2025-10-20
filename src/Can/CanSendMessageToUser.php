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
    public const TYPE_NAME = 'canSendMessageToUser';

    public function __construct(
        /**
         * Identifier of the other user.
         */
        protected int  $userId,
        /**
         * Pass true to get only locally available information without sending network requests.
         */
        protected bool $onlyLocal,
    ) {}

    public static function fromArray(array $array): CanSendMessageToUser
    {
        return new static(
            $array['user_id'],
            $array['only_local'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'user_id'    => $this->userId,
            'only_local' => $this->onlyLocal,
        ];
    }
}
