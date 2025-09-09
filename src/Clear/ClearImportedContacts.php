<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Clear;

use Totaldev\TgSchema\TdFunction;

/**
 * Clears all imported contacts, contact list remains unchanged.
 */
class ClearImportedContacts extends TdFunction
{
    public const TYPE_NAME = 'clearImportedContacts';

    public function __construct() {}

    public static function fromArray(array $array): ClearImportedContacts
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
