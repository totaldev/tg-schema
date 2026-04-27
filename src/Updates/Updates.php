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
    public const string TYPE_NAME = 'updates';

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
            updates: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['updates']),
        );
    }

    public function getUpdates(): array
    {
        return $this->updates;
    }

    public function setUpdates(array $value): static
    {
        $this->updates = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'updates' => array_map(static fn($x) => $x->jsonSerialize(), $this->updates),
        ];
    }
}
