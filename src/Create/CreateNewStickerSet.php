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
    public const TYPE_NAME = 'createNewStickerSet';

    public function __construct(
        /**
         * Sticker set owner; ignored for regular users.
         */
        protected int         $userId,
        /**
         * Sticker set title; 1-64 characters.
         */
        protected string      $title,
        /**
         * Sticker set name. Can contain only English letters, digits and underscores. Must end with *"_by_<bot username>"* (*<bot_username>* is case insensitive) for bots; 0-64 characters. If empty, then the name returned by getSuggestedStickerSetName will be used automatically.
         */
        protected string      $name,
        /**
         * Type of the stickers in the set.
         */
        protected StickerType $stickerType,
        /**
         * Pass true if stickers in the sticker set must be repainted; for custom emoji sticker sets only.
         */
        protected bool        $needsRepainting,
        /**
         * List of stickers to be added to the set; 1-200 stickers for custom emoji sticker sets, and 1-120 stickers otherwise. For TGS stickers, uploadStickerFile must be used before the sticker is shown.
         *
         * @var InputSticker[]
         */
        protected array       $stickers,
        /**
         * Source of the sticker set; may be empty if unknown.
         */
        protected string      $source,
    ) {}

    public static function fromArray(array $array): CreateNewStickerSet
    {
        return new static(
            $array['user_id'],
            $array['title'],
            $array['name'],
            TdSchemaRegistry::fromArray($array['sticker_type']),
            $array['needs_repainting'],
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['stickers']),
            $array['source'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'user_id'          => $this->userId,
            'title'            => $this->title,
            'name'             => $this->name,
            'sticker_type'     => $this->stickerType->typeSerialize(),
            'needs_repainting' => $this->needsRepainting,
            'stickers'         => array_map(static fn($x) => $x->typeSerialize(), $this->stickers),
            'source'           => $this->source,
        ];
    }
}
