<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A media album
 */
class PushMessageContentMediaAlbum extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentMediaAlbum';

    /**
     * True, if the album has at least one audio file
     *
     * @var bool
     */
    protected bool $hasAudios;

    /**
     * True, if the album has at least one document
     *
     * @var bool
     */
    protected bool $hasDocuments;

    /**
     * True, if the album has at least one photo
     *
     * @var bool
     */
    protected bool $hasPhotos;

    /**
     * True, if the album has at least one video file
     *
     * @var bool
     */
    protected bool $hasVideos;

    /**
     * Number of messages in the album
     *
     * @var int
     */
    protected int $totalCount;

    public function __construct(
        int  $totalCount,
        bool $hasPhotos,
        bool $hasVideos,
        bool $hasAudios,
        bool $hasDocuments,
    )
    {
        parent::__construct();

        $this->totalCount = $totalCount;
        $this->hasPhotos = $hasPhotos;
        $this->hasVideos = $hasVideos;
        $this->hasAudios = $hasAudios;
        $this->hasDocuments = $hasDocuments;
    }

    public static function fromArray(array $array): PushMessageContentMediaAlbum
    {
        return new static(
            $array['total_count'],
            $array['has_photos'],
            $array['has_videos'],
            $array['has_audios'],
            $array['has_documents'],
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'total_count' => $this->totalCount,
            'has_photos' => $this->hasPhotos,
            'has_videos' => $this->hasVideos,
            'has_audios' => $this->hasAudios,
            'has_documents' => $this->hasDocuments,
        ];
    }
}
