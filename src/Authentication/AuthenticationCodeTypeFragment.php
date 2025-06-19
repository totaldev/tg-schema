<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Authentication;

/**
 * A digit-only authentication code is delivered to https://fragment.com. The user must be logged in there via a wallet owning the phone number's NFT.
 */
class AuthenticationCodeTypeFragment extends AuthenticationCodeType
{
    public const TYPE_NAME = 'authenticationCodeTypeFragment';

    public function __construct(
        /**
         * URL to open to receive the code.
         */
        protected string $url,
        /**
         * Length of the code.
         */
        protected int    $length
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): AuthenticationCodeTypeFragment
    {
        return new static(
            $array['url'],
            $array['length'],
        );
    }

    public function getLength(): int
    {
        return $this->length;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'url'    => $this->url,
            'length' => $this->length,
        ];
    }
}
