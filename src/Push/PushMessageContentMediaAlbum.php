<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

/**
 * A media album.
 */
class PushMessageContentMediaAlbum extends PushMessageContent
{
    public const string TYPE_NAME = 'pushMessageContentMediaAlbum';

    public function __construct(
        /**
         * True, if the album has at least one audio file.
         */
        protected bool $hasAudios,
        /**
         * True, if the album has at least one document.
         */
        protected bool $hasDocuments,
        /**
         * True, if the album has at least one photo.
         */
        protected bool $hasPhotos,
        /**
         * True, if the album has at least one video file.
         */
        protected bool $hasVideos,
        /**
         * Number of messages in the album.
         */
        protected int  $totalCount,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentMediaAlbum
    {
        return new static(
            hasAudios   : $array['has_audios'],
            hasDocuments: $array['has_documents'],
            hasPhotos   : $array['has_photos'],
            hasVideos   : $array['has_videos'],
            totalCount  : $array['total_count'],
        );
    }

    public function getHasAudios(): bool
    {
        return $this->hasAudios;
    }

    public function getHasDocuments(): bool
    {
        return $this->hasDocuments;
    }

    public function getHasPhotos(): bool
    {
        return $this->hasPhotos;
    }

    public function getHasVideos(): bool
    {
        return $this->hasVideos;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function setHasAudios(bool $value): static
    {
        $this->hasAudios = $value;

        return $this;
    }

    public function setHasDocuments(bool $value): static
    {
        $this->hasDocuments = $value;

        return $this;
    }

    public function setHasPhotos(bool $value): static
    {
        $this->hasPhotos = $value;

        return $this;
    }

    public function setHasVideos(bool $value): static
    {
        $this->hasVideos = $value;

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
            '@type'         => static::TYPE_NAME,
            'has_audios'    => $this->hasAudios,
            'has_documents' => $this->hasDocuments,
            'has_photos'    => $this->hasPhotos,
            'has_videos'    => $this->hasVideos,
            'total_count'   => $this->totalCount,
        ];
    }
}
