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
         * Unique identifier of the query result.
         */
        protected string              $id,
        /**
         * Title of the audio file.
         */
        protected string              $title,
        /**
         * Performer of the audio file.
         */
        protected string              $performer,
        /**
         * The URL of the audio file.
         */
        protected string              $audioUrl,
        /**
         * Audio file duration, in seconds.
         */
        protected int                 $audioDuration,
        /**
         * The content of the message to be sent. Must be one of the following types: inputMessageText, inputMessageAudio, inputMessageInvoice, inputMessageLocation, inputMessageVenue or inputMessageContact.
         */
        protected InputMessageContent $inputMessageContent,
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
            $array['id'],
            $array['title'],
            $array['performer'],
            $array['audio_url'],
            $array['audio_duration'],
            isset($array['reply_markup']) ? TdSchemaRegistry::fromArray($array['reply_markup']) : null,
            TdSchemaRegistry::fromArray($array['input_message_content']),
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
            'id'                    => $this->id,
            'title'                 => $this->title,
            'performer'             => $this->performer,
            'audio_url'             => $this->audioUrl,
            'audio_duration'        => $this->audioDuration,
            'reply_markup'          => $this->replyMarkup ?? null,
            'input_message_content' => $this->inputMessageContent->typeSerialize(),
        ];
    }
}
