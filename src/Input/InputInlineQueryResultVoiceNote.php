<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Reply\ReplyMarkup;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a link to an opus-encoded audio file within an OGG container, single channel audio.
 */
class InputInlineQueryResultVoiceNote extends InputInlineQueryResult
{
    public const string TYPE_NAME = 'inputInlineQueryResultVoiceNote';

    public function __construct(
        /**
         * Unique identifier of the query result.
         */
        protected string              $id,
        /**
         * Title of the voice note.
         */
        protected string              $title,
        /**
         * The URL of the voice note file.
         */
        protected string              $voiceNoteUrl,
        /**
         * Duration of the voice note, in seconds.
         */
        protected int                 $voiceNoteDuration,
        /**
         * The content of the message to be sent. Must be one of the following types: inputMessageText, inputMessageVoiceNote, inputMessageInvoice, inputMessageLocation, inputMessageVenue or inputMessageContact.
         */
        protected InputMessageContent $inputMessageContent,
        /**
         * The message reply markup; pass null if none. Must be of type replyMarkupInlineKeyboard or null.
         */
        protected ?ReplyMarkup        $replyMarkup = null,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputInlineQueryResultVoiceNote
    {
        return new static(
            $array['id'],
            $array['title'],
            $array['voice_note_url'],
            $array['voice_note_duration'],
            isset($array['reply_markup']) ? TdSchemaRegistry::fromArray($array['reply_markup']) : null,
            TdSchemaRegistry::fromArray($array['input_message_content']),
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

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getVoiceNoteDuration(): int
    {
        return $this->voiceNoteDuration;
    }

    public function getVoiceNoteUrl(): string
    {
        return $this->voiceNoteUrl;
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

    public function setTitle(string $value): static
    {
        $this->title = $value;

        return $this;
    }

    public function setVoiceNoteDuration(int $value): static
    {
        $this->voiceNoteDuration = $value;

        return $this;
    }

    public function setVoiceNoteUrl(string $value): static
    {
        $this->voiceNoteUrl = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                 => static::TYPE_NAME,
            'id'                    => $this->id,
            'title'                 => $this->title,
            'voice_note_url'        => $this->voiceNoteUrl,
            'voice_note_duration'   => $this->voiceNoteDuration,
            'reply_markup'          => $this->replyMarkup ?? null,
            'input_message_content' => $this->inputMessageContent->typeSerialize(),
        ];
    }
}
