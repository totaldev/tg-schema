<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Accept;

use Totaldev\TgSchema\TdFunction;

/**
 * Accepts an OAuth authorization request. Returns an HTTP URL to open after successful authorization. May return an empty link if just a toast about
 * successful login has to be shown.
 */
class AcceptOauthRequest extends TdFunction
{
    public const string TYPE_NAME = 'acceptOauthRequest';

    public function __construct(
        /**
         * Pass true if the current user allowed the bot that was returned in getOauthLinkInfo, to access their phone number.
         */
        protected bool   $allowPhoneNumberAccess,
        /**
         * Pass true if the current user allowed the bot that was returned in getOauthLinkInfo, to send them messages.
         */
        protected bool   $allowWriteAccess,
        /**
         * The matching code chosen by the user.
         */
        protected string $matchCode,
        /**
         * URL of the OAuth deep link.
         */
        protected string $url,
    ) {}

    public static function fromArray(array $array): AcceptOauthRequest
    {
        return new static(
            allowPhoneNumberAccess: $array['allow_phone_number_access'],
            allowWriteAccess      : $array['allow_write_access'],
            matchCode             : $array['match_code'],
            url                   : $array['url'],
        );
    }

    public function getAllowPhoneNumberAccess(): bool
    {
        return $this->allowPhoneNumberAccess;
    }

    public function getAllowWriteAccess(): bool
    {
        return $this->allowWriteAccess;
    }

    public function getMatchCode(): string
    {
        return $this->matchCode;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setAllowPhoneNumberAccess(bool $value): static
    {
        $this->allowPhoneNumberAccess = $value;

        return $this;
    }

    public function setAllowWriteAccess(bool $value): static
    {
        $this->allowWriteAccess = $value;

        return $this;
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
            '@type'                     => static::TYPE_NAME,
            'allow_phone_number_access' => $this->allowPhoneNumberAccess,
            'allow_write_access'        => $this->allowWriteAccess,
            'match_code'                => $this->matchCode,
            'url'                       => $this->url,
        ];
    }
}
