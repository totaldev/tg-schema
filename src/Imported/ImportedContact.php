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
    public const string TYPE_NAME = 'importedContact';

    public function __construct(
        /**
         * First name of the user; 1-64 characters.
         */
        protected string         $firstName,
        /**
         * Last name of the user; 0-64 characters.
         */
        protected string         $lastName,
        /**
         * Phone number of the user.
         */
        protected string         $phoneNumber,
        /**
         * Note to add about the user; 0-getOption("user_note_text_length_max") characters. Only Bold, Italic, Underline, Strikethrough, Spoiler, and CustomEmoji entities are allowed; pass null to keep the current user's note.
         */
        protected ?FormattedText $note = null,
    ) {}

    public static function fromArray(array $array): ImportedContact
    {
        return new static(
            firstName  : $array['first_name'],
            lastName   : $array['last_name'],
            note       : (isset($array['note']) ? TdSchemaRegistry::fromArray($array['note']) : null),
            phoneNumber: $array['phone_number'],
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

    public function setFirstName(string $value): static
    {
        $this->firstName = $value;

        return $this;
    }

    public function setLastName(string $value): static
    {
        $this->lastName = $value;

        return $this;
    }

    public function setNote(?FormattedText $value): static
    {
        $this->note = $value;

        return $this;
    }

    public function setPhoneNumber(string $value): static
    {
        $this->phoneNumber = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'first_name'   => $this->firstName,
            'last_name'    => $this->lastName,
            'note'         => (null !== $this->note ? $this->note->jsonSerialize() : null),
            'phone_number' => $this->phoneNumber,
        ];
    }
}
