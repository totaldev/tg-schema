<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Text;

/**
 * A text description shown instead of a raw URL.
 */
class TextEntityTypeTextUrl extends TextEntityType
{
    public const TYPE_NAME = 'textEntityTypeTextUrl';

    public function __construct(
        /**
         * HTTP or tg:// URL to be opened when the link is clicked.
         */
        protected string $url
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): TextEntityTypeTextUrl
    {
        return new static(
            $array['url'],
        );
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'url'   => $this->url,
        ];
    }
}
