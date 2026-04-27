<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Mark;

use Totaldev\TgSchema\TdFunction;

/**
 * Adds tasks of a checklist in a message as done or not done.
 */
class MarkChecklistTasksAsDone extends TdFunction
{
    public const string TYPE_NAME = 'markChecklistTasksAsDone';

    public function __construct(
        /**
         * Identifier of the chat with the message.
         */
        protected int   $chatId,
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
        /**
         * Identifier of the message containing the checklist. Use messageProperties.can_mark_tasks_as_done to check whether the tasks can be marked as done or not done.
         */
        protected int   $messageId,
    ) {}

    public static function fromArray(array $array): MarkChecklistTasksAsDone
    {
        return new static(
            chatId                : $array['chat_id'],
            markedAsDoneTaskIds   : $array['marked_as_done_task_ids'],
            markedAsNotDoneTaskIds: $array['marked_as_not_done_task_ids'],
            messageId             : $array['message_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMarkedAsDoneTaskIds(): array
    {
        return $this->markedAsDoneTaskIds;
    }

    public function getMarkedAsNotDoneTaskIds(): array
    {
        return $this->markedAsNotDoneTaskIds;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

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

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                       => static::TYPE_NAME,
            'chat_id'                     => $this->chatId,
            'marked_as_done_task_ids'     => $this->markedAsDoneTaskIds,
            'marked_as_not_done_task_ids' => $this->markedAsNotDoneTaskIds,
            'message_id'                  => $this->messageId,
        ];
    }
}
