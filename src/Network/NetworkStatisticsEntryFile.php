<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Network;

use Totaldev\TgSchema\File\FileType;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about the total amount of data that was used to send and receive files.
 */
class NetworkStatisticsEntryFile extends NetworkStatisticsEntry
{
    public const TYPE_NAME = 'networkStatisticsEntryFile';

    public function __construct(
        /**
         * Type of the file the data is part of; pass null if the data isn't related to files.
         */
        protected FileType    $fileType,
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
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): NetworkStatisticsEntryFile
    {
        return new static(
            TdSchemaRegistry::fromArray($array['file_type']),
            TdSchemaRegistry::fromArray($array['network_type']),
            $array['sent_bytes'],
            $array['received_bytes'],
        );
    }

    public function getFileType(): FileType
    {
        return $this->fileType;
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
            'file_type'      => $this->fileType->typeSerialize(),
            'network_type'   => $this->networkType->typeSerialize(),
            'sent_bytes'     => $this->sentBytes,
            'received_bytes' => $this->receivedBytes,
        ];
    }
}
