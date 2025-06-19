<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Call;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a call.
 */
class Call extends TdObject
{
    public const TYPE_NAME = 'call';

    public function __construct(
        /**
         * Call identifier, not persistent.
         */
        protected int       $id,
        /**
         * User identifier of the other call participant.
         */
        protected int       $userId,
        /**
         * True, if the call is outgoing.
         */
        protected bool      $isOutgoing,
        /**
         * True, if the call is a video call.
         */
        protected bool      $isVideo,
        /**
         * Call state.
         */
        protected CallState $state
    ) {}

    public static function fromArray(array $array): Call
    {
        return new static(
            $array['id'],
            $array['user_id'],
            $array['is_outgoing'],
            $array['is_video'],
            TdSchemaRegistry::fromArray($array['state']),
        );
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getIsOutgoing(): bool
    {
        return $this->isOutgoing;
    }

    public function getIsVideo(): bool
    {
        return $this->isVideo;
    }

    public function getState(): CallState
    {
        return $this->state;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'id'          => $this->id,
            'user_id'     => $this->userId,
            'is_outgoing' => $this->isOutgoing,
            'is_video'    => $this->isVideo,
            'state'       => $this->state->typeSerialize(),
        ];
    }
}
