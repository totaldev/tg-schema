<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns information about a link to boost a chat. Can be called for any internal link of the type internalLinkTypeChatBoost
 */
class GetChatBoostLinkInfo extends TdFunction
{
    public const TYPE_NAME = 'getChatBoostLinkInfo';

    /**
     * The link to boost a chat
     *
     * @var string
     */
    protected string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

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
            'url' => $this->url,
        ];
    }
}
