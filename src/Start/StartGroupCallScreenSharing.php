<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Start;

use Totaldev\TgSchema\TdFunction;

/**
 * Starts screen sharing in a joined group call. Returns join response payload for tgcalls.
 */
class StartGroupCallScreenSharing extends TdFunction
{
    public const TYPE_NAME = 'startGroupCallScreenSharing';

    public function __construct(
        /**
         * Group call identifier.
         */
        protected int    $groupCallId,
        /**
         * Screen sharing audio channel synchronization source identifier; received from tgcalls.
         */
        protected int    $audioSourceId,
        /**
         * Group call join payload; received from tgcalls.
         */
        protected string $payload
    ) {}

    public static function fromArray(array $array): StartGroupCallScreenSharing
    {
        return new static(
            $array['group_call_id'],
            $array['audio_source_id'],
            $array['payload'],
        );
    }

    public function getAudioSourceId(): int
    {
        return $this->audioSourceId;
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getPayload(): string
    {
        return $this->payload;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'group_call_id'   => $this->groupCallId,
            'audio_source_id' => $this->audioSourceId,
            'payload'         => $this->payload,
        ];
    }
}
