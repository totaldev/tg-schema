<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Rich;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A bold rich text
 */
class RichTextBold extends RichText
{
    public const TYPE_NAME = 'richTextBold';

    /**
     * Text
     *
     * @var RichText
     */
    protected RichText $text;

    public function __construct(RichText $text)
    {
        parent::__construct();

        $this->text = $text;
    }

    public static function fromArray(array $array): RichTextBold
    {
        return new static(
            TdSchemaRegistry::fromArray($array['text']),
        );
    }

    public function getText(): RichText
    {
        return $this->text;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'text' => $this->text->typeSerialize(),
        ];
    }
}
