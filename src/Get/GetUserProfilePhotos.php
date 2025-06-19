<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the profile photos of a user. Personal and public photo aren't returned.
 */
class GetUserProfilePhotos extends TdFunction
{
    public const TYPE_NAME = 'getUserProfilePhotos';

    public function __construct(
        /**
         * User identifier.
         */
        protected int $userId,
        /**
         * The number of photos to skip; must be non-negative.
         */
        protected int $offset,
        /**
         * The maximum number of photos to be returned; up to 100.
         */
        protected int $limit
    ) {}

    public static function fromArray(array $array): GetUserProfilePhotos
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
