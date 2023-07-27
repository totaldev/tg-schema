<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Sticker;

use Totaldev\TgSchema\Closed\ClosedVectorPath;
use Totaldev\TgSchema\Emojis\Emojis;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Thumbnail\Thumbnail;

/**
 * Represents a sticker set
 */
class StickerSet extends TdObject
{
    public const TYPE_NAME = 'stickerSet';

    /**
     * Identifier of the sticker set
     *
     * @var int
     */
    protected int $id;

    /**
     * Title of the sticker set
     *
     * @var string
     */
    protected string $title;

    /**
     * Name of the sticker set
     *
     * @var string
     */
    protected string $name;

    /**
     * Sticker set thumbnail in WEBP, TGS, or WEBM format with width and height 100; may be null. The file can be downloaded only before the thumbnail is changed
     *
     * @var Thumbnail|null
     */
    protected ?Thumbnail $thumbnail;

    /**
     * Sticker set thumbnail's outline represented as a list of closed vector paths; may be empty. The coordinate system origin is in the upper-left corner
     *
     * @var ClosedVectorPath[]
     */
    protected array $thumbnailOutline;

    /**
     * True, if the sticker set has been installed by the current user
     *
     * @var bool
     */
    protected bool $isInstalled;

    /**
     * True, if the sticker set has been archived. A sticker set can't be installed and archived simultaneously
     *
     * @var bool
     */
    protected bool $isArchived;

    /**
     * True, if the sticker set is official
     *
     * @var bool
     */
    protected bool $isOfficial;

    /**
     * Format of the stickers in the set
     *
     * @var StickerFormat
     */
    protected StickerFormat $stickerFormat;

    /**
     * Type of the stickers in the set
     *
     * @var StickerType
     */
    protected StickerType $stickerType;

    /**
     * True for already viewed trending sticker sets
     *
     * @var bool
     */
    protected bool $isViewed;

    /**
     * List of stickers in this set
     *
     * @var Sticker[]
     */
    protected array $stickers;

    /**
     * A list of emoji corresponding to the stickers in the same order. The list is only for informational purposes, because a sticker is always sent with a fixed emoji from the corresponding Sticker object
     *
     * @var Emojis[]
     */
    protected array $emojis;

    public function __construct(
        int $id,
        string $title,
        string $name,
        ?Thumbnail $thumbnail,
        array $thumbnailOutline,
        bool $isInstalled,
        bool $isArchived,
        bool $isOfficial,
        StickerFormat $stickerFormat,
        StickerType $stickerType,
        bool $isViewed,
        array $stickers,
        array $emojis,
    ) {
        $this->id = $id;
        $this->title = $title;
        $this->name = $name;
        $this->thumbnail = $thumbnail;
        $this->thumbnailOutline = $thumbnailOutline;
        $this->isInstalled = $isInstalled;
        $this->isArchived = $isArchived;
        $this->isOfficial = $isOfficial;
        $this->stickerFormat = $stickerFormat;
        $this->stickerType = $stickerType;
        $this->isViewed = $isViewed;
        $this->stickers = $stickers;
        $this->emojis = $emojis;
    }

    public static function fromArray(array $array): StickerSet
    {
        return new static(
            $array['id'],
            $array['title'],
            $array['name'],
            (isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['thumbnailOutline']),
            $array['is_installed'],
            $array['is_archived'],
            $array['is_official'],
            TdSchemaRegistry::fromArray($array['sticker_format']),
            TdSchemaRegistry::fromArray($array['sticker_type']),
            $array['is_viewed'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['stickers']),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['emojis']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
            'title' => $this->title,
            'name' => $this->name,
            'thumbnail' => (isset($this->thumbnail) ? $this->thumbnail : null),
            array_map(fn($x) => $x->typeSerialize(), $this->thumbnailOutline),
            'is_installed' => $this->isInstalled,
            'is_archived' => $this->isArchived,
            'is_official' => $this->isOfficial,
            'sticker_format' => $this->stickerFormat->typeSerialize(),
            'sticker_type' => $this->stickerType->typeSerialize(),
            'is_viewed' => $this->isViewed,
            array_map(fn($x) => $x->typeSerialize(), $this->stickers),
            array_map(fn($x) => $x->typeSerialize(), $this->emojis),
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getThumbnail(): ?Thumbnail
    {
        return $this->thumbnail;
    }

    public function getThumbnailOutline(): array
    {
        return $this->thumbnailOutline;
    }

    public function getIsInstalled(): bool
    {
        return $this->isInstalled;
    }

    public function getIsArchived(): bool
    {
        return $this->isArchived;
    }

    public function getIsOfficial(): bool
    {
        return $this->isOfficial;
    }

    public function getStickerFormat(): StickerFormat
    {
        return $this->stickerFormat;
    }

    public function getStickerType(): StickerType
    {
        return $this->stickerType;
    }

    public function getIsViewed(): bool
    {
        return $this->isViewed;
    }

    public function getStickers(): array
    {
        return $this->stickers;
    }

    public function getEmojis(): array
    {
        return $this->emojis;
    }
}
