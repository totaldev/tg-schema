<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A user changed the answer to a poll; for bots only
 */
class UpdatePollAnswer extends Update
{
    public const TYPE_NAME = 'updatePollAnswer';

    /**
     * 0-based identifiers of answer options, chosen by the user
     *
     * @var int[]
     */
    protected array $optionIds;

    /**
     * Unique poll identifier
     *
     * @var int
     */
    protected int $pollId;

    /**
     * Identifier of the message sender that changed the answer to the poll
     *
     * @var MessageSender
     */
    protected MessageSender $voterId;

    public function __construct(int $pollId, MessageSender $voterId, array $optionIds)
    {
        parent::__construct();

        $this->pollId = $pollId;
        $this->voterId = $voterId;
        $this->optionIds = $optionIds;
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'poll_id' => $this->pollId,
            'voter_id' => $this->voterId->typeSerialize(),
            'option_ids' => $this->optionIds,
        ];
    }
}
