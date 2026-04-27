<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a task in a checklist to be sent.
 */
class InputChecklistTask extends TdObject
{
    public const string TYPE_NAME = 'inputChecklistTask';

    public function __construct(
        /**
         * Unique identifier of the task; must be positive.
         */
        protected int           $id,
        /**
         * Text of the task; 1-getOption("checklist_task_text_length_max") characters without line feeds. May contain only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities.
         */
        protected FormattedText $text,
    ) {}

    public static function fromArray(array $array): InputChecklistTask
    {
        return new static(
            id  : $array['id'],
            text: TdSchemaRegistry::fromArray($array['text']),
        );
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getText(): FormattedText
    {
        return $this->text;
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
            '@type' => static::TYPE_NAME,
            'id'    => $this->id,
            'text'  => $this->text->jsonSerialize(),
        ];
    }
}
