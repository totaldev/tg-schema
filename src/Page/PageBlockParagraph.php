<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Page;

use Totaldev\TgSchema\Rich\RichText;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A text paragraph
 */
class PageBlockParagraph extends PageBlock
{
    public const TYPE_NAME = 'pageBlockParagraph';

    /**
     * Paragraph text
     *
     * @var RichText
     */
    protected RichText $text;

    public function __construct(RichText $text)
    {
        parent::__construct();

        $this->text = $text;
    }

    public static function fromArray(array $array): PageBlockParagraph
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