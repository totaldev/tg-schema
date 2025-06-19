<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\File;

use Totaldev\TgSchema\Message\Message;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a file added to file download list.
 */
class FileDownload extends TdObject
{
    public const TYPE_NAME = 'fileDownload';

    public function __construct(
        /**
         * File identifier.
         */
        protected int     $fileId,
        /**
         * The message with the file.
         */
        protected Message $message,
        /**
         * Point in time (Unix timestamp) when the file was added to the download list.
         */
        protected int     $addDate,
        /**
         * Point in time (Unix timestamp) when the file downloading was completed; 0 if the file downloading isn't completed.
         */
        protected int     $completeDate,
        /**
         * True, if downloading of the file is paused.
         */
        protected bool    $isPaused
    ) {}

    public static function fromArray(array $array): FileDownload
    {
        return new static(
            $array['file_id'],
            TdSchemaRegistry::fromArray($array['message']),
            $array['add_date'],
            $array['complete_date'],
            $array['is_paused'],
        );
    }

    public function getAddDate(): int
    {
        return $this->addDate;
    }

    public function getCompleteDate(): int
    {
        return $this->completeDate;
    }

    public function getFileId(): int
    {
        return $this->fileId;
    }

    public function getIsPaused(): bool
    {
        return $this->isPaused;
    }

    public function getMessage(): Message
    {
        return $this->message;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'file_id'       => $this->fileId,
            'message'       => $this->message->typeSerialize(),
            'add_date'      => $this->addDate,
            'complete_date' => $this->completeDate,
            'is_paused'     => $this->isPaused,
        ];
    }
}
