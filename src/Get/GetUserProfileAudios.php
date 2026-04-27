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
    public const string TYPE_NAME = 'getUserProfileAudios';

    public function __construct(
        /**
         * The maximum number of audio files to be returned; up to 100.
         */
        protected int $limit,
        /**
         * The number of audio files to skip; must be non-negative.
         */
        protected int $offset,
        /**
         * User identifier.
         */
        protected int $userId,
    ) {}

    public static function fromArray(array $array): GetUserProfileAudios
    {
        return new static(
            limit : $array['limit'],
            offset: $array['offset'],
            userId: $array['user_id'],
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

    public function setLimit(int $value): static
    {
        $this->limit = $value;

        return $this;
    }

    public function setOffset(int $value): static
    {
        $this->offset = $value;

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
            'limit'   => $this->limit,
            'offset'  => $this->offset,
            'user_id' => $this->userId,
        ];
    }
}
