<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns the profile photos of a user. Personal and public photo aren't returned
 */
class GetUserProfilePhotos extends TdFunction
{
    public const TYPE_NAME = 'getUserProfilePhotos';

    /**
     * User identifier
     *
     * @var int
     */
    protected int $userId;

    /**
     * The number of photos to skip; must be non-negative
     *
     * @var int
     */
    protected int $offset;

    /**
     * The maximum number of photos to be returned; up to 100
     *
     * @var int
     */
    protected int $limit;

    public function __construct(int $userId, int $offset, int $limit)
    {
        $this->userId = $userId;
        $this->offset = $offset;
        $this->limit = $limit;
    }

    public static function fromArray(array $array): GetUserProfilePhotos
    {
        return new static(
            $array['user_id'],
            $array['offset'],
            $array['limit'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'user_id' => $this->userId,
            'offset' => $this->offset,
            'limit' => $this->limit,
        ];
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function getLimit(): int
    {
        return $this->limit;
    }
}
