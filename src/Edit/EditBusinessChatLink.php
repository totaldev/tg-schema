<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Edit;

use Totaldev\TgSchema\Input\InputBusinessChatLink;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Edits a business chat link of the current account. Requires Telegram Business subscription. Returns the edited link.
 */
class EditBusinessChatLink extends TdFunction
{
    public const TYPE_NAME = 'editBusinessChatLink';

    public function __construct(
        /**
         * The link to edit.
         */
        protected string                $link,
        /**
         * New description of the link.
         */
        protected InputBusinessChatLink $linkInfo,
    ) {}

    public static function fromArray(array $array): EditBusinessChatLink
    {
        return new static(
            $array['link'],
            TdSchemaRegistry::fromArray($array['link_info']),
        );
    }

    public function getLink(): string
    {
        return $this->link;
    }

    public function getLinkInfo(): InputBusinessChatLink
    {
        return $this->linkInfo;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'link'      => $this->link,
            'link_info' => $this->linkInfo->typeSerialize(),
        ];
    }
}
