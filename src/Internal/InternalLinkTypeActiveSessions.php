<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Internal;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link is a link to the active sessions section of the application. Use getActiveSessions to handle the link
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
