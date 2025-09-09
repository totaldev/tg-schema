<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Draft;

use Totaldev\TgSchema\Input\InputMessageContent;
use Totaldev\TgSchema\Input\InputMessageReplyTo;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about a message draft.
 */
class DraftMessage extends TdObject
{
    public const TYPE_NAME = 'draftMessage';

    public function __construct(
        /**
         * Information about the message to be replied; must be of the type inputMessageReplyToMessage; may be null if none.
         */
        protected ?InputMessageReplyTo $replyTo,
        /**
         * Point in time (Unix timestamp) when the draft was created.
         */
        protected int                  $date,
        /**
         * Content of the message draft; must be of the type inputMessageText, inputMessageVideoNote, or inputMessageVoiceNote.
         */
        protected InputMessageContent  $inputMessageText,
        /**
         * Identifier of the effect to apply to the message when it is sent; 0 if none.
         */
        protected int                  $effectId,
    ) {}

    public static function fromArray(array $array): DraftMessage
    {
        return new static(
            isset($array['reply_to']) ? TdSchemaRegistry::fromArray($array['reply_to']) : null,
            $array['date'],
            TdSchemaRegistry::fromArray($array['input_message_text']),
            $array['effect_id'],
        );
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getEffectId(): int
    {
        return $this->effectId;
    }

    public function getInputMessageText(): InputMessageContent
    {
        return $this->inputMessageText;
    }

    public function getReplyTo(): ?InputMessageReplyTo
    {
        return $this->replyTo;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'reply_to'           => $this->replyTo ?? null,
            'date'               => $this->date,
            'input_message_text' => $this->inputMessageText->typeSerialize(),
            'effect_id'          => $this->effectId,
        ];
    }
}
