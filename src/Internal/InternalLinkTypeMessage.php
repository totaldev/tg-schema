<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link is a link to a Telegram message or a forum topic. Call getMessageLinkInfo with the given URL to process the link
 */
class InternalLinkTypeMessage extends InternalLinkType
{
    public const TYPE_NAME = 'internalLinkTypeMessage';

    /**
     * URL to be passed to getMessageLinkInfo
     *
     * @var string
     */
    protected string $url;

    public function __construct(string $url)
    {
        parent::__construct();

        $this->url = $url;
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
            'url' => $this->url,
        ];
    }
}
