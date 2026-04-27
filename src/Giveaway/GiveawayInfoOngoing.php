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
    public const string TYPE_NAME = 'giveawayInfoOngoing';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the giveaway was created.
         */
        protected int                       $creationDate,
        /**
         * True, if the giveaway has ended and results are being prepared.
         */
        protected bool                      $isEnded,
        /**
         * Status of the current user in the giveaway.
         */
        protected GiveawayParticipantStatus $status,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): GiveawayInfoOngoing
    {
        return new static(
            creationDate: $array['creation_date'],
            isEnded     : $array['is_ended'],
            status      : TdSchemaRegistry::fromArray($array['status']),
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

    public function setCreationDate(int $value): static
    {
        $this->creationDate = $value;

        return $this;
    }

    public function setIsEnded(bool $value): static
    {
        $this->isEnded = $value;

        return $this;
    }

    public function setStatus(GiveawayParticipantStatus $value): static
    {
        $this->status = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'creation_date' => $this->creationDate,
            'is_ended'      => $this->isEnded,
            'status'        => $this->status->jsonSerialize(),
        ];
    }
}
