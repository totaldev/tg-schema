<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns information about a public or private message link. Can be called for any internal link of the type internalLinkTypeMessage.
 */
class GetMessageLinkInfo extends TdFunction
{
    public const TYPE_NAME = 'getMessageLinkInfo';

    public function __construct(
        /**
         * The message link.
         */
        protected string $url
    ) {}

    public static function fromArray(array $array): GetMessageLinkInfo
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
