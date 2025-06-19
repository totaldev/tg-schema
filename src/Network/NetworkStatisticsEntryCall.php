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
    public const TYPE_NAME = 'networkStatisticsEntryCall';

    public function __construct(
        /**
         * Type of the network the data was sent through. Call setNetworkType to maintain the actual network type.
         */
        protected NetworkType $networkType,
        /**
         * Total number of bytes sent.
         */
        protected int         $sentBytes,
        /**
         * Total number of bytes received.
         */
        protected int         $receivedBytes,
        /**
         * Total call duration, in seconds.
         */
        protected float       $duration
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): NetworkStatisticsEntryCall
    {
        return new static(
            TdSchemaRegistry::fromArray($array['network_type']),
            $array['sent_bytes'],
            $array['received_bytes'],
            $array['duration'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'network_type'   => $this->networkType->typeSerialize(),
            'sent_bytes'     => $this->sentBytes,
            'received_bytes' => $this->receivedBytes,
            'duration'       => $this->duration,
        ];
    }
}
