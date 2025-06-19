<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Found;

use Totaldev\TgSchema\TdObject;

/**
 * Represents a list of found users.
 */
class FoundUsers extends TdObject
{
    public const TYPE_NAME = 'foundUsers';

    public function __construct(
        /**
         * Identifiers of the found users.
         *
         * @var int[]
         */
        protected array  $userIds,
        /**
         * The offset for the next request. If empty, then there are no more results.
         */
        protected string $nextOffset
    ) {}

    public static function fromArray(array $array): FoundUsers
    {
        return new static(
            $array['user_ids'],
            $array['next_offset'],
        );
    }

    public function getNextOffset(): string
    {
        return $this->nextOffset;
    }

    public function getUserIds(): array
    {
        return $this->userIds;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'user_ids'    => $this->userIds,
            'next_offset' => $this->nextOffset,
        ];
    }
}
