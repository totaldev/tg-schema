<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Check;

use Totaldev\TgSchema\TdFunction;

/**
 * Checks whether a name can be used for a new sticker set.
 */
class CheckStickerSetName extends TdFunction
{
    public const TYPE_NAME = 'checkStickerSetName';

    public function __construct(
        /**
         * Name to be checked.
         */
        protected string $name
    ) {}

    public static function fromArray(array $array): CheckStickerSetName
    {
        return new static(
            $array['name'],
        );
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'name'  => $this->name,
        ];
    }
}
