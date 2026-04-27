<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Oauth;

use Totaldev\TgSchema\TdObject;

/**
 * Information about the OAuth authorization.
 */
class OauthLinkInfo extends TdObject
{
    public const string TYPE_NAME = 'oauthLinkInfo';

    public function __construct(
        /**
         * User identifier of a bot linked with the website.
         */
        protected int    $botUserId,
        /**
         * The version of a browser used for the authorization.
         */
        protected string $browser,
        /**
         * A domain of the URL.
         */
        protected string $domain,
        /**
         * True, if the authorization originates from an application.
         */
        protected bool   $fromApp,
        /**
         * IP address from which the authorization is performed, in human-readable format.
         */
        protected string $ipAddress,
        /**
         * Human-readable description of a country and a region from which the authorization is performed, based on the IP address.
         */
        protected string $location,
        /**
         * True, if code matching dialog must be shown first and checkOauthRequestMatchCode must be called before acceptOauthRequest. Otherwise, checkOauthRequestMatchCode must not be called.
         */
        protected bool   $matchCodeFirst,
        /**
         * The list of codes to match; may be empty if irrelevant.
         *
         * @var string[]
         */
        protected array  $matchCodes,
        /**
         * Operating system the browser is running on.
         */
        protected string $platform,
        /**
         * True, if the user must be asked for the permission to share their phone number.
         */
        protected bool   $requestPhoneNumberAccess,
        /**
         * True, if the user must be asked for the permission to the bot to send them messages.
         */
        protected bool   $requestWriteAccess,
        /**
         * An HTTP URL where the user authorizes.
         */
        protected string $url,
        /**
         * Identifier of the user for which the link was generated; may be 0 if unknown. The corresponding user may be unknown. If the user is logged in the application, then they must be chosen for authorization by default.
         */
        protected int    $userId,
        /**
         * Verified name of the application; if empty, then "Unverified App" must be shown instead.
         */
        protected string $verifiedAppName,
    ) {}

    public static function fromArray(array $array): OauthLinkInfo
    {
        return new static(
            botUserId               : $array['bot_user_id'],
            browser                 : $array['browser'],
            domain                  : $array['domain'],
            fromApp                 : $array['from_app'],
            ipAddress               : $array['ip_address'],
            location                : $array['location'],
            matchCodeFirst          : $array['match_code_first'],
            matchCodes              : $array['match_codes'],
            platform                : $array['platform'],
            requestPhoneNumberAccess: $array['request_phone_number_access'],
            requestWriteAccess      : $array['request_write_access'],
            url                     : $array['url'],
            userId                  : $array['user_id'],
            verifiedAppName         : $array['verified_app_name'],
        );
    }

    public function getBotUserId(): int
    {
        return $this->botUserId;
    }

    public function getBrowser(): string
    {
        return $this->browser;
    }

    public function getDomain(): string
    {
        return $this->domain;
    }

    public function getFromApp(): bool
    {
        return $this->fromApp;
    }

    public function getIpAddress(): string
    {
        return $this->ipAddress;
    }

    public function getLocation(): string
    {
        return $this->location;
    }

    public function getMatchCodeFirst(): bool
    {
        return $this->matchCodeFirst;
    }

    public function getMatchCodes(): array
    {
        return $this->matchCodes;
    }

    public function getPlatform(): string
    {
        return $this->platform;
    }

    public function getRequestPhoneNumberAccess(): bool
    {
        return $this->requestPhoneNumberAccess;
    }

    public function getRequestWriteAccess(): bool
    {
        return $this->requestWriteAccess;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getVerifiedAppName(): string
    {
        return $this->verifiedAppName;
    }

    public function setBotUserId(int $value): static
    {
        $this->botUserId = $value;

        return $this;
    }

    public function setBrowser(string $value): static
    {
        $this->browser = $value;

        return $this;
    }

    public function setDomain(string $value): static
    {
        $this->domain = $value;

        return $this;
    }

    public function setFromApp(bool $value): static
    {
        $this->fromApp = $value;

        return $this;
    }

    public function setIpAddress(string $value): static
    {
        $this->ipAddress = $value;

        return $this;
    }

    public function setLocation(string $value): static
    {
        $this->location = $value;

        return $this;
    }

    public function setMatchCodeFirst(bool $value): static
    {
        $this->matchCodeFirst = $value;

        return $this;
    }

    public function setMatchCodes(array $value): static
    {
        $this->matchCodes = $value;

        return $this;
    }

    public function setPlatform(string $value): static
    {
        $this->platform = $value;

        return $this;
    }

    public function setRequestPhoneNumberAccess(bool $value): static
    {
        $this->requestPhoneNumberAccess = $value;

        return $this;
    }

    public function setRequestWriteAccess(bool $value): static
    {
        $this->requestWriteAccess = $value;

        return $this;
    }

    public function setUrl(string $value): static
    {
        $this->url = $value;

        return $this;
    }

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function setVerifiedAppName(string $value): static
    {
        $this->verifiedAppName = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                       => static::TYPE_NAME,
            'bot_user_id'                 => $this->botUserId,
            'browser'                     => $this->browser,
            'domain'                      => $this->domain,
            'from_app'                    => $this->fromApp,
            'ip_address'                  => $this->ipAddress,
            'location'                    => $this->location,
            'match_code_first'            => $this->matchCodeFirst,
            'match_codes'                 => $this->matchCodes,
            'platform'                    => $this->platform,
            'request_phone_number_access' => $this->requestPhoneNumberAccess,
            'request_write_access'        => $this->requestWriteAccess,
            'url'                         => $this->url,
            'user_id'                     => $this->userId,
            'verified_app_name'           => $this->verifiedAppName,
        ];
    }
}
