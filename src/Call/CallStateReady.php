<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Call;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The call is ready to use.
 */
class CallStateReady extends CallState
{
    public const string TYPE_NAME = 'callStateReady';

    public function __construct(
        /**
         * True, if peer-to-peer connection is allowed by users privacy settings.
         */
        protected bool         $allowP2p,
        /**
         * A JSON-encoded call config.
         */
        protected string       $config,
        /**
         * Custom JSON-encoded call parameters to be passed to tgcalls.
         */
        protected string       $customParameters,
        /**
         * Encryption key fingerprint represented as 4 emoji.
         *
         * @var string[]
         */
        protected array        $emojis,
        /**
         * Call encryption key.
         */
        protected string       $encryptionKey,
        /**
         * True, if the other party supports upgrading of the call to a group call.
         */
        protected bool         $isGroupCallSupported,
        /**
         * Call protocols supported by the other call participant.
         */
        protected CallProtocol $protocol,
        /**
         * List of available call servers.
         *
         * @var CallServer[]
         */
        protected array        $servers,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): CallStateReady
    {
        return new static(
            allowP2p            : $array['allow_p2p'],
            config              : $array['config'],
            customParameters    : $array['custom_parameters'],
            emojis              : $array['emojis'],
            encryptionKey       : $array['encryption_key'],
            isGroupCallSupported: $array['is_group_call_supported'],
            protocol            : TdSchemaRegistry::fromArray($array['protocol']),
            servers             : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['servers']),
        );
    }

    public function getAllowP2p(): bool
    {
        return $this->allowP2p;
    }

    public function getConfig(): string
    {
        return $this->config;
    }

    public function getCustomParameters(): string
    {
        return $this->customParameters;
    }

    public function getEmojis(): array
    {
        return $this->emojis;
    }

    public function getEncryptionKey(): string
    {
        return $this->encryptionKey;
    }

    public function getIsGroupCallSupported(): bool
    {
        return $this->isGroupCallSupported;
    }

    public function getProtocol(): CallProtocol
    {
        return $this->protocol;
    }

    public function getServers(): array
    {
        return $this->servers;
    }

    public function setAllowP2p(bool $value): static
    {
        $this->allowP2p = $value;

        return $this;
    }

    public function setConfig(string $value): static
    {
        $this->config = $value;

        return $this;
    }

    public function setCustomParameters(string $value): static
    {
        $this->customParameters = $value;

        return $this;
    }

    public function setEmojis(array $value): static
    {
        $this->emojis = $value;

        return $this;
    }

    public function setEncryptionKey(string $value): static
    {
        $this->encryptionKey = $value;

        return $this;
    }

    public function setIsGroupCallSupported(bool $value): static
    {
        $this->isGroupCallSupported = $value;

        return $this;
    }

    public function setProtocol(CallProtocol $value): static
    {
        $this->protocol = $value;

        return $this;
    }

    public function setServers(array $value): static
    {
        $this->servers = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'allow_p2p'               => $this->allowP2p,
            'config'                  => $this->config,
            'custom_parameters'       => $this->customParameters,
            'emojis'                  => $this->emojis,
            'encryption_key'          => $this->encryptionKey,
            'is_group_call_supported' => $this->isGroupCallSupported,
            'protocol'                => $this->protocol->jsonSerialize(),
            'servers'                 => array_map(static fn($x) => $x->jsonSerialize(), $this->servers),
        ];
    }
}
