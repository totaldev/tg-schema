<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Describes a file added to file download list
 */
class FileDownload extends TdObject
{
    public const TYPE_NAME = 'fileDownload';

    /**
     * File identifier
     *
     * @var int
     */
    protected int $fileId;

    /**
     * The message with the file
     *
     * @var Message
     */
    protected Message $message;

    /**
     * Point in time (Unix timestamp) when the file was added to the download list
     *
     * @var int
     */
    protected int $addDate;

    /**
     * Point in time (Unix timestamp) when the file downloading was completed; 0 if the file downloading isn't completed
     *
     * @var int
     */
    protected int $completeDate;

    /**
     * True, if downloading of the file is paused
     *
     * @var bool
     */
    protected bool $isPaused;

    public function __construct(int $fileId, Message $message, int $addDate, int $completeDate, bool $isPaused)
    {
        $this->fileId = $fileId;
        $this->message = $message;
        $this->addDate = $addDate;
        $this->completeDate = $completeDate;
        $this->isPaused = $isPaused;
    }

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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'file_id' => $this->fileId,
            'message' => $this->message->typeSerialize(),
            'add_date' => $this->addDate,
            'complete_date' => $this->completeDate,
            'is_paused' => $this->isPaused,
        ];
    }

    public function getFileId(): int
    {
        return $this->fileId;
    }

    public function getMessage(): Message
    {
        return $this->message;
    }

    public function getAddDate(): int
    {
        return $this->addDate;
    }

    public function getCompleteDate(): int
    {
        return $this->completeDate;
    }

    public function getIsPaused(): bool
    {
        return $this->isPaused;
    }
}
