<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Creates a new sticker set. Returns the newly created sticker set
 */
class CreateNewStickerSet extends TdFunction
{
    public const TYPE_NAME = 'createNewStickerSet';

    /**
     * Sticker set owner; ignored for regular users
     *
     * @var int
     */
    protected int $userId;

    /**
     * Sticker set title; 1-64 characters
     *
     * @var string
     */
    protected string $title;

    /**
     * Sticker set name. Can contain only English letters, digits and underscores. Must end with *"_by_<bot username>"* (*<bot_username>* is case insensitive) for bots; 1-64 characters
     *
     * @var string
     */
    protected string $name;

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
     * Pass true if stickers in the sticker set must be repainted; for custom emoji sticker sets only
     *
     * @var bool
     */
    protected bool $needsRepainting;

    /**
     * List of stickers to be added to the set; must be non-empty. All stickers must have the same format. For TGS stickers, uploadStickerFile must be used before the sticker is shown
     *
     * @var InputSticker[]
     */
    protected array $stickers;

    /**
     * Source of the sticker set; may be empty if unknown
     *
     * @var string
     */
    protected string $source;

    public function __construct(
        int $userId,
        string $title,
        string $name,
        StickerFormat $stickerFormat,
        StickerType $stickerType,
        bool $needsRepainting,
        array $stickers,
        string $source
    ) {
        $this->userId = $userId;
        $this->title = $title;
        $this->name = $name;
        $this->stickerFormat = $stickerFormat;
        $this->stickerType = $stickerType;
        $this->needsRepainting = $needsRepainting;
        $this->stickers = $stickers;
        $this->source = $source;
    }

    public static function fromArray(array $array): CreateNewStickerSet
    {
        return new static(
            $array['user_id'],
            $array['title'],
            $array['name'],
            TdSchemaRegistry::fromArray($array['sticker_format']),
            TdSchemaRegistry::fromArray($array['sticker_type']),
            $array['needs_repainting'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['stickers']),
            $array['source'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'user_id' => $this->userId,
            'title' => $this->title,
            'name' => $this->name,
            'sticker_format' => $this->stickerFormat->typeSerialize(),
            'sticker_type' => $this->stickerType->typeSerialize(),
            'needs_repainting' => $this->needsRepainting,
            array_map(fn($x) => $x->typeSerialize(), $this->stickers),
            'source' => $this->source,
        ];
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getStickerFormat(): StickerFormat
    {
        return $this->stickerFormat;
    }

    public function getStickerType(): StickerType
    {
        return $this->stickerType;
    }

    public function getNeedsRepainting(): bool
    {
        return $this->needsRepainting;
    }

    public function getStickers(): array
    {
        return $this->stickers;
    }

    public function getSource(): string
    {
        return $this->source;
    }
}
