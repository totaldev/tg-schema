<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Rich;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A strikethrough rich text
 */
class RichTextStrikethrough extends RichText
{
    public const TYPE_NAME = 'richTextStrikethrough';

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

    public static function fromArray(array $array): RichTextStrikethrough
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

    public function getText(): RichText
    {
        return $this->text;
    }
}
