<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Reply\ReplyMarkup;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a link to an animated GIF or an animated (i.e., without sound) H.264/MPEG-4 AVC video.
 */
class InputInlineQueryResultAnimation extends InputInlineQueryResult
{
    public const string TYPE_NAME = 'inputInlineQueryResultAnimation';

    public function __construct(
        /**
         * Unique identifier of the query result.
         */
        protected string              $id,
        /**
         * The content of the message to be sent. Must be one of the following types: inputMessageText, inputMessageAnimation, inputMessageInvoice, inputMessageLocation, inputMessageVenue or inputMessageContact.
         */
        protected InputMessageContent $inputMessageContent,
        /**
         * MIME type of the video thumbnail. If non-empty, must be one of "image/jpeg", "image/gif" and "video/mp4".
         */
        protected string              $thumbnailMimeType,
        /**
         * URL of the result thumbnail (JPEG, GIF, or MPEG4), if it exists.
         */
        protected string              $thumbnailUrl,
        /**
         * Title of the query result.
         */
        protected string              $title,
        /**
         * Duration of the video, in seconds.
         */
        protected int                 $videoDuration,
        /**
         * Height of the video.
         */
        protected int                 $videoHeight,
        /**
         * MIME type of the video file. Must be one of "image/gif" and "video/mp4".
         */
        protected string              $videoMimeType,
        /**
         * The URL of the video file (file size must not exceed 1MB).
         */
        protected string              $videoUrl,
        /**
         * Width of the video.
         */
        protected int                 $videoWidth,
        /**
         * The message reply markup; pass null if none. Must be of type replyMarkupInlineKeyboard or null.
         */
        protected ?ReplyMarkup        $replyMarkup = null,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputInlineQueryResultAnimation
    {
        return new static(
            id                 : $array['id'],
            inputMessageContent: TdSchemaRegistry::fromArray($array['input_message_content']),
            replyMarkup        : (isset($array['reply_markup']) ? TdSchemaRegistry::fromArray($array['reply_markup']) : null),
            thumbnailMimeType  : $array['thumbnail_mime_type'],
            thumbnailUrl       : $array['thumbnail_url'],
            title              : $array['title'],
            videoDuration      : $array['video_duration'],
            videoHeight        : $array['video_height'],
            videoMimeType      : $array['video_mime_type'],
            videoUrl           : $array['video_url'],
            videoWidth         : $array['video_width'],
        );
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getInputMessageContent(): InputMessageContent
    {
        return $this->inputMessageContent;
    }

    public function getReplyMarkup(): ?ReplyMarkup
    {
        return $this->replyMarkup;
    }

    public function getThumbnailMimeType(): string
    {
        return $this->thumbnailMimeType;
    }

    public function getThumbnailUrl(): string
    {
        return $this->thumbnailUrl;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getVideoDuration(): int
    {
        return $this->videoDuration;
    }

    public function getVideoHeight(): int
    {
        return $this->videoHeight;
    }

    public function getVideoMimeType(): string
    {
        return $this->videoMimeType;
    }

    public function getVideoUrl(): string
    {
        return $this->videoUrl;
    }

    public function getVideoWidth(): int
    {
        return $this->videoWidth;
    }

    public function setId(string $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setInputMessageContent(InputMessageContent $value): static
    {
        $this->inputMessageContent = $value;

        return $this;
    }

    public function setReplyMarkup(?ReplyMarkup $value): static
    {
        $this->replyMarkup = $value;

        return $this;
    }

    public function setThumbnailMimeType(string $value): static
    {
        $this->thumbnailMimeType = $value;

        return $this;
    }

    public function setThumbnailUrl(string $value): static
    {
        $this->thumbnailUrl = $value;

        return $this;
    }

    public function setTitle(string $value): static
    {
        $this->title = $value;

        return $this;
    }

    public function setVideoDuration(int $value): static
    {
        $this->videoDuration = $value;

        return $this;
    }

    public function setVideoHeight(int $value): static
    {
        $this->videoHeight = $value;

        return $this;
    }

    public function setVideoMimeType(string $value): static
    {
        $this->videoMimeType = $value;

        return $this;
    }

    public function setVideoUrl(string $value): static
    {
        $this->videoUrl = $value;

        return $this;
    }

    public function setVideoWidth(int $value): static
    {
        $this->videoWidth = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'id'                    => $this->id,
            'input_message_content' => $this->inputMessageContent->jsonSerialize(),
            'reply_markup'          => (null !== $this->replyMarkup ? $this->replyMarkup->jsonSerialize() : null),
            'thumbnail_mime_type'   => $this->thumbnailMimeType,
            'thumbnail_url'         => $this->thumbnailUrl,
            'title'                 => $this->title,
            'video_duration'        => $this->videoDuration,
            'video_height'          => $this->videoHeight,
            'video_mime_type'       => $this->videoMimeType,
            'video_url'             => $this->videoUrl,
            'video_width'           => $this->videoWidth,
        ];
    }
}
