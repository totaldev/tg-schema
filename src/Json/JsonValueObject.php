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
    public const string TYPE_NAME = 'jsonValueObject';

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
            members: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['members']),
        );
    }

    public function getMembers(): array
    {
        return $this->members;
    }

    public function setMembers(array $value): static
    {
        $this->members = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'members' => array_map(static fn($x) => $x->jsonSerialize(), $this->members),
        ];
    }
}
