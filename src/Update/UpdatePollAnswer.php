<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A user changed the answer to a poll; for bots only.
 */
class UpdatePollAnswer extends Update
{
    public const string TYPE_NAME = 'updatePollAnswer';

    public function __construct(
        /**
         * Unique poll identifier.
         */
        protected int           $pollId,
        /**
         * Identifier of the message sender that changed the answer to the poll.
         */
        protected MessageSender $voterId,
        /**
         * 0-based identifiers of answer options, chosen by the user.
         *
         * @var int[]
         */
        protected array         $optionIds,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdatePollAnswer
    {
        return new static(
            $array['poll_id'],
            TdSchemaRegistry::fromArray($array['voter_id']),
            $array['option_ids'],
        );
    }

    public function getOptionIds(): array
    {
        return $this->optionIds;
    }

    public function getPollId(): int
    {
        return $this->pollId;
    }

    public function getVoterId(): MessageSender
    {
        return $this->voterId;
    }

    public function setOptionIds(array $value): static
    {
        $this->optionIds = $value;

        return $this;
    }

    public function setPollId(int $value): static
    {
        $this->pollId = $value;

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
            '@type'      => static::TYPE_NAME,
            'poll_id'    => $this->pollId,
            'voter_id'   => $this->voterId->typeSerialize(),
            'option_ids' => $this->optionIds,
        ];
    }
}
