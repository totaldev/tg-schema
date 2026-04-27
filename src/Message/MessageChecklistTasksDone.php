<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * Some tasks from a checklist were marked as done or not done.
 */
class MessageChecklistTasksDone extends MessageContent
{
    public const string TYPE_NAME = 'messageChecklistTasksDone';

    public function __construct(
        /**
         * Identifier of the message with the checklist; can be 0 if the message was deleted.
         */
        protected int   $checklistMessageId,
        /**
         * Identifiers of tasks that were marked as done.
         *
         * @var int[]
         */
        protected array $markedAsDoneTaskIds,
        /**
         * Identifiers of tasks that were marked as not done.
         *
         * @var int[]
         */
        protected array $markedAsNotDoneTaskIds,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageChecklistTasksDone
    {
        return new static(
            checklistMessageId    : $array['checklist_message_id'],
            markedAsDoneTaskIds   : $array['marked_as_done_task_ids'],
            markedAsNotDoneTaskIds: $array['marked_as_not_done_task_ids'],
        );
    }

    public function getChecklistMessageId(): int
    {
        return $this->checklistMessageId;
    }

    public function getMarkedAsDoneTaskIds(): array
    {
        return $this->markedAsDoneTaskIds;
    }

    public function getMarkedAsNotDoneTaskIds(): array
    {
        return $this->markedAsNotDoneTaskIds;
    }

    public function setChecklistMessageId(int $value): static
    {
        $this->checklistMessageId = $value;

        return $this;
    }

    public function setMarkedAsDoneTaskIds(array $value): static
    {
        $this->markedAsDoneTaskIds = $value;

        return $this;
    }

    public function setMarkedAsNotDoneTaskIds(array $value): static
    {
        $this->markedAsNotDoneTaskIds = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                       => static::TYPE_NAME,
            'checklist_message_id'        => $this->checklistMessageId,
            'marked_as_done_task_ids'     => $this->markedAsDoneTaskIds,
            'marked_as_not_done_task_ids' => $this->markedAsNotDoneTaskIds,
        ];
    }
}
