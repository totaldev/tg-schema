<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Giveaway;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes an ongoing giveaway.
 */
class GiveawayInfoOngoing extends GiveawayInfo
{
    public const TYPE_NAME = 'giveawayInfoOngoing';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the giveaway was created.
         */
        protected int                       $creationDate,
        /**
         * Status of the current user in the giveaway.
         */
        protected GiveawayParticipantStatus $status,
        /**
         * True, if the giveaway has ended and results are being prepared.
         */
        protected bool                      $isEnded,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): GiveawayInfoOngoing
    {
        return new static(
            $array['creation_date'],
            TdSchemaRegistry::fromArray($array['status']),
            $array['is_ended'],
        );
    }

    public function getCreationDate(): int
    {
        return $this->creationDate;
    }

    public function getIsEnded(): bool
    {
        return $this->isEnded;
    }

    public function getStatus(): GiveawayParticipantStatus
    {
        return $this->status;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'creation_date' => $this->creationDate,
            'status'        => $this->status->typeSerialize(),
            'is_ended'      => $this->isEnded,
        ];
    }
}
