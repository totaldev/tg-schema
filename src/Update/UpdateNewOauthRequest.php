<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * An OAuth authorization request was received.
 */
class UpdateNewOauthRequest extends Update
{
    public const string TYPE_NAME = 'updateNewOauthRequest';

    public function __construct(
        /**
         * A domain of the URL where the user authorizes.
         */
        protected string $domain,
        /**
         * Human-readable description of a country and a region from which the authorization is performed, based on the IP address.
         */
        protected string $location,
        /**
         * The URL to pass to getOauthLinkInfo; the link is valid for 60 seconds.
         */
        protected string $url,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateNewOauthRequest
    {
        return new static(
            domain  : $array['domain'],
            location: $array['location'],
            url     : $array['url'],
        );
    }

    public function getDomain(): string
    {
        return $this->domain;
    }

    public function getLocation(): string
    {
        return $this->location;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setDomain(string $value): static
    {
        $this->domain = $value;

        return $this;
    }

    public function setLocation(string $value): static
    {
        $this->location = $value;

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
            '@type'    => static::TYPE_NAME,
            'domain'   => $this->domain,
            'location' => $this->location,
            'url'      => $this->url,
        ];
    }
}
