<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Imported;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents the result of an importContacts request
 */
class ImportedContacts extends TdObject
{
    public const TYPE_NAME = 'importedContacts';

    /**
     * The number of users that imported the corresponding contact; 0 for already registered users or if unavailable
     *
     * @var int[]
     */
    protected array $importerCount;

    /**
     * User identifiers of the imported contacts in the same order as they were specified in the request; 0 if the contact is not yet a registered user
     *
     * @var int[]
     */
    protected array $userIds;

    public function __construct(array $userIds, array $importerCount)
    {
        $this->userIds = $userIds;
        $this->importerCount = $importerCount;
    }

    public static function fromArray(array $array): ImportedContacts
    {
        return new static(
            $array['user_ids'],
            $array['importer_count'],
        );
    }

    public function getImporterCount(): array
    {
        return $this->importerCount;
    }

    public function getUserIds(): array
    {
        return $this->userIds;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'user_ids' => $this->userIds,
            'importer_count' => $this->importerCount,
        ];
    }
}
