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
    public const string TYPE_NAME = 'chatAdministrator';

    public function __construct(
        /**
         * Custom title of the administrator.
         */
        protected string $customTitle,
        /**
         * True, if the user is the owner of the chat.
         */
        protected bool   $isOwner,
        /**
         * User identifier of the administrator.
         */
        protected int    $userId,
    ) {}

    public static function fromArray(array $array): ChatAdministrator
    {
        return new static(
            customTitle: $array['custom_title'],
            isOwner    : $array['is_owner'],
            userId     : $array['user_id'],
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

    public function setCustomTitle(string $value): static
    {
        $this->customTitle = $value;

        return $this;
    }

    public function setIsOwner(bool $value): static
    {
        $this->isOwner = $value;

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
            '@type'        => static::TYPE_NAME,
            'custom_title' => $this->customTitle,
            'is_owner'     => $this->isOwner,
            'user_id'      => $this->userId,
        ];
    }
}
