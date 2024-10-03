<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Poll\Poll;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A poll was updated; for bots only.
 */
class UpdatePoll extends Update
{
    public const TYPE_NAME = 'updatePoll';

    public function __construct(
        /**
         * New data about the poll.
         */
        protected Poll $poll
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdatePoll
    {
        return new static(
            TdSchemaRegistry::fromArray($array['poll']),
        );
    }

    public function getPoll(): Poll
    {
        return $this->poll;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'poll'  => $this->poll->typeSerialize(),
        ];
    }
}
