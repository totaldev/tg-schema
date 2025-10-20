<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Web;

/**
 * The Web App is opened in the full-screen mode.
 */
class WebAppOpenModeFullScreen extends WebAppOpenMode
{
    public const TYPE_NAME = 'webAppOpenModeFullScreen';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): WebAppOpenModeFullScreen
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
