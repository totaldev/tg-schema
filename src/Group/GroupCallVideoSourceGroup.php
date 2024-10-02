<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Group;

use Totaldev\TgSchema\TdObject;

/**
 * Describes a group of video synchronization source identifiers.
 */
class GroupCallVideoSourceGroup extends TdObject
{
    public const TYPE_NAME = 'groupCallVideoSourceGroup';

    public function __construct(
        /**
         * The semantics of sources, one of "SIM" or "FID".
         */
        protected string $semantics,
        /**
         * The list of synchronization source identifiers.
         *
         * @var int[]
         */
        protected array  $sourceIds,
    ) {}

    public static function fromArray(array $array): GroupCallVideoSourceGroup
    {
        return new static(
            $array['semantics'],
            $array['source_ids'],
        );
    }

    public function getSemantics(): string
    {
        return $this->semantics;
    }

    public function getSourceIds(): array
    {
        return $this->sourceIds;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'semantics'  => $this->semantics,
            'source_ids' => $this->sourceIds,
        ];
    }
}
