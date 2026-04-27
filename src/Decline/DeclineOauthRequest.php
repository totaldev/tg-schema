<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Decline;

use Totaldev\TgSchema\TdFunction;

/**
 * Declines an OAuth authorization request.
 */
class DeclineOauthRequest extends TdFunction
{
    public const string TYPE_NAME = 'declineOauthRequest';

    public function __construct(
        /**
         * URL of the OAuth deep link.
         */
        protected string $url
    ) {}

    public static function fromArray(array $array): DeclineOauthRequest
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
