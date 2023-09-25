<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Sticker;

use Totaldev\TgSchema\Closed\ClosedVectorPath;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Thumbnail\Thumbnail;

/**
 * Represents short information about a sticker set
 */
class StickerSetInfo extends TdObject
{
    public const TYPE_NAME = 'stickerSetInfo';

    /**
     * Up to the first 5 stickers from the set, depending on the context. If the application needs more stickers the full sticker set needs to be requested
     *
     * @var Sticker[]
     */
    protected array $covers;

    /**
     * Identifier of the sticker set
     *
     * @var int
     */
    protected int $id;

    /**
     * True, if the sticker set has been archived. A sticker set can't be installed and archived simultaneously
     *
     * @var bool
     */
    protected bool $isArchived;

    /**
     * True, if the sticker set has been installed by the current user
     *
     * @var bool
     */
    protected bool $isInstalled;

    /**
     * True, if the sticker set is official
     *
     * @var bool
     */
    protected bool $isOfficial;

    /**
     * True for already viewed trending sticker sets
     *
     * @var bool
     */
    protected bool $isViewed;

    /**
     * Name of the sticker set
     *
     * @var string
     */
    protected string $name;

    /**
     * Total number of stickers in the set
     *
     * @var int
     */
    protected int $size;

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
     * Sticker set thumbnail in WEBP, TGS, or WEBM format with width and height 100; may be null
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
     * Title of the sticker set
     *
     * @var string
     */
    protected string $title;

    public function __construct(
        int           $id,
        string        $title,
        string        $name,
        ?Thumbnail    $thumbnail,
        array         $thumbnailOutline,
        bool          $isInstalled,
        bool          $isArchived,
        bool          $isOfficial,
        StickerFormat $stickerFormat,
        StickerType   $stickerType,
        bool          $isViewed,
        int           $size,
        array         $covers,
    )
    {
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
        $this->size = $size;
        $this->covers = $covers;
    }

    public static function fromArray(array $array): StickerSetInfo
    {
        return new static(
            $array['id'],
            $array['title'],
            $array['name'],
            (isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['thumbnail_outline']),
            $array['is_installed'],
            $array['is_archived'],
            $array['is_official'],
            TdSchemaRegistry::fromArray($array['sticker_format']),
            TdSchemaRegistry::fromArray($array['sticker_type']),
            $array['is_viewed'],
            $array['size'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['covers']),
        );
    }

    public function getCovers(): array
    {
        return $this->covers;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getIsArchived(): bool
    {
        return $this->isArchived;
    }

    public function getIsInstalled(): bool
    {
        return $this->isInstalled;
    }

    public function getIsOfficial(): bool
    {
        return $this->isOfficial;
    }

    public function getIsViewed(): bool
    {
        return $this->isViewed;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function getStickerFormat(): StickerFormat
    {
        return $this->stickerFormat;
    }

    public function getStickerType(): StickerType
    {
        return $this->stickerType;
    }

    public function getThumbnail(): ?Thumbnail
    {
        return $this->thumbnail;
    }

    public function getThumbnailOutline(): array
    {
        return $this->thumbnailOutline;
    }

    public function getTitle(): string
    {
        return $this->title;
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
            'size' => $this->size,
            array_map(fn($x) => $x->typeSerialize(), $this->covers),
        ];
    }
}
