<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Reaction;

use Totaldev\TgSchema\TdObject;

/**
 * Describes why the current user can't add reactions to the message, despite some other users can.
 */
class ReactionUnavailabilityReason extends TdObject
{
    public const TYPE_NAME = 'ReactionUnavailabilityReason';

    public function __construct() {}

    public static function fromArray(array $array): ReactionUnavailabilityReason
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
