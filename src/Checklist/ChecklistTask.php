<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Checklist;

use Totaldev\TgSchema\Formatted\FormattedText;
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
         * Identifier of the user that completed the task; 0 if the task isn't completed.
         */
        protected int           $completedByUserId,
        /**
         * Point in time (Unix timestamp) when the task was completed; 0 if the task isn't completed.
         */
        protected int           $completionDate,
        /**
         * Unique identifier of the task.
         */
        protected int           $id,
        /**
         * Text of the task; may contain only Bold, Italic, Underline, Strikethrough, Spoiler, CustomEmoji, Url, EmailAddress, Mention, Hashtag, Cashtag and PhoneNumber entities.
         */
        protected FormattedText $text,
    ) {}

    public static function fromArray(array $array): ChecklistTask
    {
        return new static(
            completedByUserId: $array['completed_by_user_id'],
            completionDate   : $array['completion_date'],
            id               : $array['id'],
            text             : TdSchemaRegistry::fromArray($array['text']),
        );
    }

    public function getCompletedByUserId(): int
    {
        return $this->completedByUserId;
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

    public function setCompletedByUserId(int $value): static
    {
        $this->completedByUserId = $value;

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
            '@type'                => static::TYPE_NAME,
            'completed_by_user_id' => $this->completedByUserId,
            'completion_date'      => $this->completionDate,
            'id'                   => $this->id,
            'text'                 => $this->text->jsonSerialize(),
        ];
    }
}
