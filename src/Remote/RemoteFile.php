<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Remote;

use Totaldev\TgSchema\TdObject;

/**
 * Represents a remote file.
 */
class RemoteFile extends TdObject
{
    public const TYPE_NAME = 'remoteFile';

    public function __construct(
        /**
         * Remote file identifier; may be empty. Can be used by the current user across application restarts or even from other devices. Uniquely identifies a file, but a file can have a lot of different valid identifiers. If the identifier starts with "http://" or "https://", it represents the HTTP URL of the file. TDLib is currently unable to download files if only their URL is known. If downloadFile/addFileToDownloads is called on such a file or if it is sent to a secret chat, TDLib starts a file generation process by sending updateFileGenerationStart to the application with the HTTP URL in the original_path and "#url#" as the conversion string. Application must generate the file by downloading it to the specified location.
         */
        protected string $id,
        /**
         * Unique file identifier; may be empty if unknown. The unique file identifier which is the same for the same file even for different users and is persistent over time.
         */
        protected string $uniqueId,
        /**
         * True, if the file is currently being uploaded (or a remote copy is being generated by some other means).
         */
        protected bool   $isUploadingActive,
        /**
         * True, if a remote copy is fully available.
         */
        protected bool   $isUploadingCompleted,
        /**
         * Size of the remote available part of the file, in bytes; 0 if unknown.
         */
        protected int    $uploadedSize,
    ) {}

    public static function fromArray(array $array): RemoteFile
    {
        return new static(
            $array['id'],
            $array['unique_id'],
            $array['is_uploading_active'],
            $array['is_uploading_completed'],
            $array['uploaded_size'],
        );
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getIsUploadingActive(): bool
    {
        return $this->isUploadingActive;
    }

    public function getIsUploadingCompleted(): bool
    {
        return $this->isUploadingCompleted;
    }

    public function getUniqueId(): string
    {
        return $this->uniqueId;
    }

    public function getUploadedSize(): int
    {
        return $this->uploadedSize;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'id'                     => $this->id,
            'unique_id'              => $this->uniqueId,
            'is_uploading_active'    => $this->isUploadingActive,
            'is_uploading_completed' => $this->isUploadingCompleted,
            'uploaded_size'          => $this->uploadedSize,
        ];
    }
}
