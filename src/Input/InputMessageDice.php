<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A dice message
 */
class InputMessageDice extends InputMessageContent
{
    public const TYPE_NAME = 'inputMessageDice';

    /**
     * True, if the chat message draft must be deleted
     *
     * @var bool
     */
    protected bool $clearDraft;

    /**
     * Emoji on which the dice throw animation is based
     *
     * @var string
     */
    protected string $emoji;

    public function __construct(string $emoji, bool $clearDraft)
    {
        parent::__construct();

        $this->emoji = $emoji;
        $this->clearDraft = $clearDraft;
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
            '@type' => static::TYPE_NAME,
            'emoji' => $this->emoji,
            'clear_draft' => $this->clearDraft,
        ];
    }
}
