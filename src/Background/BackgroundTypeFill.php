<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Background;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A filled background.
 */
class BackgroundTypeFill extends BackgroundType
{
    public const string TYPE_NAME = 'backgroundTypeFill';

    public function __construct(
        /**
         * The background fill.
         */
        protected BackgroundFill $fill
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): BackgroundTypeFill
    {
        return new static(
            fill: TdSchemaRegistry::fromArray($array['fill']),
        );
    }

    public function getFill(): BackgroundFill
    {
        return $this->fill;
    }

    public function setFill(BackgroundFill $value): static
    {
        $this->fill = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'fill'  => $this->fill->jsonSerialize(),
        ];
    }
}
