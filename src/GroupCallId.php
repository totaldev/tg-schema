<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Contains the group call identifier
 */
class GroupCallId extends TdObject
{
    public const TYPE_NAME = 'groupCallId';

    /**
     * Group call identifier
     *
     * @var int
     */
    protected int $id;

    public function __construct(int $id)
    {
        $this->id = $id;
    }

    public static function fromArray(array $array): GroupCallId
    {
        return new static(
            $array['id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }
}
