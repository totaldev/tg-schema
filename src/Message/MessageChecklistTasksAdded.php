<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Checklist\ChecklistTask;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Some tasks were added to a checklist.
 */
class MessageChecklistTasksAdded extends MessageContent
{
    public const string TYPE_NAME = 'messageChecklistTasksAdded';

    public function __construct(
        /**
         * Identifier of the message with the checklist; may be 0 or an identifier of a deleted message.
         */
        protected int   $checklistMessageId,
        /**
         * List of tasks added to the checklist.
         *
         * @var ChecklistTask[]
         */
        protected array $tasks,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageChecklistTasksAdded
    {
        return new static(
            checklistMessageId: $array['checklist_message_id'],
            tasks             : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['tasks']),
        );
    }

    public function getChecklistMessageId(): int
    {
        return $this->checklistMessageId;
    }

    public function getTasks(): array
    {
        return $this->tasks;
    }

    public function setChecklistMessageId(int $value): static
    {
        $this->checklistMessageId = $value;

        return $this;
    }

    public function setTasks(array $value): static
    {
        $this->tasks = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'checklist_message_id' => $this->checklistMessageId,
            'tasks'                => array_map(static fn($x) => $x->jsonSerialize(), $this->tasks),
        ];
    }
}
