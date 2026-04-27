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
    public const string TYPE_NAME = 'storageStatisticsFast';

    public function __construct(
        /**
         * Size of the database.
         */
        protected int $databaseSize,
        /**
         * Approximate number of files.
         */
        protected int $fileCount,
        /**
         * Approximate total size of files, in bytes.
         */
        protected int $filesSize,
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
            databaseSize            : $array['database_size'],
            fileCount               : $array['file_count'],
            filesSize               : $array['files_size'],
            languagePackDatabaseSize: $array['language_pack_database_size'],
            logSize                 : $array['log_size'],
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

    public function setDatabaseSize(int $value): static
    {
        $this->databaseSize = $value;

        return $this;
    }

    public function setFileCount(int $value): static
    {
        $this->fileCount = $value;

        return $this;
    }

    public function setFilesSize(int $value): static
    {
        $this->filesSize = $value;

        return $this;
    }

    public function setLanguagePackDatabaseSize(int $value): static
    {
        $this->languagePackDatabaseSize = $value;

        return $this;
    }

    public function setLogSize(int $value): static
    {
        $this->logSize = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                       => static::TYPE_NAME,
            'database_size'               => $this->databaseSize,
            'file_count'                  => $this->fileCount,
            'files_size'                  => $this->filesSize,
            'language_pack_database_size' => $this->languagePackDatabaseSize,
            'log_size'                    => $this->logSize,
        ];
    }
}
