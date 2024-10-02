<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link to a sticker set. Call searchStickerSet with the given sticker set name to process the link and show the sticker set. If the sticker set
 * is found and the user wants to add it, then call changeStickerSet.
 */
class InternalLinkTypeStickerSet extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeStickerSet';

    public function __construct(
        /**
         * Name of the sticker set.
         */
        protected string $stickerSetName,
        /**
         * True, if the sticker set is expected to contain custom emoji.
         */
        protected bool   $expectCustomEmoji,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeStickerSet
    {
        return new static(
            $array['sticker_set_name'],
            $array['expect_custom_emoji'],
        );
    }

    public function getExpectCustomEmoji(): bool
    {
        return $this->expectCustomEmoji;
    }

    public function getStickerSetName(): string
    {
        return $this->stickerSetName;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'sticker_set_name'    => $this->stickerSetName,
            'expect_custom_emoji' => $this->expectCustomEmoji,
        ];
    }
}
