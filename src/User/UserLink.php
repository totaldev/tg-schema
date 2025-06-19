<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\User;

use Totaldev\TgSchema\TdObject;

/**
 * Contains an HTTPS URL, which can be used to get information about a user.
 */
class UserLink extends TdObject
{
    public const TYPE_NAME = 'userLink';

    public function __construct(
        /**
         * The URL.
         */
        protected string $url,
        /**
         * Left time for which the link is valid, in seconds; 0 if the link is a public username link.
         */
        protected int    $expiresIn
    ) {}

    public static function fromArray(array $array): UserLink
    {
        return new static(
            $array['url'],
            $array['expires_in'],
        );
    }

    public function getExpiresIn(): int
    {
        return $this->expiresIn;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'url'        => $this->url,
            'expires_in' => $this->expiresIn,
        ];
    }
}
