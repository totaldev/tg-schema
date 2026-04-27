<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

/**
 * A dice message.
 */
class InputMessageDice extends InputMessageContent
{
    public const string TYPE_NAME = 'inputMessageDice';

    public function __construct(
        /**
         * True, if the chat message draft must be deleted.
         */
        protected bool   $clearDraft,
        /**
         * Emoji on which the dice throw animation is based.
         */
        protected string $emoji,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputMessageDice
    {
        return new static(
            clearDraft: $array['clear_draft'],
            emoji     : $array['emoji'],
        );
    }

    public function getClearDraft(): bool
    {
        return $this->clearDraft;
    }

    public function getEmoji(): string
    {
        return $this->emoji;
    }

    public function setClearDraft(bool $value): static
    {
        $this->clearDraft = $value;

        return $this;
    }

    public function setEmoji(string $value): static
    {
        $this->emoji = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'clear_draft' => $this->clearDraft,
            'emoji'       => $this->emoji,
        ];
    }
}
