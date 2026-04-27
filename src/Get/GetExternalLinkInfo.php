<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns information about an action to be done when the current user clicks an external link. Don't use this method for links from secret chats if link
 * preview is disabled in secret chats.
 */
class GetExternalLinkInfo extends TdFunction
{
    public const string TYPE_NAME = 'getExternalLinkInfo';

    public function __construct(
        /**
         * The link.
         */
        protected string $link
    ) {}

    public static function fromArray(array $array): GetExternalLinkInfo
    {
        return new static(
            link: $array['link'],
        );
    }

    public function getLink(): string
    {
        return $this->link;
    }

    public function setLink(string $value): static
    {
        $this->link = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'link'  => $this->link,
        ];
    }
}
