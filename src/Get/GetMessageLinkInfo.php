<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns information about a public or private message link. Can be called for any internal link of the type internalLinkTypeMessage
 */
class GetMessageLinkInfo extends TdFunction
{
    public const TYPE_NAME = 'getMessageLinkInfo';

    /**
     * The message link
     *
     * @var string
     */
    protected string $url;

    public function __construct(string $url)
    {
        $this->url = $url;
    }

    public static function fromArray(array $array): GetMessageLinkInfo
    {
        return new static(
            $array['url'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'url' => $this->url,
        ];
    }

    public function getUrl(): string
    {
        return $this->url;
    }
}
