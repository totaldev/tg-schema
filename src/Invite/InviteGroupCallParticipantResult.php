<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Invite;

use Totaldev\TgSchema\TdObject;

/**
 * Describes result of group call participant invitation.
 */
class InviteGroupCallParticipantResult extends TdObject
{
    public const TYPE_NAME = 'InviteGroupCallParticipantResult';

    public function __construct() {}

    public static function fromArray(array $array): InviteGroupCallParticipantResult
    {
        return new static();
    }

    public function typeSerialize(): array
    {
        return ['@type' => static::TYPE_NAME];
    }
}
