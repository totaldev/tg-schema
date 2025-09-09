<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Storage;

use Totaldev\TgSchema\TdObject;

/**
 * Contains approximate storage usage statistics, excluding files of unknown file type.
 */
class StorageStatisticsFast extends TdObject
{
    public const TYPE_NAME = 'storageStatisticsFast';

    public function __construct(
        /**
         * Approximate total size of files, in bytes.
         */
        protected int $filesSize,
        /**
         * Approximate number of files.
         */
        protected int $fileCount,
        /**
         * Size of the database.
         */
        protected int $databaseSize,
        /**
         * Size of the language pack database.
         */
        protected int $languagePackDatabaseSize,
        /**
         * Size of the TDLib internal log.
         */
        protected int $logSize,
    ) {}

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
            '@type'                       => static::TYPE_NAME,
            'files_size'                  => $this->filesSize,
            'file_count'                  => $this->fileCount,
            'database_size'               => $this->databaseSize,
            'language_pack_database_size' => $this->languagePackDatabaseSize,
            'log_size'                    => $this->logSize,
        ];
    }
}
