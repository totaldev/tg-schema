<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a list of chat administrators.
 */
class ChatAdministrators extends TdObject
{
    public const TYPE_NAME = 'chatAdministrators';

    public function __construct(
        /**
         * A list of chat administrators.
         *
         * @var ChatAdministrator[]
         */
        protected array $administrators
    ) {}

    public static function fromArray(array $array): ChatAdministrators
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['administrators']),
        );
    }

    public function getAdministrators(): array
    {
        return $this->administrators;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'administrators' => array_map(static fn($x) => $x->typeSerialize(), $this->administrators),
        ];
    }
}
