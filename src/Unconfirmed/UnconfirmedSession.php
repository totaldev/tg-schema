<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Unconfirmed;

use Totaldev\TgSchema\TdObject;

/**
 * Contains information about an unconfirmed session.
 */
class UnconfirmedSession extends TdObject
{
    public const string TYPE_NAME = 'unconfirmedSession';

    public function __construct(
        /**
         * Model of the device that was used for the session creation, as provided by the application.
         */
        protected string $deviceModel,
        /**
         * Session identifier.
         */
        protected int    $id,
        /**
         * A human-readable description of the location from which the session was created, based on the IP address.
         */
        protected string $location,
        /**
         * Point in time (Unix timestamp) when the user has logged in.
         */
        protected int    $logInDate,
    ) {}

    public static function fromArray(array $array): UnconfirmedSession
    {
        return new static(
            deviceModel: $array['device_model'],
            id         : $array['id'],
            location   : $array['location'],
            logInDate  : $array['log_in_date'],
        );
    }

    public function getDeviceModel(): string
    {
        return $this->deviceModel;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getLocation(): string
    {
        return $this->location;
    }

    public function getLogInDate(): int
    {
        return $this->logInDate;
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

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'device_model' => $this->deviceModel,
            'id'           => $this->id,
            'location'     => $this->location,
            'log_in_date'  => $this->logInDate,
        ];
    }
}
