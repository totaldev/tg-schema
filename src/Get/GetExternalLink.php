<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns an HTTP URL which can be used to automatically authorize the current user on a website after clicking an HTTP link. Use the method
 * getExternalLinkInfo to find whether a prior user confirmation is needed.
 */
class GetExternalLink extends TdFunction
{
    public const TYPE_NAME = 'getExternalLink';

    public function __construct(
        /**
         * The HTTP link.
         */
        protected string $link,
        /**
         * Pass true if the current user allowed the bot, returned in getExternalLinkInfo, to send them messages.
         */
        protected bool   $allowWriteAccess
    ) {}

    public static function fromArray(array $array): GetExternalLink
    {
        return new static(
            $array['link'],
            $array['allow_write_access'],
        );
    }

    public function getAllowWriteAccess(): bool
    {
        return $this->allowWriteAccess;
    }

    public function getLink(): string
    {
        return $this->link;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'link'               => $this->link,
            'allow_write_access' => $this->allowWriteAccess,
        ];
    }
}
