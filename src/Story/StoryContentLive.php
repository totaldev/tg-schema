<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Story;

/**
 * A live story.
 */
class StoryContentLive extends StoryContent
{
    public const string TYPE_NAME = 'storyContentLive';

    public function __construct(
        /**
         * Identifier of the corresponding group call. The group call can be received through the method getGroupCall.
         */
        protected int  $groupCallId,
        /**
         * True, if the call is an RTMP stream instead of an ordinary group call.
         */
        protected bool $isRtmpStream,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StoryContentLive
    {
        return new static(
            groupCallId : $array['group_call_id'],
            isRtmpStream: $array['is_rtmp_stream'],
        );
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function getIsRtmpStream(): bool
    {
        return $this->isRtmpStream;
    }

    public function setGroupCallId(int $value): static
    {
        $this->groupCallId = $value;

        return $this;
    }

    public function setIsRtmpStream(bool $value): static
    {
        $this->isRtmpStream = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'group_call_id'  => $this->groupCallId,
            'is_rtmp_stream' => $this->isRtmpStream,
        ];
    }
}
