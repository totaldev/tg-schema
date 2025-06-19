<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * The verification state of an encrypted group call has changed; for group calls not bound to a chat only.
 */
class UpdateGroupCallVerificationState extends Update
{
    public const TYPE_NAME = 'updateGroupCallVerificationState';

    public function __construct(
        /**
         * Identifier of the group call.
         */
        protected int   $groupCallId,
        /**
         * The call state generation to which the emoji corresponds. If generation is different for two users, then their emoji may be also different.
         */
        protected int   $generation,
        /**
         * Group call state fingerprint represented as 4 emoji; may be empty if the state isn't verified yet.
         *
         * @var string[]
         */
        protected array $emojis
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateGroupCallVerificationState
    {
        return new static(
            $array['group_call_id'],
            $array['generation'],
            $array['emojis'],
        );
    }

    public function getEmojis(): array
    {
        return $this->emojis;
    }

    public function getGeneration(): int
    {
        return $this->generation;
    }

    public function getGroupCallId(): int
    {
        return $this->groupCallId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'group_call_id' => $this->groupCallId,
            'generation'    => $this->generation,
            'emojis'        => $this->emojis,
        ];
    }
}
