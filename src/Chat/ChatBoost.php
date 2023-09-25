<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a boost of a chat
 */
class ChatBoost extends TdObject
{
    public const TYPE_NAME = 'chatBoost';

    /**
     * Point in time (Unix timestamp) when the boost will automatically expire if the user will not prolongate their Telegram Premium subscription
     *
     * @var int
     */
    protected int $expirationDate;

    /**
     * Identifier of a user that boosted the chat
     *
     * @var int
     */
    protected int $userId;

    public function __construct(int $userId, int $expirationDate)
    {
        $this->userId = $userId;
        $this->expirationDate = $expirationDate;
    }

    public static function fromArray(array $array): ChatBoost
    {
        return new static(
            $array['user_id'],
            $array['expiration_date'],
        );
    }

    public function getExpirationDate(): int
    {
        return $this->expirationDate;
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
            'expiration_date' => $this->expirationDate,
        ];
    }
}
