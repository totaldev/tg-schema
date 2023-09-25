<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Rich;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A reference to a richTexts object on the same web page
 */
class RichTextReference extends RichText
{
    public const TYPE_NAME = 'richTextReference';

    /**
     * The name of a richTextAnchor object, which is the first element of the target richTexts object
     *
     * @var string
     */
    protected string $anchorName;

    /**
     * The text
     *
     * @var RichText
     */
    protected RichText $text;

    /**
     * An HTTP URL, opening the reference
     *
     * @var string
     */
    protected string $url;

    public function __construct(RichText $text, string $anchorName, string $url)
    {
        parent::__construct();

        $this->text = $text;
        $this->anchorName = $anchorName;
        $this->url = $url;
    }

    public static function fromArray(array $array): RichTextReference
    {
        return new static(
            TdSchemaRegistry::fromArray($array['text']),
            $array['anchor_name'],
            $array['url'],
        );
    }

    public function getAnchorName(): string
    {
        return $this->anchorName;
    }

    public function getText(): RichText
    {
        return $this->text;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'text' => $this->text->typeSerialize(),
            'anchor_name' => $this->anchorName,
            'url' => $this->url,
        ];
    }
}
