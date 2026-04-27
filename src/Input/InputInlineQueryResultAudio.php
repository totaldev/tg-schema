<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Reply\ReplyMarkup;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a link to an MP3 audio file.
 */
class InputInlineQueryResultAudio extends InputInlineQueryResult
{
    public const string TYPE_NAME = 'inputInlineQueryResultAudio';

    public function __construct(
        /**
         * Audio file duration, in seconds.
         */
        protected int                 $audioDuration,
        /**
         * The URL of the audio file.
         */
        protected string              $audioUrl,
        /**
         * Unique identifier of the query result.
         */
        protected string              $id,
        /**
         * The content of the message to be sent. Must be one of the following types: inputMessageText, inputMessageAudio, inputMessageInvoice, inputMessageLocation, inputMessageVenue or inputMessageContact.
         */
        protected InputMessageContent $inputMessageContent,
        /**
         * Performer of the audio file.
         */
        protected string              $performer,
        /**
         * Title of the audio file.
         */
        protected string              $title,
        /**
         * The message reply markup; pass null if none. Must be of type replyMarkupInlineKeyboard or null.
         */
        protected ?ReplyMarkup        $replyMarkup = null,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputInlineQueryResultAudio
    {
        return new static(
            audioDuration      : $array['audio_duration'],
            audioUrl           : $array['audio_url'],
            id                 : $array['id'],
            inputMessageContent: TdSchemaRegistry::fromArray($array['input_message_content']),
            performer          : $array['performer'],
            replyMarkup        : (isset($array['reply_markup']) ? TdSchemaRegistry::fromArray($array['reply_markup']) : null),
            title              : $array['title'],
        );
    }

    public function getAudioDuration(): int
    {
        return $this->audioDuration;
    }

    public function getAudioUrl(): string
    {
        return $this->audioUrl;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getInputMessageContent(): InputMessageContent
    {
        return $this->inputMessageContent;
    }

    public function getPerformer(): string
    {
        return $this->performer;
    }

    public function getReplyMarkup(): ?ReplyMarkup
    {
        return $this->replyMarkup;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setAudioDuration(int $value): static
    {
        $this->audioDuration = $value;

        return $this;
    }

    public function setAudioUrl(string $value): static
    {
        $this->audioUrl = $value;

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

    public function setPerformer(string $value): static
    {
        $this->performer = $value;

        return $this;
    }

    public function setReplyMarkup(?ReplyMarkup $value): static
    {
        $this->replyMarkup = $value;

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
            'audio_duration'        => $this->audioDuration,
            'audio_url'             => $this->audioUrl,
            'id'                    => $this->id,
            'input_message_content' => $this->inputMessageContent->jsonSerialize(),
            'performer'             => $this->performer,
            'reply_markup'          => (null !== $this->replyMarkup ? $this->replyMarkup->jsonSerialize() : null),
            'title'                 => $this->title,
        ];
    }
}
