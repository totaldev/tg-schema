<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Json;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a JSON object.
 */
class JsonValueObject extends JsonValue
{
    public const TYPE_NAME = 'jsonValueObject';

    public function __construct(
        /**
         * The list of object members.
         *
         * @var JsonObjectMember[]
         */
        protected array $members
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): JsonValueObject
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['members']),
        );
    }

    public function getMembers(): array
    {
        return $this->members;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'members' => array_map(static fn($x) => $x->typeSerialize(), $this->members),
        ];
    }
}
