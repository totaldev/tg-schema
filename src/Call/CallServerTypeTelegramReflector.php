<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Call;

/**
 * A Telegram call reflector.
 */
class CallServerTypeTelegramReflector extends CallServerType
{
    public const string TYPE_NAME = 'callServerTypeTelegramReflector';

    public function __construct(
        /**
         * True, if the server uses TCP instead of UDP.
         */
        protected bool   $isTcp,
        /**
         * A peer tag to be used with the reflector.
         */
        protected string $peerTag,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): CallServerTypeTelegramReflector
    {
        return new static(
            isTcp  : $array['is_tcp'],
            peerTag: $array['peer_tag'],
        );
    }

    public function getIsTcp(): bool
    {
        return $this->isTcp;
    }

    public function getPeerTag(): string
    {
        return $this->peerTag;
    }

    public function setIsTcp(bool $value): static
    {
        $this->isTcp = $value;

        return $this;
    }

    public function setPeerTag(string $value): static
    {
        $this->peerTag = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'is_tcp'   => $this->isTcp,
            'peer_tag' => $this->peerTag,
        ];
    }
}
