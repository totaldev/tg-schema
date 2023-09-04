<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Call;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A Telegram call reflector
 */
class CallServerTypeTelegramReflector extends CallServerType
{
    public const TYPE_NAME = 'callServerTypeTelegramReflector';

    /**
     * A peer tag to be used with the reflector
     *
     * @var string
     */
    protected string $peerTag;

    /**
     * True, if the server uses TCP instead of UDP
     *
     * @var bool
     */
    protected bool $isTcp;

    public function __construct(string $peerTag, bool $isTcp)
    {
        parent::__construct();

        $this->peerTag = $peerTag;
        $this->isTcp = $isTcp;
    }

    public static function fromArray(array $array): CallServerTypeTelegramReflector
    {
        return new static(
            $array['peer_tag'],
            $array['is_tcp'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'peer_tag' => $this->peerTag,
            'is_tcp' => $this->isTcp,
        ];
    }

    public function getPeerTag(): string
    {
        return $this->peerTag;
    }

    public function getIsTcp(): bool
    {
        return $this->isTcp;
    }
}
