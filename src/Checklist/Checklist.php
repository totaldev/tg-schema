<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Checklist;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a checklist.
 */
class Checklist extends TdObject
{
    public const string TYPE_NAME = 'checklist';

    public function __construct(
        /**
         * Title of the checklist; may contain only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities.
         */
        protected FormattedText $title,
        /**
         * List of tasks in the checklist.
         *
         * @var ChecklistTask[]
         */
        protected array         $tasks,
        /**
         * True, if users other than creator of the list can add tasks to the list.
         */
        protected bool          $othersCanAddTasks,
        /**
         * True, if the current user can add tasks to the list if they have Telegram Premium subscription.
         */
        protected bool          $canAddTasks,
        /**
         * True, if users other than creator of the list can mark tasks as done or not done. If true, then the checklist is called "group checklist".
         */
        protected bool          $othersCanMarkTasksAsDone,
        /**
         * True, if the current user can mark tasks as done or not done if they have Telegram Premium subscription.
         */
        protected bool          $canMarkTasksAsDone,
    ) {}

    public static function fromArray(array $array): Checklist
    {
        return new static(
            TdSchemaRegistry::fromArray($array['title']),
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['tasks']),
            $array['others_can_add_tasks'],
            $array['can_add_tasks'],
            $array['others_can_mark_tasks_as_done'],
            $array['can_mark_tasks_as_done'],
        );
    }

    public function getCanAddTasks(): bool
    {
        return $this->canAddTasks;
    }

    public function getCanMarkTasksAsDone(): bool
    {
        return $this->canMarkTasksAsDone;
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

    public function setCanAddTasks(bool $value): static
    {
        $this->canAddTasks = $value;

        return $this;
    }

    public function setCanMarkTasksAsDone(bool $value): static
    {
        $this->canMarkTasksAsDone = $value;

        return $this;
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
            'title'                         => $this->title->typeSerialize(),
            'tasks'                         => array_map(static fn($x) => $x->typeSerialize(), $this->tasks),
            'others_can_add_tasks'          => $this->othersCanAddTasks,
            'can_add_tasks'                 => $this->canAddTasks,
            'others_can_mark_tasks_as_done' => $this->othersCanMarkTasksAsDone,
            'can_mark_tasks_as_done'        => $this->canMarkTasksAsDone,
        ];
    }
}
