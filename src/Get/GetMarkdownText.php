<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Replaces text entities with Markdown formatting in a human-friendly format. Entities that can't be represented in Markdown unambiguously are kept as is. Can be called synchronously
 */
class GetMarkdownText extends TdFunction
{
    public const TYPE_NAME = 'getMarkdownText';

    /**
     * The text
     *
     * @var FormattedText
     */
    protected FormattedText $text;

    public function __construct(FormattedText $text)
    {
        $this->text = $text;
    }

    public static function fromArray(array $array): GetMarkdownText
    {
        return new static(
            TdSchemaRegistry::fromArray($array['text']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'text' => $this->text->typeSerialize(),
        ];
    }

    public function getText(): FormattedText
    {
        return $this->text;
    }
}
