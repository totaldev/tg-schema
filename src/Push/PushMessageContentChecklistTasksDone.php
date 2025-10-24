<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

/**
 * Some tasks from a checklist were marked as done or not done.
 */
class PushMessageContentChecklistTasksDone extends PushMessageContent
{
    public const string TYPE_NAME = 'pushMessageContentChecklistTasksDone';

    public function __construct(
        /**
         * Number of changed tasks.
         */
        protected int $taskCount
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentChecklistTasksDone
    {
        return new static(
            $array['task_count'],
        );
    }

    public function getTaskCount(): int
    {
        return $this->taskCount;
    }

    public function setTaskCount(int $value): static
    {
        $this->taskCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'task_count' => $this->taskCount,
        ];
    }
}
