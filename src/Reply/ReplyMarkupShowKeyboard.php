<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Reply;

use Totaldev\TgSchema\Keyboard\KeyboardButton;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a custom keyboard layout to quickly reply to bots.
 */
class ReplyMarkupShowKeyboard extends ReplyMarkup
{
    public const TYPE_NAME = 'replyMarkupShowKeyboard';

    public function __construct(
        /**
         * A list of rows of bot keyboard buttons.
         *
         * @var KeyboardButton[][]
         */
        protected array  $rows,
        /**
         * True, if the keyboard is supposed to always be shown when the ordinary keyboard is hidden.
         */
        protected bool   $isPersistent,
        /**
         * True, if the application needs to resize the keyboard vertically.
         */
        protected bool   $resizeKeyboard,
        /**
         * True, if the application needs to hide the keyboard after use.
         */
        protected bool   $oneTime,
        /**
         * True, if the keyboard must automatically be shown to the current user. For outgoing messages, specify true to show the keyboard only for the mentioned users and for the target user of a reply.
         */
        protected bool   $isPersonal,
        /**
         * If non-empty, the placeholder to be shown in the input field when the keyboard is active; 0-64 characters.
         */
        protected string $inputFieldPlaceholder,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ReplyMarkupShowKeyboard
    {
        return new static(
            array_map(fn($x) => array_map(fn($y) => TdSchemaRegistry::fromArray($y), $x), $array['rows']),
            $array['is_persistent'],
            $array['resize_keyboard'],
            $array['one_time'],
            $array['is_personal'],
            $array['input_field_placeholder'],
        );
    }

    public function getInputFieldPlaceholder(): string
    {
        return $this->inputFieldPlaceholder;
    }

    public function getIsPersistent(): bool
    {
        return $this->isPersistent;
    }

    public function getIsPersonal(): bool
    {
        return $this->isPersonal;
    }

    public function getOneTime(): bool
    {
        return $this->oneTime;
    }

    public function getResizeKeyboard(): bool
    {
        return $this->resizeKeyboard;
    }

    public function getRows(): array
    {
        return $this->rows;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            array_map(fn($x) => array_map(fn($y) => $y->typeSerialize(), $x), $this->rows),
            'is_persistent'           => $this->isPersistent,
            'resize_keyboard'         => $this->resizeKeyboard,
            'one_time'                => $this->oneTime,
            'is_personal'             => $this->isPersonal,
            'input_field_placeholder' => $this->inputFieldPlaceholder,
        ];
    }
}
