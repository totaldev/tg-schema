<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Shared;

use Totaldev\TgSchema\Photo\Photo;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about a user shared with a bot.
 */
class SharedUser extends TdObject
{
    public const string TYPE_NAME = 'sharedUser';

    public function __construct(
        /**
         * First name of the user; for bots only.
         */
        protected string $firstName,
        /**
         * Last name of the user; for bots only.
         */
        protected string $lastName,
        /**
         * Profile photo of the user; for bots only; may be null.
         */
        protected ?Photo $photo,
        /**
         * User identifier.
         */
        protected int    $userId,
        /**
         * Username of the user; for bots only.
         */
        protected string $username,
    ) {}

    public static function fromArray(array $array): SharedUser
    {
        return new static(
            firstName: $array['first_name'],
            lastName : $array['last_name'],
            photo    : (isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null),
            userId   : $array['user_id'],
            username : $array['username'],
        );
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getPhoto(): ?Photo
    {
        return $this->photo;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setFirstName(string $value): static
    {
        $this->firstName = $value;

        return $this;
    }

    public function setLastName(string $value): static
    {
        $this->lastName = $value;

        return $this;
    }

    public function setPhoto(?Photo $value): static
    {
        $this->photo = $value;

        return $this;
    }

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function setUsername(string $value): static
    {
        $this->username = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'first_name' => $this->firstName,
            'last_name'  => $this->lastName,
            'photo'      => (null !== $this->photo ? $this->photo->jsonSerialize() : null),
            'user_id'    => $this->userId,
            'username'   => $this->username,
        ];
    }
}
