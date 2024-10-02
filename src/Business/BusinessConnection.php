<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Business;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a connection of the bot with a business account.
 */
class BusinessConnection extends TdObject
{
    public const TYPE_NAME = 'businessConnection';

    public function __construct(
        /**
         * Unique identifier of the connection.
         */
        protected string $id,
        /**
         * Identifier of the business user that created the connection.
         */
        protected int    $userId,
        /**
         * Chat identifier of the private chat with the user.
         */
        protected int    $userChatId,
        /**
         * Point in time (Unix timestamp) when the connection was established.
         */
        protected int    $date,
        /**
         * True, if the bot can send messages to the connected user; false otherwise.
         */
        protected bool   $canReply,
        /**
         * True, if the connection is enabled; false otherwise.
         */
        protected bool   $isEnabled,
    ) {}

    public static function fromArray(array $array): BusinessConnection
    {
        return new static(
            $array['id'],
            $array['user_id'],
            $array['user_chat_id'],
            $array['date'],
            $array['can_reply'],
            $array['is_enabled'],
        );
    }

    public function getCanReply(): bool
    {
        return $this->canReply;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getIsEnabled(): bool
    {
        return $this->isEnabled;
    }

    public function getUserChatId(): int
    {
        return $this->userChatId;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'id'           => $this->id,
            'user_id'      => $this->userId,
            'user_chat_id' => $this->userChatId,
            'date'         => $this->date,
            'can_reply'    => $this->canReply,
            'is_enabled'   => $this->isEnabled,
        ];
    }
}
