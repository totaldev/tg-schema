<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Web;

use Totaldev\TgSchema\TdObject;

/**
 * Describes mode in which a Web App is opened.
 */
class WebAppOpenMode extends TdObject
{
    public const TYPE_NAME = 'WebAppOpenMode';

    public function __construct() {}

    public static function fromArray(array $array): WebAppOpenMode
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
