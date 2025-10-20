<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Change;

use Totaldev\TgSchema\Imported\ImportedContact;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes imported contacts using the list of contacts saved on the device. Imports newly added contacts and, if at least the file database is enabled,
 * deletes recently deleted contacts. Query result depends on the result of the previous query, so only one query is possible at the same time.
 */
class ChangeImportedContacts extends TdFunction
{
    public const TYPE_NAME = 'changeImportedContacts';

    public function __construct(
        /**
         * The new list of contacts to import.
         *
         * @var ImportedContact[]
         */
        protected array $contacts
    ) {}

    public static function fromArray(array $array): ChangeImportedContacts
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
