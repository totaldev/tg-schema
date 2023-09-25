<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An audio message
 */
class InputMessageAudio extends InputMessageContent
{
    public const TYPE_NAME = 'inputMessageAudio';

    /**
     * Thumbnail of the cover for the album; pass null to skip thumbnail uploading
     *
     * @var InputThumbnail
     */
    protected InputThumbnail $albumCoverThumbnail;

    /**
     * Audio file to be sent
     *
     * @var InputFile
     */
    protected InputFile $audio;

    /**
     * Audio caption; pass null to use an empty caption; 0-getOption("message_caption_length_max") characters
     *
     * @var FormattedText
     */
    protected FormattedText $caption;

    /**
     * Duration of the audio, in seconds; may be replaced by the server
     *
     * @var int
     */
    protected int $duration;

    /**
     * Performer of the audio; 0-64 characters, may be replaced by the server
     *
     * @var string
     */
    protected string $performer;

    /**
     * Title of the audio; 0-64 characters; may be replaced by the server
     *
     * @var string
     */
    protected string $title;

    public function __construct(
        InputFile      $audio,
        InputThumbnail $albumCoverThumbnail,
        int            $duration,
        string         $title,
        string         $performer,
        FormattedText  $caption,
    )
    {
        parent::__construct();

        $this->audio = $audio;
        $this->albumCoverThumbnail = $albumCoverThumbnail;
        $this->duration = $duration;
        $this->title = $title;
        $this->performer = $performer;
        $this->caption = $caption;
    }

    public static function fromArray(array $array): InputMessageAudio
    {
        return new static(
            TdSchemaRegistry::fromArray($array['audio']),
            TdSchemaRegistry::fromArray($array['album_cover_thumbnail']),
            $array['duration'],
            $array['title'],
            $array['performer'],
            TdSchemaRegistry::fromArray($array['caption']),
        );
    }

    public function getAlbumCoverThumbnail(): InputThumbnail
    {
        return $this->albumCoverThumbnail;
    }

    public function getAudio(): InputFile
    {
        return $this->audio;
    }

    public function getCaption(): FormattedText
    {
        return $this->caption;
    }

    public function getDuration(): int
    {
        return $this->duration;
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
            '@type' => static::TYPE_NAME,
            'audio' => $this->audio->typeSerialize(),
            'album_cover_thumbnail' => $this->albumCoverThumbnail->typeSerialize(),
            'duration' => $this->duration,
            'title' => $this->title,
            'performer' => $this->performer,
            'caption' => $this->caption->typeSerialize(),
        ];
    }
}
