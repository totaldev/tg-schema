<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Create;

use Totaldev\TgSchema\Input\InputBusinessChatLink;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Creates a business chat link for the current account. Requires Telegram Business subscription. There can be up to getOption("business_chat_link_count_max")
 * links created. Returns the created link.
 */
class CreateBusinessChatLink extends TdFunction
{
    public const TYPE_NAME = 'createBusinessChatLink';

    public function __construct(
        /**
         * Information about the link to create.
         */
        protected InputBusinessChatLink $linkInfo
    ) {}

    public static function fromArray(array $array): CreateBusinessChatLink
    {
        return new static(
            TdSchemaRegistry::fromArray($array['link_info']),
        );
    }

    public function getLinkInfo(): InputBusinessChatLink
    {
        return $this->linkInfo;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'link_info' => $this->linkInfo->typeSerialize(),
        ];
    }
}
