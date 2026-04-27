<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes a note of a contact user.
 */
class SetUserNote extends TdFunction
{
    public const string TYPE_NAME = 'setUserNote';

    public function __construct(
        /**
         * Note to set for the user; 0-getOption("user_note_text_length_max") characters. Only Bold, Italic, Underline, Strikethrough, Spoiler, CustomEmoji, and DateTime entities are allowed.
         */
        protected FormattedText $note,
        /**
         * User identifier.
         */
        protected int           $userId,
    ) {}

    public static function fromArray(array $array): SetUserNote
    {
        return new static(
            note  : TdSchemaRegistry::fromArray($array['note']),
            userId: $array['user_id'],
        );
    }

    public function getNote(): FormattedText
    {
        return $this->note;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function setNote(FormattedText $value): static
    {
        $this->note = $value;

        return $this;
    }

    public function setUserId(int $value): static
    {
        $this->userId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'note'    => $this->note->jsonSerialize(),
            'user_id' => $this->userId,
        ];
    }
}
