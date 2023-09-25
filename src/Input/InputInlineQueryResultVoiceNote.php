<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Reply\ReplyMarkup;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a link to an opus-encoded audio file within an OGG container, single channel audio
 */
class InputInlineQueryResultVoiceNote extends InputInlineQueryResult
{
    public const TYPE_NAME = 'inputInlineQueryResultVoiceNote';

    /**
     * Unique identifier of the query result
     *
     * @var string
     */
    protected string $id;

    /**
     * The content of the message to be sent. Must be one of the following types: inputMessageText, inputMessageVoiceNote, inputMessageInvoice,
     * inputMessageLocation, inputMessageVenue or inputMessageContact
     *
     * @var InputMessageContent
     */
    protected InputMessageContent $inputMessageContent;

    /**
     * The message reply markup; pass null if none. Must be of type replyMarkupInlineKeyboard or null
     *
     * @var ReplyMarkup
     */
    protected ReplyMarkup $replyMarkup;

    /**
     * Title of the voice note
     *
     * @var string
     */
    protected string $title;

    /**
     * Duration of the voice note, in seconds
     *
     * @var int
     */
    protected int $voiceNoteDuration;

    /**
     * The URL of the voice note file
     *
     * @var string
     */
    protected string $voiceNoteUrl;

    public function __construct(
        string              $id,
        string              $title,
        string              $voiceNoteUrl,
        int                 $voiceNoteDuration,
        ReplyMarkup         $replyMarkup,
        InputMessageContent $inputMessageContent,
    )
    {
        parent::__construct();

        $this->id = $id;
        $this->title = $title;
        $this->voiceNoteUrl = $voiceNoteUrl;
        $this->voiceNoteDuration = $voiceNoteDuration;
        $this->replyMarkup = $replyMarkup;
        $this->inputMessageContent = $inputMessageContent;
    }

    public static function fromArray(array $array): InputInlineQueryResultVoiceNote
    {
        return new static(
            $array['id'],
            $array['title'],
            $array['voice_note_url'],
            $array['voice_note_duration'],
            TdSchemaRegistry::fromArray($array['reply_markup']),
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

    public function getReplyMarkup(): ReplyMarkup
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
            'title' => $this->title,
            'voice_note_url' => $this->voiceNoteUrl,
            'voice_note_duration' => $this->voiceNoteDuration,
            'reply_markup' => $this->replyMarkup->typeSerialize(),
            'input_message_content' => $this->inputMessageContent->typeSerialize(),
        ];
    }
}
