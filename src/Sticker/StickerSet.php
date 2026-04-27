<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Sticker;

use Totaldev\TgSchema\Emojis\Emojis;
use Totaldev\TgSchema\Outline\Outline;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Thumbnail\Thumbnail;

/**
 * Represents a sticker set.
 */
class StickerSet extends TdObject
{
    public const string TYPE_NAME = 'stickerSet';

    public function __construct(
        /**
         * A list of emojis corresponding to the stickers in the same order. The list is only for informational purposes, because a sticker is always sent with a fixed emoji from the corresponding Sticker object.
         *
         * @var Emojis[]
         */
        protected array       $emojis,
        /**
         * Identifier of the sticker set.
         */
        protected int         $id,
        /**
         * True, if stickers in the sticker set are custom emoji that can be used as chat emoji status; for custom emoji sticker sets only.
         */
        protected bool        $isAllowedAsChatEmojiStatus,
        /**
         * True, if the sticker set has been archived. A sticker set can't be installed and archived simultaneously.
         */
        protected bool        $isArchived,
        /**
         * True, if the sticker set has been installed by the current user.
         */
        protected bool        $isInstalled,
        /**
         * True, if the sticker set is official.
         */
        protected bool        $isOfficial,
        /**
         * True, if the sticker set is owned by the current user.
         */
        protected bool        $isOwned,
        /**
         * True for already viewed trending sticker sets.
         */
        protected bool        $isViewed,
        /**
         * Name of the sticker set.
         */
        protected string      $name,
        /**
         * True, if stickers in the sticker set are custom emoji that must be repainted; for custom emoji sticker sets only.
         */
        protected bool        $needsRepainting,
        /**
         * List of stickers in this set.
         *
         * @var Sticker[]
         */
        protected array       $stickers,
        /**
         * Type of the stickers in the set.
         */
        protected StickerType $stickerType,
        /**
         * Sticker set thumbnail in WEBP, TGS, or WEBM format with width and height 100; may be null. The file can be downloaded only before the thumbnail is changed.
         */
        protected ?Thumbnail  $thumbnail,
        /**
         * Sticker set thumbnail's outline; may be null if unknown.
         */
        protected ?Outline    $thumbnailOutline,
        /**
         * Title of the sticker set.
         */
        protected string      $title,
    ) {}

    public static function fromArray(array $array): StickerSet
    {
        return new static(
            emojis                    : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['emojis']),
            id                        : $array['id'],
            isAllowedAsChatEmojiStatus: $array['is_allowed_as_chat_emoji_status'],
            isArchived                : $array['is_archived'],
            isInstalled               : $array['is_installed'],
            isOfficial                : $array['is_official'],
            isOwned                   : $array['is_owned'],
            isViewed                  : $array['is_viewed'],
            name                      : $array['name'],
            needsRepainting           : $array['needs_repainting'],
            stickerType               : TdSchemaRegistry::fromArray($array['sticker_type']),
            stickers                  : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['stickers']),
            thumbnail                 : (isset($array['thumbnail']) ? TdSchemaRegistry::fromArray($array['thumbnail']) : null),
            thumbnailOutline          : (isset($array['thumbnail_outline']) ? TdSchemaRegistry::fromArray($array['thumbnail_outline']) : null),
            title                     : $array['title'],
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

    public function getThumbnailOutline(): ?Outline
    {
        return $this->thumbnailOutline;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setEmojis(array $value): static
    {
        $this->emojis = $value;

        return $this;
    }

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setIsAllowedAsChatEmojiStatus(bool $value): static
    {
        $this->isAllowedAsChatEmojiStatus = $value;

        return $this;
    }

    public function setIsArchived(bool $value): static
    {
        $this->isArchived = $value;

        return $this;
    }

    public function setIsInstalled(bool $value): static
    {
        $this->isInstalled = $value;

        return $this;
    }

    public function setIsOfficial(bool $value): static
    {
        $this->isOfficial = $value;

        return $this;
    }

    public function setIsOwned(bool $value): static
    {
        $this->isOwned = $value;

        return $this;
    }

    public function setIsViewed(bool $value): static
    {
        $this->isViewed = $value;

        return $this;
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

    public function setThumbnail(?Thumbnail $value): static
    {
        $this->thumbnail = $value;

        return $this;
    }

    public function setThumbnailOutline(?Outline $value): static
    {
        $this->thumbnailOutline = $value;

        return $this;
    }

    public function setTitle(string $value): static
    {
        $this->title = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                           => static::TYPE_NAME,
            'emojis'                          => array_map(static fn($x) => $x->jsonSerialize(), $this->emojis),
            'id'                              => $this->id,
            'is_allowed_as_chat_emoji_status' => $this->isAllowedAsChatEmojiStatus,
            'is_archived'                     => $this->isArchived,
            'is_installed'                    => $this->isInstalled,
            'is_official'                     => $this->isOfficial,
            'is_owned'                        => $this->isOwned,
            'is_viewed'                       => $this->isViewed,
            'name'                            => $this->name,
            'needs_repainting'                => $this->needsRepainting,
            'sticker_type'                    => $this->stickerType->jsonSerialize(),
            'stickers'                        => array_map(static fn($x) => $x->jsonSerialize(), $this->stickers),
            'thumbnail'                       => (null !== $this->thumbnail ? $this->thumbnail->jsonSerialize() : null),
            'thumbnail_outline'               => (null !== $this->thumbnailOutline ? $this->thumbnailOutline->jsonSerialize() : null),
            'title'                           => $this->title,
        ];
    }
}
