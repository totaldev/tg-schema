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
    public const string TYPE_NAME = 'businessConnection';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the connection was established.
         */
        protected int                $date,
        /**
         * Unique identifier of the connection.
         */
        protected string             $id,
        /**
         * True, if the connection is enabled; false otherwise.
         */
        protected bool               $isEnabled,
        /**
         * Rights of the bot; may be null if the connection was disabled.
         */
        protected ?BusinessBotRights $rights,
        /**
         * Chat identifier of the private chat with the user.
         */
        protected int                $userChatId,
        /**
         * Identifier of the business user who created the connection.
         */
        protected int                $userId,
    ) {}

    public static function fromArray(array $array): BusinessConnection
    {
        return new static(
            date      : $array['date'],
            id        : $array['id'],
            isEnabled : $array['is_enabled'],
            rights    : (isset($array['rights']) ? TdSchemaRegistry::fromArray($array['rights']) : null),
            userChatId: $array['user_chat_id'],
            userId    : $array['user_id'],
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

    public function setDate(int $value): static
    {
        $this->date = $value;

        return $this;
    }

    public function setId(string $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setIsEnabled(bool $value): static
    {
        $this->isEnabled = $value;

        return $this;
    }

    public function setRights(?BusinessBotRights $value): static
    {
        $this->rights = $value;

        return $this;
    }

    public function setUserChatId(int $value): static
    {
        $this->userChatId = $value;

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
            'date'         => $this->date,
            'id'           => $this->id,
            'is_enabled'   => $this->isEnabled,
            'rights'       => (null !== $this->rights ? $this->rights->jsonSerialize() : null),
            'user_chat_id' => $this->userChatId,
            'user_id'      => $this->userId,
        ];
    }
}
