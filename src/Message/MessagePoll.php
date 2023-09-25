<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Poll\Poll;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A message with a poll
 */
class MessagePoll extends MessageContent
{
    public const TYPE_NAME = 'messagePoll';

    /**
     * The poll description
     *
     * @var Poll
     */
    protected Poll $poll;

    public function __construct(Poll $poll)
    {
        parent::__construct();

        $this->poll = $poll;
    }

    public static function fromArray(array $array): MessagePoll
    {
        return new static(
            TdSchemaRegistry::fromArray($array['poll']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'poll' => $this->poll->typeSerialize(),
        ];
    }

    public function getPoll(): Poll
    {
        return $this->poll;
    }
}
