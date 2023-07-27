<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Discard;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Discards a call
 */
class DiscardCall extends TdFunction
{
    public const TYPE_NAME = 'discardCall';

    /**
     * Call identifier
     *
     * @var int
     */
    protected int $callId;

    /**
     * Pass true if the user was disconnected
     *
     * @var bool
     */
    protected bool $isDisconnected;

    /**
     * The call duration, in seconds
     *
     * @var int
     */
    protected int $duration;

    /**
     * Pass true if the call was a video call
     *
     * @var bool
     */
    protected bool $isVideo;

    /**
     * Identifier of the connection used during the call
     *
     * @var int
     */
    protected int $connectionId;

    public function __construct(int $callId, bool $isDisconnected, int $duration, bool $isVideo, int $connectionId)
    {
        $this->callId = $callId;
        $this->isDisconnected = $isDisconnected;
        $this->duration = $duration;
        $this->isVideo = $isVideo;
        $this->connectionId = $connectionId;
    }

    public static function fromArray(array $array): DiscardCall
    {
        return new static(
            $array['call_id'],
            $array['is_disconnected'],
            $array['duration'],
            $array['is_video'],
            $array['connection_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'call_id' => $this->callId,
            'is_disconnected' => $this->isDisconnected,
            'duration' => $this->duration,
            'is_video' => $this->isVideo,
            'connection_id' => $this->connectionId,
        ];
    }

    public function getCallId(): int
    {
        return $this->callId;
    }

    public function getIsDisconnected(): bool
    {
        return $this->isDisconnected;
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function getIsVideo(): bool
    {
        return $this->isVideo;
    }

    public function getConnectionId(): int
    {
        return $this->connectionId;
    }
}