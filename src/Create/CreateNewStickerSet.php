<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Create;

use Totaldev\TgSchema\Input\InputSticker;
use Totaldev\TgSchema\Sticker\StickerType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Creates a new sticker set. Returns the newly created sticker set.
 */
class CreateNewStickerSet extends TdFunction
{
    public const string TYPE_NAME = 'createNewStickerSet';

    public function __construct(
        /**
         * Sticker set name. Can contain only English letters, digits and underscores. Must end with *"_by_<bot username>"* (*<bot_username>* is case insensitive) for bots; 0-64 characters. If empty, then the name returned by getSuggestedStickerSetName will be used automatically.
         */
        protected string      $name,
        /**
         * Pass true if stickers in the sticker set must be repainted; for custom emoji sticker sets only.
         */
        protected bool        $needsRepainting,
        /**
         * Source of the sticker set; may be empty if unknown.
         */
        protected string      $source,
        /**
         * List of stickers to be added to the set; 1-200 stickers for custom emoji sticker sets, and 1-120 stickers otherwise. For TGS stickers, uploadStickerFile must be used before the sticker is shown.
         *
         * @var InputSticker[]
         */
        protected array       $stickers,
        /**
         * Type of the stickers in the set.
         */
        protected StickerType $stickerType,
        /**
         * Sticker set title; 1-64 characters.
         */
        protected string      $title,
        /**
         * Sticker set owner; ignored for regular users.
         */
        protected int         $userId,
    ) {}

    public static function fromArray(array $array): CreateNewStickerSet
    {
        return new static(
            name           : $array['name'],
            needsRepainting: $array['needs_repainting'],
            source         : $array['source'],
            stickerType    : TdSchemaRegistry::fromArray($array['sticker_type']),
            stickers       : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['stickers']),
            title          : $array['title'],
            userId         : $array['user_id'],
        );
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getNeedsRepainting(): bool
    {
        return $this->needsRepainting;
    }

    public function getSource(): string
    {
        return $this->source;
    }

    public function getStickerType(): StickerType
    {
        return $this->stickerType;
    }

    public function getStickers(): array
    {
        return $this->stickers;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setName(string $value): static
    {
        $this->name = $value;

        return $this;
    }

    public function setNeedsRepainting(bool $value): static
    {
        $this->needsRepainting = $value;

        return $this;
    }

    public function setSource(string $value): static
    {
        $this->source = $value;

        return $this;
    }

    public function setStickerType(StickerType $value): static
    {
        $this->stickerType = $value;

        return $this;
    }

    public function setStickers(array $value): static
    {
        $this->stickers = $value;

        return $this;
    }

    public function setTitle(string $value): static
    {
        $this->title = $value;

        return $this;
    }

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'name'             => $this->name,
            'needs_repainting' => $this->needsRepainting,
            'source'           => $this->source,
            'sticker_type'     => $this->stickerType->jsonSerialize(),
            'stickers'         => array_map(static fn($x) => $x->jsonSerialize(), $this->stickers),
            'title'            => $this->title,
            'user_id'          => $this->userId,
        ];
    }
}
