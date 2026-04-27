<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Group;

use Totaldev\TgSchema\TdObject;

/**
 * Contains the group call identifier.
 */
class GroupCallId extends TdObject
{
    public const string TYPE_NAME = 'groupCallId';

    public function __construct(
        /**
         * Group call identifier.
         */
        protected int $id
    ) {}

    public static function fromArray(array $array): GroupCallId
    {
        return new static(
            id: $array['id'],
        );
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id'    => $this->id,
        ];
    }
}
