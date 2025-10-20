<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Web;

/**
 * The Web App is opened in the compact mode.
 */
class WebAppOpenModeCompact extends WebAppOpenMode
{
    public const TYPE_NAME = 'webAppOpenModeCompact';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): WebAppOpenModeCompact
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
