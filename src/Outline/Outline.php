<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Outline;

use Totaldev\TgSchema\Closed\ClosedVectorPath;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents outline of an image.
 */
class Outline extends TdObject
{
    public const TYPE_NAME = 'outline';

    public function __construct(
        /**
         * The list of closed vector paths.
         *
         * @var ClosedVectorPath[]
         */
        protected array $paths
    ) {}

    public static function fromArray(array $array): Outline
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['paths']),
        );
    }

    public function getPaths(): array
    {
        return $this->paths;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(static fn($x) => $x->typeSerialize(), $this->paths),
        ];
    }
}
