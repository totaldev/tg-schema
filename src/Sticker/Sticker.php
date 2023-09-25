<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Sticker;

use Totaldev\TgSchema\Closed\ClosedVectorPath;
use Totaldev\TgSchema\File\File;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Thumbnail\Thumbnail;

/**
 * Describes a sticker
 */
class Sticker extends TdObject
{
    public const TYPE_NAME = 'sticker';

    /**
     * Emoji corresponding to the sticker
     *
     * @var string
     */
    protected string $emoji;

    /**
     * Sticker format
     *
     * @var StickerFormat
     */
    protected StickerFormat $format;

    /**
     * Sticker's full type
     *
     * @var StickerFullType
     */
    protected StickerFullType $fullType;

    /**
     * Sticker height; as defined by the sender
     *
     * @var int
     */
    protected int $height;

    /**
     * Unique sticker identifier within the set; 0 if none
     *
     * @var int
     */
    protected int $id;

    /**
     * Sticker's outline represented as a list of closed vector paths; may be empty. The coordinate system origin is in the upper-left corner
     *
     * @var ClosedVectorPath[]
     */
    protected array $outline;

    /**
     * Identifier of the sticker set to which the sticker belongs; 0 if none
     *
     * @var int
     */
    protected int $setId;

    /**
     * File containing the sticker
     *
     * @var File
     */
    protected File $sticker;

    /**
     * Sticker thumbnail in WEBP or JPEG format; may be null
     *
     * @var Thumbnail|null
     */
    protected ?Thumbnail $thumbnail;

    /**
     * Sticker width; as defined by the sender
     *
     * @var int
     */
    protected int $width;

    public function __construct(
        int             $id,
        int             $setId,
        int             $width,
        int             $height,
        string          $emoji,
        StickerFormat   $format,
        StickerFullType $fullType,
        array           $outline,
        ?Thumbnail      $thumbnail,
        File            $sticker,
    )
    {
        $this->id = $id;
        $this->setId = $setId;
        $this->width = $width;
        $this->height = $height;
        $this->emoji = $emoji;
        $this->format = $format;
        $this->fullType = $fullType;
        $this->outline = $outline;
        $this->thumbnail = $thumbnail;
        $this->sticker = $sticker;
    }

    public static function fromArray(array $array): Sticker
    {
        return new static(
            $array['id'],
            $array['set_id'],
            $array['width'],
            $array['height'],
            $array['emoji'],
            TdSchemaRegistry::fromArray($array['format']),
            TdSchemaRegistry::fromArray($array['full_type']),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['outline']),
            (isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null),
            TdSchemaRegistry::fromArray($array['sticker']),
        );
    }

    public function getEmoji(): string
    {
        return $this->emoji;
    }

    public function getFormat(): StickerFormat
    {
        return $this->format;
    }

    public function getFullType(): StickerFullType
    {
        return $this->fullType;
    }

    public function getHeight(): int
    {
        return $this->height;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getOutline(): array
    {
        return $this->outline;
    }

    public function getSetId(): int
    {
        return $this->setId;
    }

    public function getSticker(): File
    {
        return $this->sticker;
    }

    public function getThumbnail(): ?Thumbnail
    {
        return $this->thumbnail;
    }

    public function getWidth(): int
    {
        return $this->width;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
            'set_id' => $this->setId,
            'width' => $this->width,
            'height' => $this->height,
            'emoji' => $this->emoji,
            'format' => $this->format->typeSerialize(),
            'full_type' => $this->fullType->typeSerialize(),
            array_map(fn($x) => $x->typeSerialize(), $this->outline),
            'thumbnail' => (isset($this->thumbnail) ? $this->thumbnail : null),
            'sticker' => $this->sticker->typeSerialize(),
        ];
    }
}
