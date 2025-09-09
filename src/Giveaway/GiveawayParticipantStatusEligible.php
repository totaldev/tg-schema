<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Giveaway;

/**
 * The user is eligible for the giveaway.
 */
class GiveawayParticipantStatusEligible extends GiveawayParticipantStatus
{
    public const TYPE_NAME = 'giveawayParticipantStatusEligible';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): GiveawayParticipantStatusEligible
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
