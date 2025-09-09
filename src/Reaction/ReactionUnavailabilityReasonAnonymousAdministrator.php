<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Reaction;

/**
 * The user is an anonymous administrator in the supergroup, but isn't a creator of it, so they can't vote on behalf of the supergroup.
 */
class ReactionUnavailabilityReasonAnonymousAdministrator extends ReactionUnavailabilityReason
{
    public const TYPE_NAME = 'reactionUnavailabilityReasonAnonymousAdministrator';

    public function __construct()
    {
        parent::__construct();
    }

    public static function fromArray(array $array): ReactionUnavailabilityReasonAnonymousAdministrator
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
