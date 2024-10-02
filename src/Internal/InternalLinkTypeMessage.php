<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link to a Telegram message or a forum topic. Call getMessageLinkInfo with the given URL to process the link, and then open received forum
 * topic or chat and show the message there.
 */
class InternalLinkTypeMessage extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeMessage';

    public function __construct(
        /**
         * URL to be passed to getMessageLinkInfo.
         */
        protected string $url
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeMessage
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
