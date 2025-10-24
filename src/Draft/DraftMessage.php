<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Draft;

use Totaldev\TgSchema\Input\InputMessageContent;
use Totaldev\TgSchema\Input\InputMessageReplyTo;
use Totaldev\TgSchema\Input\InputSuggestedPostInfo;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about a message draft.
 */
class DraftMessage extends TdObject
{
    public const string TYPE_NAME = 'draftMessage';

    public function __construct(
        /**
         * Information about the message to be replied; inputMessageReplyToStory is unsupported; may be null if none.
         */
        protected ?InputMessageReplyTo    $replyTo,
        /**
         * Point in time (Unix timestamp) when the draft was created.
         */
        protected int                     $date,
        /**
         * Content of the message draft; must be of the type inputMessageText, inputMessageVideoNote, or inputMessageVoiceNote.
         */
        protected InputMessageContent     $inputMessageText,
        /**
         * Identifier of the effect to apply to the message when it is sent; 0 if none.
         */
        protected int                     $effectId,
        /**
         * Information about the suggested post; may be null if none.
         */
        protected ?InputSuggestedPostInfo $suggestedPostInfo,
    ) {}

    public static function fromArray(array $array): DraftMessage
    {
        return new static(
            isset($array['reply_to']) ? TdSchemaRegistry::fromArray($array['reply_to']) : null,
            $array['date'],
            TdSchemaRegistry::fromArray($array['input_message_text']),
            $array['effect_id'],
            isset($array['suggested_post_info']) ? TdSchemaRegistry::fromArray($array['suggested_post_info']) : null,
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

    public function getSuggestedPostInfo(): ?InputSuggestedPostInfo
    {
        return $this->suggestedPostInfo;
    }

    public function setDate(int $value): static
    {
        $this->date = $value;

        return $this;
    }

    public function setEffectId(int $value): static
    {
        $this->effectId = $value;

        return $this;
    }

    public function setInputMessageText(InputMessageContent $value): static
    {
        $this->inputMessageText = $value;

        return $this;
    }

    public function setReplyTo(?InputMessageReplyTo $value): static
    {
        $this->replyTo = $value;

        return $this;
    }

    public function setSuggestedPostInfo(?InputSuggestedPostInfo $value): static
    {
        $this->suggestedPostInfo = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'reply_to'            => $this->replyTo ?? null,
            'date'                => $this->date,
            'input_message_text'  => $this->inputMessageText->typeSerialize(),
            'effect_id'           => $this->effectId,
            'suggested_post_info' => $this->suggestedPostInfo ?? null,
        ];
    }
}
