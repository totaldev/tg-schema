<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Import;

use Totaldev\TgSchema\Imported\ImportedContact;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Adds new contacts or edits existing contacts by their phone numbers; contacts' user identifiers are ignored.
 */
class ImportContacts extends TdFunction
{
    public const TYPE_NAME = 'importContacts';

    public function __construct(
        /**
         * The list of contacts to import or edit.
         *
         * @var ImportedContact[]
         */
        protected array $contacts
    ) {}

    public static function fromArray(array $array): ImportContacts
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['contacts']),
        );
    }

    public function getContacts(): array
    {
        return $this->contacts;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'contacts' => array_map(static fn($x) => $x->typeSerialize(), $this->contacts),
        ];
    }
}
