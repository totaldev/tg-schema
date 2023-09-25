<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns information about the type of an internal link. Returns a 404 error if the link is not internal. Can be called before authorization
 */
class GetInternalLinkType extends TdFunction
{
    public const TYPE_NAME = 'getInternalLinkType';

    /**
     * The link
     *
     * @var string
     */
    protected string $link;

    public function __construct(string $link)
    {
        $this->link = $link;
    }

    public static function fromArray(array $array): GetInternalLinkType
    {
        return new static(
            $array['link'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'link' => $this->link,
        ];
    }

    public function getLink(): string
    {
        return $this->link;
    }
}
