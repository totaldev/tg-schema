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
    public const TYPE_NAME = 'inputMessageDice';

    public function __construct(
        /**
         * Emoji on which the dice throw animation is based.
         */
        protected string $emoji,
        /**
         * True, if the chat message draft must be deleted.
         */
        protected bool   $clearDraft,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputMessageDice
    {
        return new static(
            $array['emoji'],
            $array['clear_draft'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'emoji'       => $this->emoji,
            'clear_draft' => $this->clearDraft,
        ];
    }
}
