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
    public const string TYPE_NAME = 'session';

    public function __construct(
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
         * True, if incoming calls can be accepted by the session.
         */
        protected bool        $canAcceptCalls,
        /**
         * True, if incoming secret chats can be accepted by the session.
         */
        protected bool        $canAcceptSecretChats,
        /**
         * Model of the device the application has been run or is running on, as provided by the application.
         */
        protected string      $deviceModel,
        /**
         * Session identifier.
         */
        protected int         $id,
        /**
         * IP address from which the session was created, in human-readable format.
         */
        protected string      $ipAddress,
        /**
         * True, if this session is the current session.
         */
        protected bool        $isCurrent,
        /**
         * True, if the application is an official application or uses the api_id of an official application.
         */
        protected bool        $isOfficialApplication,
        /**
         * True, if a 2-step verification password is needed to complete authorization of the session.
         */
        protected bool        $isPasswordPending,
        /**
         * True, if the session wasn't confirmed from another session.
         */
        protected bool        $isUnconfirmed,
        /**
         * Point in time (Unix timestamp) when the session was last used.
         */
        protected int         $lastActiveDate,
        /**
         * A human-readable description of the location from which the session was created, based on the IP address.
         */
        protected string      $location,
        /**
         * Point in time (Unix timestamp) when the user has logged in.
         */
        protected int         $logInDate,
        /**
         * Operating system the application has been run or is running on, as provided by the application.
         */
        protected string      $platform,
        /**
         * Version of the operating system the application has been run or is running on, as provided by the application.
         */
        protected string      $systemVersion,
        /**
         * Session type based on the system and application version, which can be used to display a corresponding icon.
         */
        protected SessionType $type,
    ) {}

    public static function fromArray(array $array): Session
    {
        return new static(
            apiId                : $array['api_id'],
            applicationName      : $array['application_name'],
            applicationVersion   : $array['application_version'],
            canAcceptCalls       : $array['can_accept_calls'],
            canAcceptSecretChats : $array['can_accept_secret_chats'],
            deviceModel          : $array['device_model'],
            id                   : $array['id'],
            ipAddress            : $array['ip_address'],
            isCurrent            : $array['is_current'],
            isOfficialApplication: $array['is_official_application'],
            isPasswordPending    : $array['is_password_pending'],
            isUnconfirmed        : $array['is_unconfirmed'],
            lastActiveDate       : $array['last_active_date'],
            location             : $array['location'],
            logInDate            : $array['log_in_date'],
            platform             : $array['platform'],
            systemVersion        : $array['system_version'],
            type                 : TdSchemaRegistry::fromArray($array['type']),
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

    public function setApiId(int $value): static
    {
        $this->apiId = $value;

        return $this;
    }

    public function setApplicationName(string $value): static
    {
        $this->applicationName = $value;

        return $this;
    }

    public function setApplicationVersion(string $value): static
    {
        $this->applicationVersion = $value;

        return $this;
    }

    public function setCanAcceptCalls(bool $value): static
    {
        $this->canAcceptCalls = $value;

        return $this;
    }

    public function setCanAcceptSecretChats(bool $value): static
    {
        $this->canAcceptSecretChats = $value;

        return $this;
    }

    public function setDeviceModel(string $value): static
    {
        $this->deviceModel = $value;

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

    public function setIsCurrent(bool $value): static
    {
        $this->isCurrent = $value;

        return $this;
    }

    public function setIsOfficialApplication(bool $value): static
    {
        $this->isOfficialApplication = $value;

        return $this;
    }

    public function setIsPasswordPending(bool $value): static
    {
        $this->isPasswordPending = $value;

        return $this;
    }

    public function setIsUnconfirmed(bool $value): static
    {
        $this->isUnconfirmed = $value;

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

    public function setSystemVersion(string $value): static
    {
        $this->systemVersion = $value;

        return $this;
    }

    public function setType(SessionType $value): static
    {
        $this->type = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'api_id'                  => $this->apiId,
            'application_name'        => $this->applicationName,
            'application_version'     => $this->applicationVersion,
            'can_accept_calls'        => $this->canAcceptCalls,
            'can_accept_secret_chats' => $this->canAcceptSecretChats,
            'device_model'            => $this->deviceModel,
            'id'                      => $this->id,
            'ip_address'              => $this->ipAddress,
            'is_current'              => $this->isCurrent,
            'is_official_application' => $this->isOfficialApplication,
            'is_password_pending'     => $this->isPasswordPending,
            'is_unconfirmed'          => $this->isUnconfirmed,
            'last_active_date'        => $this->lastActiveDate,
            'location'                => $this->location,
            'log_in_date'             => $this->logInDate,
            'platform'                => $this->platform,
            'system_version'          => $this->systemVersion,
            'type'                    => $this->type->jsonSerialize(),
        ];
    }
}
