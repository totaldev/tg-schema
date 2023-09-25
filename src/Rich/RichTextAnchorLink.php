<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Rich;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A link to an anchor on the same web page
 */
class RichTextAnchorLink extends RichText
{
    public const TYPE_NAME = 'richTextAnchorLink';

    /**
     * The anchor name. If the name is empty, the link must bring back to top
     *
     * @var string
     */
    protected string $anchorName;

    /**
     * The link text
     *
     * @var RichText
     */
    protected RichText $text;

    /**
     * An HTTP URL, opening the anchor
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

    public static function fromArray(array $array): RichTextAnchorLink
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
