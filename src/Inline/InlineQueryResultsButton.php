<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Inline;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a button to be shown above inline query results
 */
class InlineQueryResultsButton extends TdObject
{
    public const TYPE_NAME = 'inlineQueryResultsButton';

    /**
     * The text of the button
     *
     * @var string
     */
    protected string $text;

    /**
     * Type of the button
     *
     * @var InlineQueryResultsButtonType
     */
    protected InlineQueryResultsButtonType $type;

    public function __construct(string $text, InlineQueryResultsButtonType $type)
    {
        $this->text = $text;
        $this->type = $type;
    }

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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'text' => $this->text,
            'type' => $this->type->typeSerialize(),
        ];
    }
}
