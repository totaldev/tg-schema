<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Group;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains identifiers of group call participants.
 */
class GroupCallParticipants extends TdObject
{
    public const string TYPE_NAME = 'groupCallParticipants';

    public function __construct(
        /**
         * Identifiers of the participants.
         *
         * @var MessageSender[]
         */
        protected array $participantIds,
        /**
         * Total number of group call participants.
         */
        protected int   $totalCount,
    ) {}

    public static function fromArray(array $array): GroupCallParticipants
    {
        return new static(
            participantIds: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['participant_ids']),
            totalCount    : $array['total_count'],
        );
    }

    public function getParticipantIds(): array
    {
        return $this->participantIds;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function setParticipantIds(array $value): static
    {
        $this->participantIds = $value;

        return $this;
    }

    public function setTotalCount(int $value): static
    {
        $this->totalCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'participant_ids' => array_map(static fn($x) => $x->jsonSerialize(), $this->participantIds),
            'total_count'     => $this->totalCount,
        ];
    }
}
