<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Session;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about one session in a Telegram application used by the current user. Sessions must be shown to the user in the returned order.
 */
class Session extends TdObject
{
    public const TYPE_NAME = 'session';

    public function __construct(
        /**
         * Session identifier.
         */
        protected int         $id,
        /**
         * True, if this session is the current session.
         */
        protected bool        $isCurrent,
        /**
         * True, if a 2-step verification password is needed to complete authorization of the session.
         */
        protected bool        $isPasswordPending,
        /**
         * True, if the session wasn't confirmed from another session.
         */
        protected bool        $isUnconfirmed,
        /**
         * True, if incoming secret chats can be accepted by the session.
         */
        protected bool        $canAcceptSecretChats,
        /**
         * True, if incoming calls can be accepted by the session.
         */
        protected bool        $canAcceptCalls,
        /**
         * Session type based on the system and application version, which can be used to display a corresponding icon.
         */
        protected SessionType $type,
        /**
         * Telegram API identifier, as provided by the application.
         */
        protected int         $apiId,
        /**
         * Name of the application, as provided by the application.
         */
        protected string      $applicationName,
        /**
         * The version of the application, as provided by the application.
         */
        protected string      $applicationVersion,
        /**
         * True, if the application is an official application or uses the api_id of an official application.
         */
        protected bool        $isOfficialApplication,
        /**
         * Model of the device the application has been run or is running on, as provided by the application.
         */
        protected string      $deviceModel,
        /**
         * Operating system the application has been run or is running on, as provided by the application.
         */
        protected string      $platform,
        /**
         * Version of the operating system the application has been run or is running on, as provided by the application.
         */
        protected string      $systemVersion,
        /**
         * Point in time (Unix timestamp) when the user has logged in.
         */
        protected int         $logInDate,
        /**
         * Point in time (Unix timestamp) when the session was last used.
         */
        protected int         $lastActiveDate,
        /**
         * IP address from which the session was created, in human-readable format.
         */
        protected string      $ipAddress,
        /**
         * A human-readable description of the location from which the session was created, based on the IP address.
         */
        protected string      $location,
    ) {}

    public static function fromArray(array $array): Session
    {
        return new static(
            $array['id'],
            $array['is_current'],
            $array['is_password_pending'],
            $array['is_unconfirmed'],
            $array['can_accept_secret_chats'],
            $array['can_accept_calls'],
            TdSchemaRegistry::fromArray($array['type']),
            $array['api_id'],
            $array['application_name'],
            $array['application_version'],
            $array['is_official_application'],
            $array['device_model'],
            $array['platform'],
            $array['system_version'],
            $array['log_in_date'],
            $array['last_active_date'],
            $array['ip_address'],
            $array['location'],
        );
    }

    public function getApiId(): int
    {
        return $this->apiId;
    }

    public function getApplicationName(): string
    {
        return $this->applicationName;
    }

    public function getApplicationVersion(): string
    {
        return $this->applicationVersion;
    }

    public function getCanAcceptCalls(): bool
    {
        return $this->canAcceptCalls;
    }

    public function getCanAcceptSecretChats(): bool
    {
        return $this->canAcceptSecretChats;
    }

    public function getDeviceModel(): string
    {
        return $this->deviceModel;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getIpAddress(): string
    {
        return $this->ipAddress;
    }

    public function getIsCurrent(): bool
    {
        return $this->isCurrent;
    }

    public function getIsOfficialApplication(): bool
    {
        return $this->isOfficialApplication;
    }

    public function getIsPasswordPending(): bool
    {
        return $this->isPasswordPending;
    }

    public function getIsUnconfirmed(): bool
    {
        return $this->isUnconfirmed;
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

    public function getSystemVersion(): string
    {
        return $this->systemVersion;
    }

    public function getType(): SessionType
    {
        return $this->type;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'id'                      => $this->id,
            'is_current'              => $this->isCurrent,
            'is_password_pending'     => $this->isPasswordPending,
            'is_unconfirmed'          => $this->isUnconfirmed,
            'can_accept_secret_chats' => $this->canAcceptSecretChats,
            'can_accept_calls'        => $this->canAcceptCalls,
            'type'                    => $this->type->typeSerialize(),
            'api_id'                  => $this->apiId,
            'application_name'        => $this->applicationName,
            'application_version'     => $this->applicationVersion,
            'is_official_application' => $this->isOfficialApplication,
            'device_model'            => $this->deviceModel,
            'platform'                => $this->platform,
            'system_version'          => $this->systemVersion,
            'log_in_date'             => $this->logInDate,
            'last_active_date'        => $this->lastActiveDate,
            'ip_address'              => $this->ipAddress,
            'location'                => $this->location,
        ];
    }
}
