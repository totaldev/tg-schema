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
    public const TYPE_NAME = 'setUserNote';

    public function __construct(
        /**
         * User identifier.
         */
        protected int           $userId,
        /**
         * Note to set for the user; 0-getOption("user_note_text_length_max") characters. Only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities are allowed.
         */
        protected FormattedText $note,
    ) {}

    public static function fromArray(array $array): SetUserNote
    {
        return new static(
            $array['user_id'],
            TdSchemaRegistry::fromArray($array['note']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'user_id' => $this->userId,
            'note'    => $this->note->typeSerialize(),
        ];
    }
}
