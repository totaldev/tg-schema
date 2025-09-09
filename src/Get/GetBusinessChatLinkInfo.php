<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns information about a business chat link.
 */
class GetBusinessChatLinkInfo extends TdFunction
{
    public const TYPE_NAME = 'getBusinessChatLinkInfo';

    public function __construct(
        /**
         * Name of the link.
         */
        protected string $linkName
    ) {}

    public static function fromArray(array $array): GetBusinessChatLinkInfo
    {
        return new static(
            $array['link_name'],
        );
    }

    public function getLinkName(): string
    {
        return $this->linkName;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'link_name' => $this->linkName,
        ];
    }
}
