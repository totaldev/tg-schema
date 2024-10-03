<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;

/**
 * Contains information about a chat administrator.
 */
class ChatAdministrator extends TdObject
{
    public const TYPE_NAME = 'chatAdministrator';

    public function __construct(
        /**
         * User identifier of the administrator.
         */
        protected int    $userId,
        /**
         * Custom title of the administrator.
         */
        protected string $customTitle,
        /**
         * True, if the user is the owner of the chat.
         */
        protected bool   $isOwner,
    ) {}

    public static function fromArray(array $array): ChatAdministrator
    {
        return new static(
            $array['user_id'],
            $array['custom_title'],
            $array['is_owner'],
        );
    }

    public function getCustomTitle(): string
    {
        return $this->customTitle;
    }

    public function getIsOwner(): bool
    {
        return $this->isOwner;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'user_id'      => $this->userId,
            'custom_title' => $this->customTitle,
            'is_owner'     => $this->isOwner,
        ];
    }
}
