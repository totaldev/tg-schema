<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Giveaway;

/**
 * The user participates in the giveaway.
 */
class GiveawayParticipantStatusParticipating extends GiveawayParticipantStatus
{
    public const TYPE_NAME = 'giveawayParticipantStatusParticipating';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): GiveawayParticipantStatusParticipating
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
