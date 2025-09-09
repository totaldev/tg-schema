<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link to the default message auto-delete timer settings section of the application settings.
 */
class InternalLinkTypeDefaultMessageAutoDeleteTimerSettings extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeDefaultMessageAutoDeleteTimerSettings';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeDefaultMessageAutoDeleteTimerSettings
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
