<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Bot;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents the scope to which bot commands are relevant
 */
class BotCommandScope extends TdObject
{
    public const TYPE_NAME = 'BotCommandScope';

    public function __construct()
    {
    }

    public static function fromArray(array $array): BotCommandScope
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
