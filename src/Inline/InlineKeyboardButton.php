<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Inline;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a single button in an inline keyboard
 */
class InlineKeyboardButton extends TdObject
{
    public const TYPE_NAME = 'inlineKeyboardButton';

    /**
     * Text of the button
     *
     * @var string
     */
    protected string $text;

    /**
     * Type of the button
     *
     * @var InlineKeyboardButtonType
     */
    protected InlineKeyboardButtonType $type;

    public function __construct(string $text, InlineKeyboardButtonType $type)
    {
        $this->text = $text;
        $this->type = $type;
    }

    public static function fromArray(array $array): InlineKeyboardButton
    {
        return new static(
            $array['text'],
            TdSchemaRegistry::fromArray($array['type']),
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'text' => $this->text,
            'type' => $this->type->typeSerialize(),
        ];
    }
}
