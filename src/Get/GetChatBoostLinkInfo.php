<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns information about a link to boost a chat. Can be called for any internal link of the type internalLinkTypeChatBoost.
 */
class GetChatBoostLinkInfo extends TdFunction
{
    public const TYPE_NAME = 'getChatBoostLinkInfo';

    public function __construct(
        /**
         * The link to boost a chat.
         */
        protected string $url
    ) {}

    public static function fromArray(array $array): GetChatBoostLinkInfo
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
