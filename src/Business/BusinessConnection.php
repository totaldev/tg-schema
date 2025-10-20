<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Business;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

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
        protected string             $id,
        /**
         * Identifier of the business user that created the connection.
         */
        protected int                $userId,
        /**
         * Chat identifier of the private chat with the user.
         */
        protected int                $userChatId,
        /**
         * Point in time (Unix timestamp) when the connection was established.
         */
        protected int                $date,
        /**
         * Rights of the bot; may be null if the connection was disabled.
         */
        protected ?BusinessBotRights $rights,
        /**
         * True, if the connection is enabled; false otherwise.
         */
        protected bool               $isEnabled,
    ) {}

    public static function fromArray(array $array): BusinessConnection
    {
        return new static(
            $array['id'],
            $array['user_id'],
            $array['user_chat_id'],
            $array['date'],
            isset($array['rights']) ? TdSchemaRegistry::fromArray($array['rights']) : null,
            $array['is_enabled'],
        );
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

    public function getRights(): ?BusinessBotRights
    {
        return $this->rights;
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
            'rights'       => $this->rights ?? null,
            'is_enabled'   => $this->isEnabled,
        ];
    }
}
