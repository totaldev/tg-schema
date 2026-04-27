<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Network;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about the total amount of data that was used for calls.
 */
class NetworkStatisticsEntryCall extends NetworkStatisticsEntry
{
    public const string TYPE_NAME = 'networkStatisticsEntryCall';

    public function __construct(
        /**
         * Total call duration, in seconds.
         */
        protected float       $duration,
        /**
         * Type of the network the data was sent through. Call setNetworkType to maintain the actual network type.
         */
        protected NetworkType $networkType,
        /**
         * Total number of bytes received.
         */
        protected int         $receivedBytes,
        /**
         * Total number of bytes sent.
         */
        protected int         $sentBytes,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): NetworkStatisticsEntryCall
    {
        return new static(
            duration     : $array['duration'],
            networkType  : TdSchemaRegistry::fromArray($array['network_type']),
            receivedBytes: $array['received_bytes'],
            sentBytes    : $array['sent_bytes'],
        );
    }

    public function getDuration(): float
    {
        return $this->duration;
    }

    public function getNetworkType(): NetworkType
    {
        return $this->networkType;
    }

    public function getReceivedBytes(): int
    {
        return $this->receivedBytes;
    }

    public function getSentBytes(): int
    {
        return $this->sentBytes;
    }

    public function setDuration(float $value): static
    {
        $this->duration = $value;

        return $this;
    }

    public function setNetworkType(NetworkType $value): static
    {
        $this->networkType = $value;

        return $this;
    }

    public function setReceivedBytes(int $value): static
    {
        $this->receivedBytes = $value;

        return $this;
    }

    public function setSentBytes(int $value): static
    {
        $this->sentBytes = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'duration'       => $this->duration,
            'network_type'   => $this->networkType->jsonSerialize(),
            'received_bytes' => $this->receivedBytes,
            'sent_bytes'     => $this->sentBytes,
        ];
    }
}
