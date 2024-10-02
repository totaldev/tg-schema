<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Giveaway;

use Totaldev\TgSchema\TdObject;

/**
 * Contains information about status of a user in a giveaway.
 */
class GiveawayParticipantStatus extends TdObject
{
    public const TYPE_NAME = 'GiveawayParticipantStatus';

    public function __construct() {}

    public static function fromArray(array $array): GiveawayParticipantStatus
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
