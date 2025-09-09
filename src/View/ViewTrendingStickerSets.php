<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\View;

use Totaldev\TgSchema\TdFunction;

/**
 * Informs the server that some trending sticker sets have been viewed by the user.
 */
class ViewTrendingStickerSets extends TdFunction
{
    public const TYPE_NAME = 'viewTrendingStickerSets';

    public function __construct(
        /**
         * Identifiers of viewed trending sticker sets.
         *
         * @var int[]
         */
        protected array $stickerSetIds
    ) {}

    public static function fromArray(array $array): ViewTrendingStickerSets
    {
        return new static(
            $array['sticker_set_ids'],
        );
    }

    public function getStickerSetIds(): array
    {
        return $this->stickerSetIds;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'sticker_set_ids' => $this->stickerSetIds,
        ];
    }
}
