<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Dice\DiceStickers;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A dice message. The dice value is randomly generated by the server.
 */
class MessageDice extends MessageContent
{
    public const TYPE_NAME = 'messageDice';

    public function __construct(
        /**
         * The animated stickers with the initial dice animation; may be null if unknown. The update updateMessageContent will be sent when the sticker became known.
         */
        protected ?DiceStickers $initialState,
        /**
         * The animated stickers with the final dice animation; may be null if unknown. The update updateMessageContent will be sent when the sticker became known.
         */
        protected ?DiceStickers $finalState,
        /**
         * Emoji on which the dice throw animation is based.
         */
        protected string        $emoji,
        /**
         * The dice value. If the value is 0, the dice don't have final state yet.
         */
        protected int           $value,
        /**
         * Number of frame after which a success animation like a shower of confetti needs to be shown on updateMessageSendSucceeded.
         */
        protected int           $successAnimationFrameNumber,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageDice
    {
        return new static(
            isset($array['initial_state']) ? TdSchemaRegistry::fromArray($array['initial_state']) : null,
            isset($array['final_state']) ? TdSchemaRegistry::fromArray($array['final_state']) : null,
            $array['emoji'],
            $array['value'],
            $array['success_animation_frame_number'],
        );
    }

    public function getEmoji(): string
    {
        return $this->emoji;
    }

    public function getFinalState(): ?DiceStickers
    {
        return $this->finalState;
    }

    public function getInitialState(): ?DiceStickers
    {
        return $this->initialState;
    }

    public function getSuccessAnimationFrameNumber(): int
    {
        return $this->successAnimationFrameNumber;
    }

    public function getValue(): int
    {
        return $this->value;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                          => static::TYPE_NAME,
            'initial_state'                  => (isset($this->initialState) ? $this->initialState : null),
            'final_state'                    => (isset($this->finalState) ? $this->finalState : null),
            'emoji'                          => $this->emoji,
            'value'                          => $this->value,
            'success_animation_frame_number' => $this->successAnimationFrameNumber,
        ];
    }
}
