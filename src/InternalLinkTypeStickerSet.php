<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * The link is a link to a sticker set. Call searchStickerSet with the given sticker set name to process the link and show the sticker set
 */
class InternalLinkTypeStickerSet extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeStickerSet';

    /**
     * Name of the sticker set
     *
     * @var string
     */
    protected string $stickerSetName;

    /**
     * True, if the sticker set is expected to contain custom emoji
     *
     * @var bool
     */
    protected bool $expectCustomEmoji;

    public function __construct(string $stickerSetName, bool $expectCustomEmoji)
    {
        parent::__construct();

        $this->stickerSetName = $stickerSetName;
        $this->expectCustomEmoji = $expectCustomEmoji;
    }

    public static function fromArray(array $array): InternalLinkTypeStickerSet
    {
        return new static(
            $array['sticker_set_name'],
            $array['expect_custom_emoji'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'sticker_set_name' => $this->stickerSetName,
            'expect_custom_emoji' => $this->expectCustomEmoji,
        ];
    }

    public function getStickerSetName(): string
    {
        return $this->stickerSetName;
    }

    public function getExpectCustomEmoji(): bool
    {
        return $this->expectCustomEmoji;
    }
}
