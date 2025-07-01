<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Audio;

use Totaldev\TgSchema\File\File;
use Totaldev\TgSchema\Minithumbnail\Minithumbnail;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Thumbnail\Thumbnail;

/**
 * Describes an audio file. Audio is usually in MP3 or M4A format.
 */
class Audio extends TdObject
{
    public const TYPE_NAME = 'audio';

    public function __construct(
        /**
         * Duration of the audio, in seconds; as defined by the sender.
         */
        protected int            $duration,
        /**
         * Title of the audio; as defined by the sender.
         */
        protected string         $title,
        /**
         * Performer of the audio; as defined by the sender.
         */
        protected string         $performer,
        /**
         * Original name of the file; as defined by the sender.
         */
        protected string         $fileName,
        /**
         * The MIME type of the file; as defined by the sender.
         */
        protected string         $mimeType,
        /**
         * The minithumbnail of the album cover; may be null.
         */
        protected ?Minithumbnail $albumCoverMinithumbnail,
        /**
         * The thumbnail of the album cover in JPEG format; as defined by the sender. The full size thumbnail is expected to be extracted from the downloaded audio file; may be null.
         */
        protected ?Thumbnail     $albumCoverThumbnail,
        /**
         * Album cover variants to use if the downloaded audio file contains no album cover. Provided thumbnail dimensions are approximate.
         *
         * @var Thumbnail[]
         */
        protected array          $externalAlbumCovers,
        /**
         * File containing the audio.
         */
        protected File           $audio,
    ) {}

    public static function fromArray(array $array): Audio
    {
        return new static(
            $array['duration'],
            $array['title'],
            $array['performer'],
            $array['file_name'],
            $array['mime_type'],
            isset($array['album_cover_minithumbnail']) ? TdSchemaRegistry::fromArray($array['album_cover_minithumbnail']) : null,
            isset($array['album_cover_thumbnail']) ? TdSchemaRegistry::fromArray($array['album_cover_thumbnail']) : null,
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['external_album_covers']),
            TdSchemaRegistry::fromArray($array['audio']),
        );
    }

    public function getAlbumCoverMinithumbnail(): ?Minithumbnail
    {
        return $this->albumCoverMinithumbnail;
    }

    public function getAlbumCoverThumbnail(): ?Thumbnail
    {
        return $this->albumCoverThumbnail;
    }

    public function getAudio(): File
    {
        return $this->audio;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getExternalAlbumCovers(): array
    {
        return $this->externalAlbumCovers;
    }

    public function getFileName(): string
    {
        return $this->fileName;
    }

    public function getMimeType(): string
    {
        return $this->mimeType;
    }

    public function getPerformer(): string
    {
        return $this->performer;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                     => static::TYPE_NAME,
            'duration'                  => $this->duration,
            'title'                     => $this->title,
            'performer'                 => $this->performer,
            'file_name'                 => $this->fileName,
            'mime_type'                 => $this->mimeType,
            'album_cover_minithumbnail' => $this->albumCoverMinithumbnail ?? null,
            'album_cover_thumbnail'     => $this->albumCoverThumbnail ?? null,
            'external_album_covers'     => array_map(static fn($x) => $x->typeSerialize(), $this->externalAlbumCovers),
            'audio'                     => $this->audio->typeSerialize(),
        ];
    }
}
