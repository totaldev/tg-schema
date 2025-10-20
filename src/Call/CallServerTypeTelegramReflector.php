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
    public const TYPE_NAME = 'callServerTypeTelegramReflector';

    public function __construct(
        /**
         * A peer tag to be used with the reflector.
         */
        protected string $peerTag,
        /**
         * True, if the server uses TCP instead of UDP.
         */
        protected bool   $isTcp,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): CallServerTypeTelegramReflector
    {
        return new static(
            $array['peer_tag'],
            $array['is_tcp'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'peer_tag' => $this->peerTag,
            'is_tcp'   => $this->isTcp,
        ];
    }
}
