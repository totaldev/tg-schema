<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Inline;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a single button in an inline keyboard.
 */
class InlineKeyboardButton extends TdObject
{
    public const string TYPE_NAME = 'inlineKeyboardButton';

    public function __construct(
        /**
         * Text of the button.
         */
        protected string                   $text,
        /**
         * Type of the button.
         */
        protected InlineKeyboardButtonType $type,
    ) {}

    public static function fromArray(array $array): InlineKeyboardButton
    {
        return new static(
            text: $array['text'],
            type: TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getType(): InlineKeyboardButtonType
    {
        return $this->type;
    }

    public function setText(string $value): static
    {
        $this->text = $value;

        return $this;
    }

    public function setType(InlineKeyboardButtonType $value): static
    {
        $this->type = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'text'  => $this->text,
            'type'  => $this->type->jsonSerialize(),
        ];
    }
}
