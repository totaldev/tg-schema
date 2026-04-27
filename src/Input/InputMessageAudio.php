<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * An audio message.
 */
class InputMessageAudio extends InputMessageContent
{
    public const string TYPE_NAME = 'inputMessageAudio';

    public function __construct(
        /**
         * Audio file to be sent.
         */
        protected InputFile       $audio,
        /**
         * Duration of the audio, in seconds; may be replaced by the server.
         */
        protected int             $duration,
        /**
         * Performer of the audio; 0-64 characters, may be replaced by the server.
         */
        protected string          $performer,
        /**
         * Title of the audio; 0-64 characters; may be replaced by the server.
         */
        protected string          $title,
        /**
         * Thumbnail of the cover for the album; pass null to skip thumbnail uploading.
         */
        protected ?InputThumbnail $albumCoverThumbnail = null,
        /**
         * Audio caption; pass null to use an empty caption; 0-getOption("message_caption_length_max") characters.
         */
        protected ?FormattedText  $caption = null,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputMessageAudio
    {
        return new static(
            albumCoverThumbnail: (isset($array['album_cover_thumbnail']) ? TdSchemaRegistry::fromArray($array['album_cover_thumbnail']) : null),
            audio              : TdSchemaRegistry::fromArray($array['audio']),
            caption            : (isset($array['caption']) ? TdSchemaRegistry::fromArray($array['caption']) : null),
            duration           : $array['duration'],
            performer          : $array['performer'],
            title              : $array['title'],
        );
    }

    public function getAlbumCoverThumbnail(): ?InputThumbnail
    {
        return $this->albumCoverThumbnail;
    }

    public function getAudio(): InputFile
    {
        return $this->audio;
    }

    public function getCaption(): ?FormattedText
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

    public function setAlbumCoverThumbnail(?InputThumbnail $value): static
    {
        $this->albumCoverThumbnail = $value;

        return $this;
    }

    public function setAudio(InputFile $value): static
    {
        $this->audio = $value;

        return $this;
    }

    public function setCaption(?FormattedText $value): static
    {
        $this->caption = $value;

        return $this;
    }

    public function setDuration(int $value): static
    {
        $this->duration = $value;

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
            '@type'                 => static::TYPE_NAME,
            'album_cover_thumbnail' => (null !== $this->albumCoverThumbnail ? $this->albumCoverThumbnail->jsonSerialize() : null),
            'audio'                 => $this->audio->jsonSerialize(),
            'caption'               => (null !== $this->caption ? $this->caption->jsonSerialize() : null),
            'duration'              => $this->duration,
            'performer'             => $this->performer,
            'title'                 => $this->title,
        ];
    }
}
