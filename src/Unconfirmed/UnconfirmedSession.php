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
    public const TYPE_NAME = 'unconfirmedSession';

    public function __construct(
        /**
         * Session identifier.
         */
        protected int    $id,
        /**
         * Point in time (Unix timestamp) when the user has logged in.
         */
        protected int    $logInDate,
        /**
         * Model of the device that was used for the session creation, as provided by the application.
         */
        protected string $deviceModel,
        /**
         * A human-readable description of the location from which the session was created, based on the IP address.
         */
        protected string $location
    ) {}

    public static function fromArray(array $array): UnconfirmedSession
    {
        return new static(
            $array['id'],
            $array['log_in_date'],
            $array['device_model'],
            $array['location'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'id'           => $this->id,
            'log_in_date'  => $this->logInDate,
            'device_model' => $this->deviceModel,
            'location'     => $this->location,
        ];
    }
}
