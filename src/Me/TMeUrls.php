<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Me;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of t.me URLs.
 */
class TMeUrls extends TdObject
{
    public const TYPE_NAME = 'tMeUrls';

    public function __construct(
        /**
         * List of URLs.
         *
         * @var TMeUrl[]
         */
        protected array $urls
    ) {}

    public static function fromArray(array $array): TMeUrls
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['urls']),
        );
    }

    public function getUrls(): array
    {
        return $this->urls;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(static fn($x) => $x->typeSerialize(), $this->urls),
        ];
    }
}
