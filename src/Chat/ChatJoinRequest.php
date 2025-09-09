<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a user that sent a join request and waits for administrator approval.
 */
class ChatJoinRequest extends TdObject
{
    public const TYPE_NAME = 'chatJoinRequest';

    public function __construct(
        /**
         * User identifier.
         */
        protected int    $userId,
        /**
         * Point in time (Unix timestamp) when the user sent the join request.
         */
        protected int    $date,
        /**
         * A short bio of the user.
         */
        protected string $bio,
    ) {}

    public static function fromArray(array $array): ChatJoinRequest
    {
        return new static(
            $array['user_id'],
            $array['date'],
            $array['bio'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'user_id' => $this->userId,
            'date'    => $this->date,
            'bio'     => $this->bio,
        ];
    }
}
