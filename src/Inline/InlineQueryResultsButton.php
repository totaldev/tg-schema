<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Inline;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a button to be shown above inline query results.
 */
class InlineQueryResultsButton extends TdObject
{
    public const string TYPE_NAME = 'inlineQueryResultsButton';

    public function __construct(
        /**
         * The text of the button.
         */
        protected string                       $text,
        /**
         * Type of the button.
         */
        protected InlineQueryResultsButtonType $type,
    ) {}

    public static function fromArray(array $array): InlineQueryResultsButton
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

    public function getType(): InlineQueryResultsButtonType
    {
        return $this->type;
    }

    public function setText(string $value): static
    {
        $this->text = $value;

        return $this;
    }

    public function setType(InlineQueryResultsButtonType $value): static
    {
        $this->type = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'text'  => $this->text,
            'type'  => $this->type->typeSerialize(),
        ];
    }
}
