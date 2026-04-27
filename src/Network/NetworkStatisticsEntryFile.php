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
    public const string TYPE_NAME = 'networkStatisticsEntryFile';

    public function __construct(
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
        /**
         * Type of the file the data is part of; pass null if the data isn't related to files.
         */
        protected ?FileType   $fileType = null,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): NetworkStatisticsEntryFile
    {
        return new static(
            fileType     : (isset($array['file_type']) ? TdSchemaRegistry::fromArray($array['file_type']) : null),
            networkType  : TdSchemaRegistry::fromArray($array['network_type']),
            receivedBytes: $array['received_bytes'],
            sentBytes    : $array['sent_bytes'],
        );
    }

    public function getFileType(): ?FileType
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

    public function setFileType(?FileType $value): static
    {
        $this->fileType = $value;

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
            'file_type'      => (null !== $this->fileType ? $this->fileType->jsonSerialize() : null),
            'network_type'   => $this->networkType->jsonSerialize(),
            'received_bytes' => $this->receivedBytes,
            'sent_bytes'     => $this->sentBytes,
        ];
    }
}
