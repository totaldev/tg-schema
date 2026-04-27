<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Text\TextCompositionStyle;

/**
 * The styles supported for text composition have changed.
 */
class UpdateTextCompositionStyles extends Update
{
    public const string TYPE_NAME = 'updateTextCompositionStyles';

    public function __construct(
        /**
         * The new list of supported styles.
         *
         * @var TextCompositionStyle[]
         */
        protected array $styles
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateTextCompositionStyles
    {
        return new static(
            styles: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['styles']),
        );
    }

    public function getStyles(): array
    {
        return $this->styles;
    }

    public function setStyles(array $value): static
    {
        $this->styles = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'styles' => array_map(static fn($x) => $x->jsonSerialize(), $this->styles),
        ];
    }
}
