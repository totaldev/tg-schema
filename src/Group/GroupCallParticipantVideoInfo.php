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
    public const TYPE_NAME = 'groupCallParticipantVideoInfo';

    public function __construct(
        /**
         * List of synchronization source groups of the video.
         *
         * @var GroupCallVideoSourceGroup[]
         */
        protected array  $sourceGroups,
        /**
         * Video channel endpoint identifier.
         */
        protected string $endpointId,
        /**
         * True, if the video is paused. This flag needs to be ignored, if new video frames are received.
         */
        protected bool   $isPaused
    ) {}

    public static function fromArray(array $array): GroupCallParticipantVideoInfo
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['source_groups']),
            $array['endpoint_id'],
            $array['is_paused'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'source_groups' => array_map(static fn($x) => $x->typeSerialize(), $this->sourceGroups),
            'endpoint_id'   => $this->endpointId,
            'is_paused'     => $this->isPaused,
        ];
    }
}
