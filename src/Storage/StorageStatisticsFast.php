<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Storage;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains approximate storage usage statistics, excluding files of unknown file type
 */
class StorageStatisticsFast extends TdObject
{
    public const TYPE_NAME = 'storageStatisticsFast';

    /**
     * Size of the database
     *
     * @var int
     */
    protected int $databaseSize;

    /**
     * Approximate number of files
     *
     * @var int
     */
    protected int $fileCount;

    /**
     * Approximate total size of files, in bytes
     *
     * @var int
     */
    protected int $filesSize;

    /**
     * Size of the language pack database
     *
     * @var int
     */
    protected int $languagePackDatabaseSize;

    /**
     * Size of the TDLib internal log
     *
     * @var int
     */
    protected int $logSize;

    public function __construct(
        int $filesSize,
        int $fileCount,
        int $databaseSize,
        int $languagePackDatabaseSize,
        int $logSize,
    )
    {
        $this->filesSize = $filesSize;
        $this->fileCount = $fileCount;
        $this->databaseSize = $databaseSize;
        $this->languagePackDatabaseSize = $languagePackDatabaseSize;
        $this->logSize = $logSize;
    }

    public static function fromArray(array $array): StorageStatisticsFast
    {
        return new static(
            $array['files_size'],
            $array['file_count'],
            $array['database_size'],
            $array['language_pack_database_size'],
            $array['log_size'],
        );
    }

    public function getDatabaseSize(): int
    {
        return $this->databaseSize;
    }

    public function getFileCount(): int
    {
        return $this->fileCount;
    }

    public function getFilesSize(): int
    {
        return $this->filesSize;
    }

    public function getLanguagePackDatabaseSize(): int
    {
        return $this->languagePackDatabaseSize;
    }

    public function getLogSize(): int
    {
        return $this->logSize;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'files_size' => $this->filesSize,
            'file_count' => $this->fileCount,
            'database_size' => $this->databaseSize,
            'language_pack_database_size' => $this->languagePackDatabaseSize,
            'log_size' => $this->logSize,
        ];
    }
}
