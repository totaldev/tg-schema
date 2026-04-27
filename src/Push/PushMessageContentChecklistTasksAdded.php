<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

/**
 * Some tasks were added to a checklist.
 */
class PushMessageContentChecklistTasksAdded extends PushMessageContent
{
    public const string TYPE_NAME = 'pushMessageContentChecklistTasksAdded';

    public function __construct(
        /**
         * Number of added tasks.
         */
        protected int $taskCount
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentChecklistTasksAdded
    {
        return new static(
            taskCount: $array['task_count'],
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
