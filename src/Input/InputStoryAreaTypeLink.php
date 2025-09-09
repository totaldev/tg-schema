<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

/**
 * An area pointing to a HTTP or tg:// link.
 */
class InputStoryAreaTypeLink extends InputStoryAreaType
{
    public const TYPE_NAME = 'inputStoryAreaTypeLink';

    public function __construct(
        /**
         * HTTP or tg:// URL to be opened when the area is clicked.
         */
        protected string $url
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputStoryAreaTypeLink
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
