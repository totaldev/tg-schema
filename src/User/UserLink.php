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
    public const string TYPE_NAME = 'userLink';

    public function __construct(
        /**
         * Left time for which the link is valid, in seconds; 0 if the link is a public username link.
         */
        protected int    $expiresIn,
        /**
         * The URL.
         */
        protected string $url,
    ) {}

    public static function fromArray(array $array): UserLink
    {
        return new static(
            expiresIn: $array['expires_in'],
            url      : $array['url'],
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

    public function setExpiresIn(int $value): static
    {
        $this->expiresIn = $value;

        return $this;
    }

    public function setUrl(string $value): static
    {
        $this->url = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'expires_in' => $this->expiresIn,
            'url'        => $this->url,
        ];
    }
}
