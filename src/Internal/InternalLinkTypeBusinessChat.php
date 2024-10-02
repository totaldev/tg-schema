<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link to a business chat. Use getBusinessChatLinkInfo with the provided link name to get information about the link, then open received private
 * chat and replace chat draft with the provided text.
 */
class InternalLinkTypeBusinessChat extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeBusinessChat';

    public function __construct(
        /**
         * Name of the link.
         */
        protected string $linkName
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeBusinessChat
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
