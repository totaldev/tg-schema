<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link is a link to boost a Telegram chat. Call getChatBoostLinkInfo with the given URL to process the link. If the chat is found, then call
 * getChatBoostStatus and canBoostChat to get the current boost status and check whether the chat can be boosted. If the user wants to boost the chat and the
 * chat can be boosted, then call boostChat
 */
class InternalLinkTypeChatBoost extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeChatBoost';

    /**
     * URL to be passed to getChatBoostLinkInfo
     *
     * @var string
     */
    protected string $url;

    public function __construct(string $url)
    {
        parent::__construct();

        $this->url = $url;
    }

    public static function fromArray(array $array): InternalLinkTypeChatBoost
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
