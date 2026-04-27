<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns information about an OAuth deep link. Use checkOauthRequestMatchCode, acceptOauthRequest or declineOauthRequest to process the link.
 */
class GetOauthLinkInfo extends TdFunction
{
    public const string TYPE_NAME = 'getOauthLinkInfo';

    public function __construct(
        /**
         * Origin of the OAuth request if the request was received from the in-app browser; pass an empty string otherwise.
         */
        protected string $inAppOrigin,
        /**
         * URL of the link.
         */
        protected string $url,
    ) {}

    public static function fromArray(array $array): GetOauthLinkInfo
    {
        return new static(
            inAppOrigin: $array['in_app_origin'],
            url        : $array['url'],
        );
    }

    public function getInAppOrigin(): string
    {
        return $this->inAppOrigin;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setInAppOrigin(string $value): static
    {
        $this->inAppOrigin = $value;

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
            '@type'         => static::TYPE_NAME,
            'in_app_origin' => $this->inAppOrigin,
            'url'           => $this->url,
        ];
    }
}
