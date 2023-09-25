<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Unconfirmed;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about an unconfirmed session
 */
class UnconfirmedSession extends TdObject
{
    public const TYPE_NAME = 'unconfirmedSession';

    /**
     * Model of the device that was used for the session creation, as provided by the application
     *
     * @var string
     */
    protected string $deviceModel;

    /**
     * Session identifier
     *
     * @var int
     */
    protected int $id;

    /**
     * A human-readable description of the location from which the session was created, based on the IP address
     *
     * @var string
     */
    protected string $location;

    /**
     * Point in time (Unix timestamp) when the user has logged in
     *
     * @var int
     */
    protected int $logInDate;

    public function __construct(int $id, int $logInDate, string $deviceModel, string $location)
    {
        $this->id = $id;
        $this->logInDate = $logInDate;
        $this->deviceModel = $deviceModel;
        $this->location = $location;
    }

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
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
            'log_in_date' => $this->logInDate,
            'device_model' => $this->deviceModel,
            'location' => $this->location,
        ];
    }
}
