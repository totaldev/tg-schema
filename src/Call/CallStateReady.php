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
    public const TYPE_NAME = 'callStateReady';

    public function __construct(
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
        /**
         * A JSON-encoded call config.
         */
        protected string       $config,
        /**
         * Call encryption key.
         */
        protected string       $encryptionKey,
        /**
         * Encryption key fingerprint represented as 4 emoji.
         *
         * @var string[]
         */
        protected array        $emojis,
        /**
         * True, if peer-to-peer connection is allowed by users privacy settings.
         */
        protected bool         $allowP2p,
        /**
         * True, if the other party supports upgrading of the call to a group call.
         */
        protected bool         $isGroupCallSupported,
        /**
         * Custom JSON-encoded call parameters to be passed to tgcalls.
         */
        protected string       $customParameters,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): CallStateReady
    {
        return new static(
            TdSchemaRegistry::fromArray($array['protocol']),
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['servers']),
            $array['config'],
            $array['encryption_key'],
            $array['emojis'],
            $array['allow_p2p'],
            $array['is_group_call_supported'],
            $array['custom_parameters'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'protocol'                => $this->protocol->typeSerialize(),
            array_map(static fn($x) => $x->typeSerialize(), $this->servers),
            'config'                  => $this->config,
            'encryption_key'          => $this->encryptionKey,
            'emojis'                  => $this->emojis,
            'allow_p2p'               => $this->allowP2p,
            'is_group_call_supported' => $this->isGroupCallSupported,
            'custom_parameters'       => $this->customParameters,
        ];
    }
}
