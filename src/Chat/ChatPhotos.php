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
    public const TYPE_NAME = 'chatPhotos';

    public function __construct(
        /**
         * Total number of photos.
         */
        protected int   $totalCount,
        /**
         * List of photos.
         *
         * @var ChatPhoto[]
         */
        protected array $photos
    ) {}

    public static function fromArray(array $array): ChatPhotos
    {
        return new static(
            $array['total_count'],
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['photos']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'total_count' => $this->totalCount,
            array_map(static fn($x) => $x->typeSerialize(), $this->photos),
        ];
    }
}
