<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Optimize;

use Totaldev\TgSchema\File\FileType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Optimizes storage usage, i.e. deletes some files and returns new storage usage statistics. Secret thumbnails can't be deleted.
 */
class OptimizeStorage extends TdFunction
{
    public const string TYPE_NAME = 'optimizeStorage';

    public function __construct(
        /**
         * If non-empty, only files from the given chats are considered. Use 0 as chat identifier to delete files not belonging to any chat (e.g., profile photos).
         *
         * @var int[]
         */
        protected array $chatIds,
        /**
         * Same as in getStorageStatistics. Affects only returned statistics.
         */
        protected int   $chatLimit,
        /**
         * Limit on the total number of files after deletion. Pass -1 to use the default limit.
         */
        protected int   $count,
        /**
         * If non-empty, files from the given chats are excluded. Use 0 as chat identifier to exclude all files not belonging to any chat (e.g., profile photos).
         *
         * @var int[]
         */
        protected array $excludeChatIds,
        /**
         * If non-empty, only files with the given types are considered. By default, all types except thumbnails, profile photos, stickers and wallpapers are deleted.
         *
         * @var FileType[]
         */
        protected array $fileTypes,
        /**
         * The amount of time after the creation of a file during which it can't be deleted, in seconds. Pass -1 to use the default value.
         */
        protected int   $immunityDelay,
        /**
         * Pass true if statistics about the files that were deleted must be returned instead of the whole storage usage statistics. Affects only returned statistics.
         */
        protected bool  $returnDeletedFileStatistics,
        /**
         * Limit on the total size of files after deletion, in bytes. Pass -1 to use the default limit.
         */
        protected int   $size,
        /**
         * Limit on the time that has passed since the last time a file was accessed (or creation time for some filesystems). Pass -1 to use the default limit.
         */
        protected int   $ttl,
    ) {}

    public static function fromArray(array $array): OptimizeStorage
    {
        return new static(
            chatIds                    : $array['chat_ids'],
            chatLimit                  : $array['chat_limit'],
            count                      : $array['count'],
            excludeChatIds             : $array['exclude_chat_ids'],
            fileTypes                  : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['file_types']),
            immunityDelay              : $array['immunity_delay'],
            returnDeletedFileStatistics: $array['return_deleted_file_statistics'],
            size                       : $array['size'],
            ttl                        : $array['ttl'],
        );
    }

    public function getChatIds(): array
    {
        return $this->chatIds;
    }

    public function getChatLimit(): int
    {
        return $this->chatLimit;
    }

    public function getCount(): int
    {
        return $this->count;
    }

    public function getExcludeChatIds(): array
    {
        return $this->excludeChatIds;
    }

    public function getFileTypes(): array
    {
        return $this->fileTypes;
    }

    public function getImmunityDelay(): int
    {
        return $this->immunityDelay;
    }

    public function getReturnDeletedFileStatistics(): bool
    {
        return $this->returnDeletedFileStatistics;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function getTtl(): int
    {
        return $this->ttl;
    }

    public function setChatIds(array $value): static
    {
        $this->chatIds = $value;

        return $this;
    }

    public function setChatLimit(int $value): static
    {
        $this->chatLimit = $value;

        return $this;
    }

    public function setCount(int $value): static
    {
        $this->count = $value;

        return $this;
    }

    public function setExcludeChatIds(array $value): static
    {
        $this->excludeChatIds = $value;

        return $this;
    }

    public function setFileTypes(array $value): static
    {
        $this->fileTypes = $value;

        return $this;
    }

    public function setImmunityDelay(int $value): static
    {
        $this->immunityDelay = $value;

        return $this;
    }

    public function setReturnDeletedFileStatistics(bool $value): static
    {
        $this->returnDeletedFileStatistics = $value;

        return $this;
    }

    public function setSize(int $value): static
    {
        $this->size = $value;

        return $this;
    }

    public function setTtl(int $value): static
    {
        $this->ttl = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                          => static::TYPE_NAME,
            'chat_ids'                       => $this->chatIds,
            'chat_limit'                     => $this->chatLimit,
            'count'                          => $this->count,
            'exclude_chat_ids'               => $this->excludeChatIds,
            'file_types'                     => array_map(static fn($x) => $x->jsonSerialize(), $this->fileTypes),
            'immunity_delay'                 => $this->immunityDelay,
            'return_deleted_file_statistics' => $this->returnDeletedFileStatistics,
            'size'                           => $this->size,
            'ttl'                            => $this->ttl,
        ];
    }
}
