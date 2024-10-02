<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Updates;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Update\Update;

/**
 * Contains a list of updates.
 */
class Updates extends TdObject
{
    public const TYPE_NAME = 'updates';

    public function __construct(
        /**
         * List of updates.
         *
         * @var Update[]
         */
        protected array $updates
    ) {}

    public static function fromArray(array $array): Updates
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['updates']),
        );
    }

    public function getUpdates(): array
    {
        return $this->updates;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->updates),
        ];
    }
}
