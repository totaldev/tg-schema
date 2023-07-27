<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Add;

use Totaldev\TgSchema\TdFunction;

/**
 * Adds a file from a message to the list of file downloads. Download progress and completion of the download will be notified through updateFile updates. If message database is used, the list of file downloads is persistent across application restarts. The downloading is independent from download using downloadFile, i.e. it continues if downloadFile is canceled or is used to download a part of the file
 */
class AddFileToDownloads extends TdFunction
{
    public const TYPE_NAME = 'addFileToDownloads';

    /**
     * Identifier of the file to download
     *
     * @var int
     */
    protected int $fileId;

    /**
     * Chat identifier of the message with the file
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Message identifier
     *
     * @var int
     */
    protected int $messageId;

    /**
     * Priority of the download (1-32). The higher the priority, the earlier the file will be downloaded. If the priorities of two files are equal, then the last one for which downloadFile/addFileToDownloads was called will be downloaded first
     *
     * @var int
     */
    protected int $priority;

    public function __construct(int $fileId, int $chatId, int $messageId, int $priority)
    {
        $this->fileId = $fileId;
        $this->chatId = $chatId;
        $this->messageId = $messageId;
        $this->priority = $priority;
    }

    public static function fromArray(array $array): AddFileToDownloads
    {
        return new static(
            $array['file_id'],
            $array['chat_id'],
            $array['message_id'],
            $array['priority'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'file_id' => $this->fileId,
            'chat_id' => $this->chatId,
            'message_id' => $this->messageId,
            'priority' => $this->priority,
        ];
    }

    public function getFileId(): int
    {
        return $this->fileId;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getPriority(): int
    {
        return $this->priority;
    }
}
