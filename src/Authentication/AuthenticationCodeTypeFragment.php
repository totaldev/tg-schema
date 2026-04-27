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
    public const string TYPE_NAME = 'authenticationCodeTypeFragment';

    public function __construct(
        /**
         * Length of the code.
         */
        protected int    $length,
        /**
         * URL to open to receive the code.
         */
        protected string $url,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): AuthenticationCodeTypeFragment
    {
        return new static(
            length: $array['length'],
            url   : $array['url'],
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

    public function setLength(int $value): static
    {
        $this->length = $value;

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
            '@type'  => static::TYPE_NAME,
            'length' => $this->length,
            'url'    => $this->url,
        ];
    }
}
