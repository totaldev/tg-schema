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
    public const TYPE_NAME = 'groupCallParticipants';

    public function __construct(
        /**
         * Total number of group call participants.
         */
        protected int   $totalCount,
        /**
         * Identifiers of the participants.
         *
         * @var MessageSender[]
         */
        protected array $participantIds
    ) {}

    public static function fromArray(array $array): GroupCallParticipants
    {
        return new static(
            $array['total_count'],
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['participant_ids']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'total_count'     => $this->totalCount,
            'participant_ids' => array_map(static fn($x) => $x->typeSerialize(), $this->participantIds),
        ];
    }
}
