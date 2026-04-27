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
    public const string TYPE_NAME = 'internalLinkTypeStickerSet';

    public function __construct(
        /**
         * True, if the sticker set is expected to contain custom emoji.
         */
        protected bool   $expectCustomEmoji,
        /**
         * Name of the sticker set.
         */
        protected string $stickerSetName,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeStickerSet
    {
        return new static(
            expectCustomEmoji: $array['expect_custom_emoji'],
            stickerSetName   : $array['sticker_set_name'],
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

    public function setExpectCustomEmoji(bool $value): static
    {
        $this->expectCustomEmoji = $value;

        return $this;
    }

    public function setStickerSetName(string $value): static
    {
        $this->stickerSetName = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'expect_custom_emoji' => $this->expectCustomEmoji,
            'sticker_set_name'    => $this->stickerSetName,
        ];
    }
}
