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
    public const TYPE_NAME = 'sharedUser';

    public function __construct(
        /**
         * User identifier.
         */
        protected int    $userId,
        /**
         * First name of the user; for bots only.
         */
        protected string $firstName,
        /**
         * Last name of the user; for bots only.
         */
        protected string $lastName,
        /**
         * Username of the user; for bots only.
         */
        protected string $username,
        /**
         * Profile photo of the user; for bots only; may be null.
         */
        protected ?Photo $photo
    ) {}

    public static function fromArray(array $array): SharedUser
    {
        return new static(
            $array['user_id'],
            $array['first_name'],
            $array['last_name'],
            $array['username'],
            isset($array['photo']) ? TdSchemaRegistry::fromArray($array['photo']) : null,
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

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'user_id'    => $this->userId,
            'first_name' => $this->firstName,
            'last_name'  => $this->lastName,
            'username'   => $this->username,
            'photo'      => (isset($this->photo) ? $this->photo : null),
        ];
    }
}
