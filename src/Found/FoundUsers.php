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
    public const string TYPE_NAME = 'foundUsers';

    public function __construct(
        /**
         * The offset for the next request. If empty, then there are no more results.
         */
        protected string $nextOffset,
        /**
         * Identifiers of the found users.
         *
         * @var int[]
         */
        protected array  $userIds,
    ) {}

    public static function fromArray(array $array): FoundUsers
    {
        return new static(
            nextOffset: $array['next_offset'],
            userIds   : $array['user_ids'],
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

    public function setNextOffset(string $value): static
    {
        $this->nextOffset = $value;

        return $this;
    }

    public function setUserIds(array $value): static
    {
        $this->userIds = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'next_offset' => $this->nextOffset,
            'user_ids'    => $this->userIds,
        ];
    }
}
