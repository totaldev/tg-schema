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
    public const string TYPE_NAME = 'replyMarkupShowKeyboard';

    public function __construct(
        /**
         * If non-empty, the placeholder to be shown in the input field when the keyboard is active; 0-64 characters.
         */
        protected string $inputFieldPlaceholder,
        /**
         * True, if the keyboard is expected to always be shown when the ordinary keyboard is hidden.
         */
        protected bool   $isPersistent,
        /**
         * True, if the keyboard must automatically be shown to the current user. For outgoing messages, specify true to show the keyboard only for the mentioned users and for the target user of a reply.
         */
        protected bool   $isPersonal,
        /**
         * True, if the application needs to hide the keyboard after use.
         */
        protected bool   $oneTime,
        /**
         * True, if the application needs to resize the keyboard vertically.
         */
        protected bool   $resizeKeyboard,
        /**
         * A list of rows of bot keyboard buttons.
         *
         * @var KeyboardButton[][]
         */
        protected array  $rows,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ReplyMarkupShowKeyboard
    {
        return new static(
            inputFieldPlaceholder: $array['input_field_placeholder'],
            isPersistent         : $array['is_persistent'],
            isPersonal           : $array['is_personal'],
            oneTime              : $array['one_time'],
            resizeKeyboard       : $array['resize_keyboard'],
            rows                 : array_map(static fn($x) => array_map(static fn($y) => TdSchemaRegistry::fromArray($y), $x), $array['rows']),
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

    public function setInputFieldPlaceholder(string $value): static
    {
        $this->inputFieldPlaceholder = $value;

        return $this;
    }

    public function setIsPersistent(bool $value): static
    {
        $this->isPersistent = $value;

        return $this;
    }

    public function setIsPersonal(bool $value): static
    {
        $this->isPersonal = $value;

        return $this;
    }

    public function setOneTime(bool $value): static
    {
        $this->oneTime = $value;

        return $this;
    }

    public function setResizeKeyboard(bool $value): static
    {
        $this->resizeKeyboard = $value;

        return $this;
    }

    public function setRows(array $value): static
    {
        $this->rows = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'input_field_placeholder' => $this->inputFieldPlaceholder,
            'is_persistent'           => $this->isPersistent,
            'is_personal'             => $this->isPersonal,
            'one_time'                => $this->oneTime,
            'resize_keyboard'         => $this->resizeKeyboard,
            'rows'                    => array_map(static fn($x) => array_map(static fn($y) => $y->jsonSerialize(), $x), $this->rows),
        ];
    }
}
