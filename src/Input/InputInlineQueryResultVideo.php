<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Reply\ReplyMarkup;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a link to a page containing an embedded video player or a video file.
 */
class InputInlineQueryResultVideo extends InputInlineQueryResult
{
    public const string TYPE_NAME = 'inputInlineQueryResultVideo';

    public function __construct(
        /**
         * A short description of the result, if known.
         */
        protected string              $description,
        /**
         * Unique identifier of the query result.
         */
        protected string              $id,
        /**
         * The content of the message to be sent. Must be one of the following types: inputMessageText, inputMessageVideo, inputMessageInvoice, inputMessageLocation, inputMessageVenue or inputMessageContact.
         */
        protected InputMessageContent $inputMessageContent,
        /**
         * MIME type of the content of the video URL, only "text/html" or "video/mp4" are currently supported.
         */
        protected string              $mimeType,
        /**
         * The URL of the video thumbnail (JPEG), if it exists.
         */
        protected string              $thumbnailUrl,
        /**
         * Title of the result.
         */
        protected string              $title,
        /**
         * Video duration, in seconds.
         */
        protected int                 $videoDuration,
        /**
         * Height of the video.
         */
        protected int                 $videoHeight,
        /**
         * URL of the embedded video player or video file.
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

    public static function fromArray(array $array): InputInlineQueryResultVideo
    {
        return new static(
            description        : $array['description'],
            id                 : $array['id'],
            inputMessageContent: TdSchemaRegistry::fromArray($array['input_message_content']),
            mimeType           : $array['mime_type'],
            replyMarkup        : (isset($array['reply_markup']) ? TdSchemaRegistry::fromArray($array['reply_markup']) : null),
            thumbnailUrl       : $array['thumbnail_url'],
            title              : $array['title'],
            videoDuration      : $array['video_duration'],
            videoHeight        : $array['video_height'],
            videoUrl           : $array['video_url'],
            videoWidth         : $array['video_width'],
        );
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getInputMessageContent(): InputMessageContent
    {
        return $this->inputMessageContent;
    }

    public function getMimeType(): string
    {
        return $this->mimeType;
    }

    public function getReplyMarkup(): ?ReplyMarkup
    {
        return $this->replyMarkup;
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

    public function getVideoUrl(): string
    {
        return $this->videoUrl;
    }

    public function getVideoWidth(): int
    {
        return $this->videoWidth;
    }

    public function setDescription(string $value): static
    {
        $this->description = $value;

        return $this;
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

    public function setMimeType(string $value): static
    {
        $this->mimeType = $value;

        return $this;
    }

    public function setReplyMarkup(?ReplyMarkup $value): static
    {
        $this->replyMarkup = $value;

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
            'description'           => $this->description,
            'id'                    => $this->id,
            'input_message_content' => $this->inputMessageContent->jsonSerialize(),
            'mime_type'             => $this->mimeType,
            'reply_markup'          => (null !== $this->replyMarkup ? $this->replyMarkup->jsonSerialize() : null),
            'thumbnail_url'         => $this->thumbnailUrl,
            'title'                 => $this->title,
            'video_duration'        => $this->videoDuration,
            'video_height'          => $this->videoHeight,
            'video_url'             => $this->videoUrl,
            'video_width'           => $this->videoWidth,
        ];
    }
}
