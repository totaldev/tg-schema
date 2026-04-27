<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Poll;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a poll voter.
 */
class PollVoter extends TdObject
{
    public const string TYPE_NAME = 'pollVoter';

    public function __construct(
        /**
         * Point in time (Unix timestamp) when the vote was added.
         */
        protected int           $date,
        /**
         * The voter identifier.
         */
        protected MessageSender $voterId,
    ) {}

    public static function fromArray(array $array): PollVoter
    {
        return new static(
            date   : $array['date'],
            voterId: TdSchemaRegistry::fromArray($array['voter_id']),
        );
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getVoterId(): MessageSender
    {
        return $this->voterId;
    }

    public function setDate(int $value): static
    {
        $this->date = $value;

        return $this;
    }

    public function setVoterId(MessageSender $value): static
    {
        $this->voterId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'date'     => $this->date,
            'voter_id' => $this->voterId->jsonSerialize(),
        ];
    }
}
