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
         * The content of the message to be sent. Must be one of the following types: inputMessageText, inputMessageVoiceNote, inputMessageInvoice, inputMessageLocation, inputMessageVenue or inputMessageContact.
         */
        protected InputMessageContent $inputMessageContent,
        /**
         * Title of the voice note.
         */
        protected string              $title,
        /**
         * Duration of the voice note, in seconds.
         */
        protected int                 $voiceNoteDuration,
        /**
         * The URL of the voice note file.
         */
        protected string              $voiceNoteUrl,
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
            id                 : $array['id'],
            inputMessageContent: TdSchemaRegistry::fromArray($array['input_message_content']),
            replyMarkup        : (isset($array['reply_markup']) ? TdSchemaRegistry::fromArray($array['reply_markup']) : null),
            title              : $array['title'],
            voiceNoteDuration  : $array['voice_note_duration'],
            voiceNoteUrl       : $array['voice_note_url'],
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
            'input_message_content' => $this->inputMessageContent->jsonSerialize(),
            'reply_markup'          => (null !== $this->replyMarkup ? $this->replyMarkup->jsonSerialize() : null),
            'title'                 => $this->title,
            'voice_note_duration'   => $this->voiceNoteDuration,
            'voice_note_url'        => $this->voiceNoteUrl,
        ];
    }
}
