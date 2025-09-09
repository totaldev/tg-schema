<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Reaction;

/**
 * The user isn't a member of the supergroup and can't send messages and reactions there without joining.
 */
class ReactionUnavailabilityReasonGuest extends ReactionUnavailabilityReason
{
    public const TYPE_NAME = 'reactionUnavailabilityReasonGuest';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ReactionUnavailabilityReasonGuest
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
