<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a checklist to be sent.
 */
class InputChecklist extends TdObject
{
    public const string TYPE_NAME = 'inputChecklist';

    public function __construct(
        /**
         * True, if other users can add tasks to the list.
         */
        protected bool          $othersCanAddTasks,
        /**
         * True, if other users can mark tasks as done or not done.
         */
        protected bool          $othersCanMarkTasksAsDone,
        /**
         * List of tasks in the checklist; 1-getOption("checklist_task_count_max") tasks.
         *
         * @var InputChecklistTask[]
         */
        protected array         $tasks,
        /**
         * Title of the checklist; 1-getOption("checklist_title_length_max") characters. May contain only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities.
         */
        protected FormattedText $title,
    ) {}

    public static function fromArray(array $array): InputChecklist
    {
        return new static(
            othersCanAddTasks       : $array['others_can_add_tasks'],
            othersCanMarkTasksAsDone: $array['others_can_mark_tasks_as_done'],
            tasks                   : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['tasks']),
            title                   : TdSchemaRegistry::fromArray($array['title']),
        );
    }

    public function getOthersCanAddTasks(): bool
    {
        return $this->othersCanAddTasks;
    }

    public function getOthersCanMarkTasksAsDone(): bool
    {
        return $this->othersCanMarkTasksAsDone;
    }

    public function getTasks(): array
    {
        return $this->tasks;
    }

    public function getTitle(): FormattedText
    {
        return $this->title;
    }

    public function setOthersCanAddTasks(bool $value): static
    {
        $this->othersCanAddTasks = $value;

        return $this;
    }

    public function setOthersCanMarkTasksAsDone(bool $value): static
    {
        $this->othersCanMarkTasksAsDone = $value;

        return $this;
    }

    public function setTasks(array $value): static
    {
        $this->tasks = $value;

        return $this;
    }

    public function setTitle(FormattedText $value): static
    {
        $this->title = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                         => static::TYPE_NAME,
            'others_can_add_tasks'          => $this->othersCanAddTasks,
            'others_can_mark_tasks_as_done' => $this->othersCanMarkTasksAsDone,
            'tasks'                         => array_map(static fn($x) => $x->jsonSerialize(), $this->tasks),
            'title'                         => $this->title->jsonSerialize(),
        ];
    }
}
