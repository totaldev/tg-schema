<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Audio;

use Totaldev\TgSchema\File\File;
use Totaldev\TgSchema\Minithumbnail\Minithumbnail;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Thumbnail\Thumbnail;

/**
 * Describes an audio file. Audio is usually in MP3 or M4A format
 */
class Audio extends TdObject
{
    public const TYPE_NAME = 'audio';

    /**
     * Duration of the audio, in seconds; as defined by the sender
     *
     * @var int
     */
    protected int $duration;

    /**
     * Title of the audio; as defined by the sender
     *
     * @var string
     */
    protected string $title;

    /**
     * Performer of the audio; as defined by the sender
     *
     * @var string
     */
    protected string $performer;

    /**
     * Original name of the file; as defined by the sender
     *
     * @var string
     */
    protected string $fileName;

    /**
     * The MIME type of the file; as defined by the sender
     *
     * @var string
     */
    protected string $mimeType;

    /**
     * The minithumbnail of the album cover; may be null
     *
     * @var Minithumbnail|null
     */
    protected ?Minithumbnail $albumCoverMinithumbnail;

    /**
     * The thumbnail of the album cover in JPEG format; as defined by the sender. The full size thumbnail is supposed to be extracted from the downloaded audio file; may be null
     *
     * @var Thumbnail|null
     */
    protected ?Thumbnail $albumCoverThumbnail;

    /**
     * Album cover variants to use if the downloaded audio file contains no album cover. Provided thumbnail dimensions are approximate
     *
     * @var Thumbnail[]
     */
    protected array $externalAlbumCovers;

    /**
     * File containing the audio
     *
     * @var File
     */
    protected File $audio;

    public function __construct(
        int $duration,
        string $title,
        string $performer,
        string $fileName,
        string $mimeType,
        ?Minithumbnail $albumCoverMinithumbnail,
        ?Thumbnail $albumCoverThumbnail,
        array $externalAlbumCovers,
        File $audio,
    ) {
        $this->duration = $duration;
        $this->title = $title;
        $this->performer = $performer;
        $this->fileName = $fileName;
        $this->mimeType = $mimeType;
        $this->albumCoverMinithumbnail = $albumCoverMinithumbnail;
        $this->albumCoverThumbnail = $albumCoverThumbnail;
        $this->externalAlbumCovers = $externalAlbumCovers;
        $this->audio = $audio;
    }

    public static function fromArray(array $array): Audio
    {
        return new static(
            $array['duration'],
            $array['title'],
            $array['performer'],
            $array['file_name'],
            $array['mime_type'],
            (isset($array['album_cover_minithumbnail']) ? TdSchemaRegistry::fromArray($array['album_cover_minithumbnail']) : null),
            (isset($array['album_cover_thumbnail']) ? TdSchemaRegistry::fromArray($array['album_cover_thumbnail']) : null),
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['external_album_covers']),
            TdSchemaRegistry::fromArray($array['audio']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'duration' => $this->duration,
            'title' => $this->title,
            'performer' => $this->performer,
            'file_name' => $this->fileName,
            'mime_type' => $this->mimeType,
            'album_cover_minithumbnail' => (isset($this->albumCoverMinithumbnail) ? $this->albumCoverMinithumbnail : null),
            'album_cover_thumbnail' => (isset($this->albumCoverThumbnail) ? $this->albumCoverThumbnail : null),
            array_map(fn($x) => $x->typeSerialize(), $this->externalAlbumCovers),
            'audio' => $this->audio->typeSerialize(),
        ];
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getPerformer(): string
    {
        return $this->performer;
    }

    public function getFileName(): string
    {
        return $this->fileName;
    }

    public function getMimeType(): string
    {
        return $this->mimeType;
    }

    public function getAlbumCoverMinithumbnail(): ?Minithumbnail
    {
        return $this->albumCoverMinithumbnail;
    }

    public function getAlbumCoverThumbnail(): ?Thumbnail
    {
        return $this->albumCoverThumbnail;
    }

    public function getExternalAlbumCovers(): array
    {
        return $this->externalAlbumCovers;
    }

    public function getAudio(): File
    {
        return $this->audio;
    }
}
