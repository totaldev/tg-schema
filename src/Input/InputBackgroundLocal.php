<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A background from a local file.
 */
class InputBackgroundLocal extends InputBackground
{
    public const TYPE_NAME = 'inputBackgroundLocal';

    public function __construct(
        /**
         * Background file to use. Only inputFileLocal and inputFileGenerated are supported. The file must be in JPEG format for wallpapers and in PNG format for patterns.
         */
        protected InputFile $background
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputBackgroundLocal
    {
        return new static(
            TdSchemaRegistry::fromArray($array['background']),
        );
    }

    public function getBackground(): InputFile
    {
        return $this->background;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'background' => $this->background->typeSerialize(),
        ];
    }
}
