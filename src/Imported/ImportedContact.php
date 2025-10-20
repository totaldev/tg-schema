<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Imported;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a contact to import.
 */
class ImportedContact extends TdObject
{
    public const TYPE_NAME = 'importedContact';

    public function __construct(
        /**
         * Phone number of the user.
         */
        protected string         $phoneNumber,
        /**
         * First name of the user; 1-64 characters.
         */
        protected string         $firstName,
        /**
         * Last name of the user; 0-64 characters.
         */
        protected string         $lastName,
        /**
         * Note to add about the user; 0-getOption("user_note_text_length_max") characters. Only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities are allowed; pass null to keep the current user's note.
         */
        protected ?FormattedText $note = null,
    ) {}

    public static function fromArray(array $array): ImportedContact
    {
        return new static(
            $array['phone_number'],
            $array['first_name'],
            $array['last_name'],
            isset($array['note']) ? TdSchemaRegistry::fromArray($array['note']) : null,
        );
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getNote(): ?FormattedText
    {
        return $this->note;
    }

    public function getPhoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'phone_number' => $this->phoneNumber,
            'first_name'   => $this->firstName,
            'last_name'    => $this->lastName,
            'note'         => $this->note ?? null,
        ];
    }
}
