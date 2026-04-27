<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Connected;

use Totaldev\TgSchema\TdObject;

/**
 * Contains information about one website the current user is logged in with Telegram.
 */
class ConnectedWebsite extends TdObject
{
    public const string TYPE_NAME = 'connectedWebsite';

    public function __construct(
        /**
         * User identifier of a bot linked with the website.
         */
        protected int    $botUserId,
        /**
         * The version of a browser used to log in.
         */
        protected string $browser,
        /**
         * The domain name of the website.
         */
        protected string $domainName,
        /**
         * Website identifier.
         */
        protected int    $id,
        /**
         * IP address from which the user was logged in, in human-readable format.
         */
        protected string $ipAddress,
        /**
         * Point in time (Unix timestamp) when obtained authorization was last used.
         */
        protected int    $lastActiveDate,
        /**
         * Human-readable description of a country and a region from which the user was logged in, based on the IP address.
         */
        protected string $location,
        /**
         * Point in time (Unix timestamp) when the user was logged in.
         */
        protected int    $logInDate,
        /**
         * Operating system the browser is running on.
         */
        protected string $platform,
    ) {}

    public static function fromArray(array $array): ConnectedWebsite
    {
        return new static(
            botUserId     : $array['bot_user_id'],
            browser       : $array['browser'],
            domainName    : $array['domain_name'],
            id            : $array['id'],
            ipAddress     : $array['ip_address'],
            lastActiveDate: $array['last_active_date'],
            location      : $array['location'],
            logInDate     : $array['log_in_date'],
            platform      : $array['platform'],
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

    public function getDomainName(): string
    {
        return $this->domainName;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getIpAddress(): string
    {
        return $this->ipAddress;
    }

    public function getLastActiveDate(): int
    {
        return $this->lastActiveDate;
    }

    public function getLocation(): string
    {
        return $this->location;
    }

    public function getLogInDate(): int
    {
        return $this->logInDate;
    }

    public function getPlatform(): string
    {
        return $this->platform;
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

    public function setDomainName(string $value): static
    {
        $this->domainName = $value;

        return $this;
    }

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setIpAddress(string $value): static
    {
        $this->ipAddress = $value;

        return $this;
    }

    public function setLastActiveDate(int $value): static
    {
        $this->lastActiveDate = $value;

        return $this;
    }

    public function setLocation(string $value): static
    {
        $this->location = $value;

        return $this;
    }

    public function setLogInDate(int $value): static
    {
        $this->logInDate = $value;

        return $this;
    }

    public function setPlatform(string $value): static
    {
        $this->platform = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'bot_user_id'      => $this->botUserId,
            'browser'          => $this->browser,
            'domain_name'      => $this->domainName,
            'id'               => $this->id,
            'ip_address'       => $this->ipAddress,
            'last_active_date' => $this->lastActiveDate,
            'location'         => $this->location,
            'log_in_date'      => $this->logInDate,
            'platform'         => $this->platform,
        ];
    }
}
