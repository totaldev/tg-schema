<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Check;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The name can be set
 */
class CheckStickerSetNameResultOk extends CheckStickerSetNameResult
{
    public const TYPE_NAME = 'checkStickerSetNameResultOk';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): CheckStickerSetNameResultOk
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
