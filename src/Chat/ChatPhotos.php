<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Chat;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of chat or user profile photos.
 */
class ChatPhotos extends TdObject
{
    public const string TYPE_NAME = 'chatPhotos';

    public function __construct(
        /**
         * List of photos.
         *
         * @var ChatPhoto[]
         */
        protected array $photos,
        /**
         * Total number of photos.
         */
        protected int   $totalCount,
    ) {}

    public static function fromArray(array $array): ChatPhotos
    {
        return new static(
            photos    : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['photos']),
            totalCount: $array['total_count'],
        );
    }

    public function getPhotos(): array
    {
        return $this->photos;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function setPhotos(array $value): static
    {
        $this->photos = $value;

        return $this;
    }

    public function setTotalCount(int $value): static
    {
        $this->totalCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'photos'      => array_map(static fn($x) => $x->jsonSerialize(), $this->photos),
            'total_count' => $this->totalCount,
        ];
    }
}
