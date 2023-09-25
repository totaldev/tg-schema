<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about a chat administrator
 */
class ChatAdministrator extends TdObject
{
    public const TYPE_NAME = 'chatAdministrator';

    /**
     * Custom title of the administrator
     *
     * @var string
     */
    protected string $customTitle;

    /**
     * True, if the user is the owner of the chat
     *
     * @var bool
     */
    protected bool $isOwner;

    /**
     * User identifier of the administrator
     *
     * @var int
     */
    protected int $userId;

    public function __construct(int $userId, string $customTitle, bool $isOwner)
    {
        $this->userId = $userId;
        $this->customTitle = $customTitle;
        $this->isOwner = $isOwner;
    }

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
            '@type' => static::TYPE_NAME,
            'user_id' => $this->userId,
            'custom_title' => $this->customTitle,
            'is_owner' => $this->isOwner,
        ];
    }
}
