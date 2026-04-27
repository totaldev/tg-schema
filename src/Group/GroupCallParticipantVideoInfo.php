<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Group;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains information about a group call participant's video channel.
 */
class GroupCallParticipantVideoInfo extends TdObject
{
    public const string TYPE_NAME = 'groupCallParticipantVideoInfo';

    public function __construct(
        /**
         * Video channel endpoint identifier.
         */
        protected string $endpointId,
        /**
         * True, if the video is paused. This flag needs to be ignored, if new video frames are received.
         */
        protected bool   $isPaused,
        /**
         * List of synchronization source groups of the video.
         *
         * @var GroupCallVideoSourceGroup[]
         */
        protected array  $sourceGroups,
    ) {}

    public static function fromArray(array $array): GroupCallParticipantVideoInfo
    {
        return new static(
            endpointId  : $array['endpoint_id'],
            isPaused    : $array['is_paused'],
            sourceGroups: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['source_groups']),
        );
    }

    public function getEndpointId(): string
    {
        return $this->endpointId;
    }

    public function getIsPaused(): bool
    {
        return $this->isPaused;
    }

    public function getSourceGroups(): array
    {
        return $this->sourceGroups;
    }

    public function setEndpointId(string $value): static
    {
        $this->endpointId = $value;

        return $this;
    }

    public function setIsPaused(bool $value): static
    {
        $this->isPaused = $value;

        return $this;
    }

    public function setSourceGroups(array $value): static
    {
        $this->sourceGroups = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'endpoint_id'   => $this->endpointId,
            'is_paused'     => $this->isPaused,
            'source_groups' => array_map(static fn($x) => $x->jsonSerialize(), $this->sourceGroups),
        ];
    }
}
