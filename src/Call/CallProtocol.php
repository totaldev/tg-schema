<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Call;

use Totaldev\TgSchema\TdObject;

/**
 * Specifies the supported call protocols.
 */
class CallProtocol extends TdObject
{
    public const string TYPE_NAME = 'callProtocol';

    public function __construct(
        /**
         * True, if UDP peer-to-peer connections are supported.
         */
        protected bool  $udpP2p,
        /**
         * True, if connection through UDP reflectors is supported.
         */
        protected bool  $udpReflector,
        /**
         * The minimum supported API layer; use 65.
         */
        protected int   $minLayer,
        /**
         * The maximum supported API layer; use 92.
         */
        protected int   $maxLayer,
        /**
         * List of supported tgcalls versions.
         *
         * @var string[]
         */
        protected array $libraryVersions,
    ) {}

    public static function fromArray(array $array): CallProtocol
    {
        return new static(
            $array['udp_p2p'],
            $array['udp_reflector'],
            $array['min_layer'],
            $array['max_layer'],
            $array['library_versions'],
        );
    }

    public function getLibraryVersions(): array
    {
        return $this->libraryVersions;
    }

    public function getMaxLayer(): int
    {
        return $this->maxLayer;
    }

    public function getMinLayer(): int
    {
        return $this->minLayer;
    }

    public function getUdpP2p(): bool
    {
        return $this->udpP2p;
    }

    public function getUdpReflector(): bool
    {
        return $this->udpReflector;
    }

    public function setLibraryVersions(array $value): static
    {
        $this->libraryVersions = $value;

        return $this;
    }

    public function setMaxLayer(int $value): static
    {
        $this->maxLayer = $value;

        return $this;
    }

    public function setMinLayer(int $value): static
    {
        $this->minLayer = $value;

        return $this;
    }

    public function setUdpP2p(bool $value): static
    {
        $this->udpP2p = $value;

        return $this;
    }

    public function setUdpReflector(bool $value): static
    {
        $this->udpReflector = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'udp_p2p'          => $this->udpP2p,
            'udp_reflector'    => $this->udpReflector,
            'min_layer'        => $this->minLayer,
            'max_layer'        => $this->maxLayer,
            'library_versions' => $this->libraryVersions,
        ];
    }
}
