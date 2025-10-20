<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the list of profile audio files of a user.
 */
class GetUserProfileAudios extends TdFunction
{
    public const TYPE_NAME = 'getUserProfileAudios';

    public function __construct(
        /**
         * User identifier.
         */
        protected int $userId,
        /**
         * The number of audio files to skip; must be non-negative.
         */
        protected int $offset,
        /**
         * The maximum number of audio files to be returned; up to 100.
         */
        protected int $limit,
    ) {}

    public static function fromArray(array $array): GetUserProfileAudios
    {
        return new static(
            $array['user_id'],
            $array['offset'],
            $array['limit'],
        );
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function getOffset(): int
    {
        return $this->offset;
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
            'offset'  => $this->offset,
            'limit'   => $this->limit,
        ];
    }
}
