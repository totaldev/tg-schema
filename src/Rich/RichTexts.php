<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Rich;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A concatenation of rich texts.
 */
class RichTexts extends RichText
{
    public const TYPE_NAME = 'richTexts';

    public function __construct(
        /**
         * Texts.
         *
         * @var RichText[]
         */
        protected array $texts
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): RichTexts
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['texts']),
        );
    }

    public function getTexts(): array
    {
        return $this->texts;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'texts' => array_map(static fn($x) => $x->typeSerialize(), $this->texts),
        ];
    }
}
