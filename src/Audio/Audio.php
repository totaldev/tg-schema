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
    public const string TYPE_NAME = 'audio';

    public function __construct(
        /**
         * The minithumbnail of the album cover; may be null.
         */
        protected ?Minithumbnail $albumCoverMinithumbnail,
        /**
         * The thumbnail of the album cover in JPEG format; as defined by the sender. The full size thumbnail is expected to be extracted from the downloaded audio file; may be null.
         */
        protected ?Thumbnail     $albumCoverThumbnail,
        /**
         * File containing the audio.
         */
        protected File           $audio,
        /**
         * Duration of the audio, in seconds; as defined by the sender.
         */
        protected int            $duration,
        /**
         * Album cover variants to use if the downloaded audio file contains no album cover. Provided thumbnail dimensions are approximate.
         *
         * @var Thumbnail[]
         */
        protected array          $externalAlbumCovers,
        /**
         * Original name of the file; as defined by the sender.
         */
        protected string         $fileName,
        /**
         * The MIME type of the file; as defined by the sender.
         */
        protected string         $mimeType,
        /**
         * Performer of the audio; as defined by the sender.
         */
        protected string         $performer,
        /**
         * Title of the audio; as defined by the sender.
         */
        protected string         $title,
    ) {}

    public static function fromArray(array $array): Audio
    {
        return new static(
            albumCoverMinithumbnail: (isset($array['album_cover_minithumbnail']) ? TdSchemaRegistry::fromArray($array['album_cover_minithumbnail']) : null),
            albumCoverThumbnail    : (isset($array['album_cover_thumbnail']) ? TdSchemaRegistry::fromArray($array['album_cover_thumbnail']) : null),
            audio                  : TdSchemaRegistry::fromArray($array['audio']),
            duration               : $array['duration'],
            externalAlbumCovers    : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['external_album_covers']),
            fileName               : $array['file_name'],
            mimeType               : $array['mime_type'],
            performer              : $array['performer'],
            title                  : $array['title'],
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

    public function setAlbumCoverMinithumbnail(?Minithumbnail $value): static
    {
        $this->albumCoverMinithumbnail = $value;

        return $this;
    }

    public function setAlbumCoverThumbnail(?Thumbnail $value): static
    {
        $this->albumCoverThumbnail = $value;

        return $this;
    }

    public function setAudio(File $value): static
    {
        $this->audio = $value;

        return $this;
    }

    public function setDuration(int $value): static
    {
        $this->duration = $value;

        return $this;
    }

    public function setExternalAlbumCovers(array $value): static
    {
        $this->externalAlbumCovers = $value;

        return $this;
    }

    public function setFileName(string $value): static
    {
        $this->fileName = $value;

        return $this;
    }

    public function setMimeType(string $value): static
    {
        $this->mimeType = $value;

        return $this;
    }

    public function setPerformer(string $value): static
    {
        $this->performer = $value;

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
            '@type'                     => static::TYPE_NAME,
            'album_cover_minithumbnail' => (null !== $this->albumCoverMinithumbnail ? $this->albumCoverMinithumbnail->jsonSerialize() : null),
            'album_cover_thumbnail'     => (null !== $this->albumCoverThumbnail ? $this->albumCoverThumbnail->jsonSerialize() : null),
            'audio'                     => $this->audio->jsonSerialize(),
            'duration'                  => $this->duration,
            'external_album_covers'     => array_map(static fn($x) => $x->jsonSerialize(), $this->externalAlbumCovers),
            'file_name'                 => $this->fileName,
            'mime_type'                 => $this->mimeType,
            'performer'                 => $this->performer,
            'title'                     => $this->title,
        ];
    }
}
