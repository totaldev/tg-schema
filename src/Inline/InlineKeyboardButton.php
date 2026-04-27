<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Inline;

use Totaldev\TgSchema\Button\ButtonStyle;
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
         * Identifier of the custom emoji that must be shown on the button; 0 if none.
         */
        protected int                      $iconCustomEmojiId,
        /**
         * Style of the button.
         */
        protected ButtonStyle              $style,
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
            iconCustomEmojiId: $array['icon_custom_emoji_id'],
            style            : TdSchemaRegistry::fromArray($array['style']),
            text             : $array['text'],
            type             : TdSchemaRegistry::fromArray($array['type']),
        );
    }

    public function getIconCustomEmojiId(): int
    {
        return $this->iconCustomEmojiId;
    }

    public function getStyle(): ButtonStyle
    {
        return $this->style;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getType(): InlineKeyboardButtonType
    {
        return $this->type;
    }

    public function setIconCustomEmojiId(int $value): static
    {
        $this->iconCustomEmojiId = $value;

        return $this;
    }

    public function setStyle(ButtonStyle $value): static
    {
        $this->style = $value;

        return $this;
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
            '@type'                => static::TYPE_NAME,
            'icon_custom_emoji_id' => $this->iconCustomEmojiId,
            'style'                => $this->style->jsonSerialize(),
            'text'                 => $this->text,
            'type'                 => $this->type->jsonSerialize(),
        ];
    }
}
