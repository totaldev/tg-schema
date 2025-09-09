<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns a list of recently used stickers.
 */
class GetRecentStickers extends TdFunction
{
    public const TYPE_NAME = 'getRecentStickers';

    public function __construct(
        /**
         * Pass true to return stickers and masks that were recently attached to photos or video files; pass false to return recently sent stickers.
         */
        protected bool $isAttached
    ) {}

    public static function fromArray(array $array): GetRecentStickers
    {
        return new static(
            $array['is_attached'],
        );
    }

    public function getIsAttached(): bool
    {
        return $this->isAttached;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'is_attached' => $this->isAttached,
        ];
    }
}
