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
    public const TYPE_NAME = 'backgroundTypeFill';

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
            TdSchemaRegistry::fromArray($array['fill']),
        );
    }

    public function getFill(): BackgroundFill
    {
        return $this->fill;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'fill'  => $this->fill->typeSerialize(),
        ];
    }
}
