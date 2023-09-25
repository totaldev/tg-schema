<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes pause state of all files in the file download list
 */
class ToggleAllDownloadsArePaused extends TdFunction
{
    public const TYPE_NAME = 'toggleAllDownloadsArePaused';

    /**
     * Pass true to pause all downloads; pass false to unpause them
     *
     * @var bool
     */
    protected bool $arePaused;

    public function __construct(bool $arePaused)
    {
        $this->arePaused = $arePaused;
    }

    public static function fromArray(array $array): ToggleAllDownloadsArePaused
    {
        return new static(
            $array['are_paused'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'are_paused' => $this->arePaused,
        ];
    }

    public function getArePaused(): bool
    {
        return $this->arePaused;
    }
}
