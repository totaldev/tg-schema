<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes pause state of all files in the file download list.
 */
class ToggleAllDownloadsArePaused extends TdFunction
{
    public const TYPE_NAME = 'toggleAllDownloadsArePaused';

    public function __construct(
        /**
         * Pass true to pause all downloads; pass false to unpause them.
         */
        protected bool $arePaused
    ) {}

    public static function fromArray(array $array): ToggleAllDownloadsArePaused
    {
        return new static(
            $array['are_paused'],
        );
    }

    public function getArePaused(): bool
    {
        return $this->arePaused;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'are_paused' => $this->arePaused,
        ];
    }
}
