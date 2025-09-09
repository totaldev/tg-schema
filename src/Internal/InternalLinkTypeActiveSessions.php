<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link to the Devices section of the application. Use getActiveSessions to get the list of active sessions and show them to the user.
 */
class InternalLinkTypeActiveSessions extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeActiveSessions';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeActiveSessions
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
