<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Email;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes reset state of a email address
 */
class EmailAddressResetState extends TdObject
{
    public const TYPE_NAME = 'EmailAddressResetState';

    public function __construct()
    {
    }

    public static function fromArray(array $array): EmailAddressResetState
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
