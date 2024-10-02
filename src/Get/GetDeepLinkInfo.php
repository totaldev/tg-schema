<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns information about a tg:// deep link. Use "tg://need_update_for_some_feature" or "tg:some_unsupported_feature" for testing. Returns a 404 error for
 * unknown links. Can be called before authorization.
 */
class GetDeepLinkInfo extends TdFunction
{
    public const TYPE_NAME = 'getDeepLinkInfo';

    public function __construct(
        /**
         * The link.
         */
        protected string $link
    ) {}

    public static function fromArray(array $array): GetDeepLinkInfo
    {
        return new static(
            $array['link'],
        );
    }

    public function getLink(): string
    {
        return $this->link;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'link'  => $this->link,
        ];
    }
}
