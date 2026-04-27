<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a user who sent a join request and waits for administrator approval.
 */
class ChatJoinRequest extends TdObject
{
    public const string TYPE_NAME = 'chatJoinRequest';

    public function __construct(
        /**
         * A short bio of the user.
         */
        protected string $bio,
        /**
         * Point in time (Unix timestamp) when the user sent the join request.
         */
        protected int    $date,
        /**
         * User identifier.
         */
        protected int    $userId,
    ) {}

    public static function fromArray(array $array): ChatJoinRequest
    {
        return new static(
            bio   : $array['bio'],
            date  : $array['date'],
            userId: $array['user_id'],
        );
    }

    public function getBio(): string
    {
        return $this->bio;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setBio(string $value): static
    {
        $this->bio = $value;

        return $this;
    }

    public function setDate(int $value): static
    {
        $this->date = $value;

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
            '@type'   => static::TYPE_NAME,
            'bio'     => $this->bio,
            'date'    => $this->date,
            'user_id' => $this->userId,
        ];
    }
}
