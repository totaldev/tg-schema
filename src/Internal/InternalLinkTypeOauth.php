<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is an OAuth link. Call getOauthLinkInfo with the given URL to process the link if the link was received from outside of the application; otherwise,
 * ignore it. After getOauthLinkInfo, show the user confirmation dialog and process it with checkOauthRequestMatchCode, acceptOauthRequest or
 * declineOauthRequest.
 */
class InternalLinkTypeOauth extends InternalLinkType
{
    public const string TYPE_NAME = 'internalLinkTypeOauth';

    public function __construct(
        /**
         * URL to be passed to getOauthLinkInfo.
         */
        protected string $url
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeOauth
    {
        return new static(
            url: $array['url'],
        );
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $value): static
    {
        $this->url = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'url'   => $this->url,
        ];
    }
}
