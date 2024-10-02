<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Sticker;

use Totaldev\TgSchema\Closed\ClosedVectorPath;
use Totaldev\TgSchema\Emojis\Emojis;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Thumbnail\Thumbnail;

/**
 * Represents a sticker set.
 */
class StickerSet extends TdObject
{
    public const TYPE_NAME = 'stickerSet';

    public function __construct(
        /**
         * Identifier of the sticker set.
         */
        protected int         $id,
        /**
         * Title of the sticker set.
         */
        protected string      $title,
        /**
         * Name of the sticker set.
         */
        protected string      $name,
        /**
         * Sticker set thumbnail in WEBP, TGS, or WEBM format with width and height 100; may be null. The file can be downloaded only before the thumbnail is changed.
         */
        protected ?Thumbnail  $thumbnail,
        /**
         * Sticker set thumbnail's outline represented as a list of closed vector paths; may be empty. The coordinate system origin is in the upper-left corner.
         *
         * @var ClosedVectorPath[]
         */
        protected array       $thumbnailOutline,
        /**
         * True, if the sticker set is owned by the current user.
         */
        protected bool        $isOwned,
        /**
         * True, if the sticker set has been installed by the current user.
         */
        protected bool        $isInstalled,
        /**
         * True, if the sticker set has been archived. A sticker set can't be installed and archived simultaneously.
         */
        protected bool        $isArchived,
        /**
         * True, if the sticker set is official.
         */
        protected bool        $isOfficial,
        /**
         * Type of the stickers in the set.
         */
        protected StickerType $stickerType,
        /**
         * True, if stickers in the sticker set are custom emoji that must be repainted; for custom emoji sticker sets only.
         */
        protected bool        $needsRepainting,
        /**
         * True, if stickers in the sticker set are custom emoji that can be used as chat emoji status; for custom emoji sticker sets only.
         */
        protected bool        $isAllowedAsChatEmojiStatus,
        /**
         * True for already viewed trending sticker sets.
         */
        protected bool        $isViewed,
        /**
         * List of stickers in this set.
         *
         * @var Sticker[]
         */
        protected array       $stickers,
        /**
         * A list of emojis corresponding to the stickers in the same order. The list is only for informational purposes, because a sticker is always sent with a fixed emoji from the corresponding Sticker object.
         *
         * @var Emojis[]
         */
        protected array       $emojis,
    ) {}

    public static function fromArray(array $array): StickerSet
    {
        return new static(
            $array['id'],
            $array['title'],
            $array['name'],
            isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null,
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['thumbnail_outline']),
            $array['is_owned'],
            $array['is_installed'],
            $array['is_archived'],
            $array['is_official'],
            TdSchemaRegistry::fromArray($array['sticker_type']),
            $array['needs_repainting'],
            $array['is_allowed_as_chat_emoji_status'],
            $array['is_viewed'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['stickers']),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['emojis']),
        );
    }

    public function getEmojis(): array
    {
        return $this->emojis;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getIsAllowedAsChatEmojiStatus(): bool
    {
        return $this->isAllowedAsChatEmojiStatus;
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

    public function getIsOwned(): bool
    {
        return $this->isOwned;
    }

    public function getIsViewed(): bool
    {
        return $this->isViewed;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getNeedsRepainting(): bool
    {
        return $this->needsRepainting;
    }

    public function getStickerType(): StickerType
    {
        return $this->stickerType;
    }

    public function getStickers(): array
    {
        return $this->stickers;
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
            '@type'                           => static::TYPE_NAME,
            'id'                              => $this->id,
            'title'                           => $this->title,
            'name'                            => $this->name,
            'thumbnail'                       => (isset($this->thumbnail) ? $this->thumbnail : null),
            array_map(fn($x) => $x->typeSerialize(), $this->thumbnailOutline),
            'is_owned'                        => $this->isOwned,
            'is_installed'                    => $this->isInstalled,
            'is_archived'                     => $this->isArchived,
            'is_official'                     => $this->isOfficial,
            'sticker_type'                    => $this->stickerType->typeSerialize(),
            'needs_repainting'                => $this->needsRepainting,
            'is_allowed_as_chat_emoji_status' => $this->isAllowedAsChatEmojiStatus,
            'is_viewed'                       => $this->isViewed,
            array_map(fn($x) => $x->typeSerialize(), $this->stickers),
            array_map(fn($x) => $x->typeSerialize(), $this->emojis),
        ];
    }
}
