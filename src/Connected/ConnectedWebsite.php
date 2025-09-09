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
    public const TYPE_NAME = 'connectedWebsite';

    public function __construct(
        /**
         * Website identifier.
         */
        protected int    $id,
        /**
         * The domain name of the website.
         */
        protected string $domainName,
        /**
         * User identifier of a bot linked with the website.
         */
        protected int    $botUserId,
        /**
         * The version of a browser used to log in.
         */
        protected string $browser,
        /**
         * Operating system the browser is running on.
         */
        protected string $platform,
        /**
         * Point in time (Unix timestamp) when the user was logged in.
         */
        protected int    $logInDate,
        /**
         * Point in time (Unix timestamp) when obtained authorization was last used.
         */
        protected int    $lastActiveDate,
        /**
         * IP address from which the user was logged in, in human-readable format.
         */
        protected string $ipAddress,
        /**
         * Human-readable description of a country and a region from which the user was logged in, based on the IP address.
         */
        protected string $location,
    ) {}

    public static function fromArray(array $array): ConnectedWebsite
    {
        return new static(
            $array['id'],
            $array['domain_name'],
            $array['bot_user_id'],
            $array['browser'],
            $array['platform'],
            $array['log_in_date'],
            $array['last_active_date'],
            $array['ip_address'],
            $array['location'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'id'               => $this->id,
            'domain_name'      => $this->domainName,
            'bot_user_id'      => $this->botUserId,
            'browser'          => $this->browser,
            'platform'         => $this->platform,
            'log_in_date'      => $this->logInDate,
            'last_active_date' => $this->lastActiveDate,
            'ip_address'       => $this->ipAddress,
            'location'         => $this->location,
        ];
    }
}
