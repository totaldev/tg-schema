<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Passport;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The front side of the document contains an error. The error will be considered resolved when the file with the front side changes
 */
class PassportElementErrorSourceFrontSide extends PassportElementErrorSource
{
    public const TYPE_NAME = 'passportElementErrorSourceFrontSide';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): PassportElementErrorSourceFrontSide
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
