<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Check;

use Totaldev\TgSchema\TdFunction;

/**
 * Checks a match-code for an OAuth authorization request. If fails, then the authorization request has failed. Otherwise, authorization confirmation dialog
 * must be shown and the link must be processed using acceptOauthRequest or declineOauthRequest.
 */
class CheckOauthRequestMatchCode extends TdFunction
{
    public const string TYPE_NAME = 'checkOauthRequestMatchCode';

    public function __construct(
        /**
         * The matching code chosen by the user.
         */
        protected string $matchCode,
        /**
         * URL of the OAuth deep link.
         */
        protected string $url,
    ) {}

    public static function fromArray(array $array): CheckOauthRequestMatchCode
    {
        return new static(
            matchCode: $array['match_code'],
            url      : $array['url'],
        );
    }

    public function getMatchCode(): string
    {
        return $this->matchCode;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setMatchCode(string $value): static
    {
        $this->matchCode = $value;

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
            'match_code' => $this->matchCode,
            'url'        => $this->url,
        ];
    }
}
