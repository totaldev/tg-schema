<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Checklist;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a task in a checklist.
 */
class ChecklistTask extends TdObject
{
    public const string TYPE_NAME = 'checklistTask';

    public function __construct(
        /**
         * Identifier of the user or chat that completed the task; may be null if the task isn't completed yet.
         */
        protected ?MessageSender $completedBy,
        /**
         * Point in time (Unix timestamp) when the task was completed; 0 if the task isn't completed.
         */
        protected int            $completionDate,
        /**
         * Unique identifier of the task.
         */
        protected int            $id,
        /**
         * Text of the task; may contain only Bold, Italic, Underline, Strikethrough, Spoiler, CustomEmoji, DateTime and automatically found entities.
         */
        protected FormattedText  $text,
    ) {}

    public static function fromArray(array $array): ChecklistTask
    {
        return new static(
            completedBy   : (isset($array['completed_by']) ? TdSchemaRegistry::fromArray($array['completed_by']) : null),
            completionDate: $array['completion_date'],
            id            : $array['id'],
            text          : TdSchemaRegistry::fromArray($array['text']),
        );
    }

    public function getCompletedBy(): ?MessageSender
    {
        return $this->completedBy;
    }

    public function getCompletionDate(): int
    {
        return $this->completionDate;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getText(): FormattedText
    {
        return $this->text;
    }

    public function setCompletedBy(?MessageSender $value): static
    {
        $this->completedBy = $value;

        return $this;
    }

    public function setCompletionDate(int $value): static
    {
        $this->completionDate = $value;

        return $this;
    }

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setText(FormattedText $value): static
    {
        $this->text = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'completed_by'    => (null !== $this->completedBy ? $this->completedBy->jsonSerialize() : null),
            'completion_date' => $this->completionDate,
            'id'              => $this->id,
            'text'            => $this->text->jsonSerialize(),
        ];
    }
}
