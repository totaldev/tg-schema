<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Web;

/**
 * The Web App is opened in the full-size mode.
 */
class WebAppOpenModeFullSize extends WebAppOpenMode
{
    public const TYPE_NAME = 'webAppOpenModeFullSize';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): WebAppOpenModeFullSize
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
