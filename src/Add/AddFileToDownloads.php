<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Add;

use Totaldev\TgSchema\TdFunction;

/**
 * Adds a file from a message to the list of file downloads. Download progress and completion of the download will be notified through updateFile updates. If
 * message database is used, the list of file downloads is persistent across application restarts. The downloading is independent of download using
 * downloadFile, i.e. it continues if downloadFile is canceled or is used to download a part of the file.
 */
class AddFileToDownloads extends TdFunction
{
    public const string TYPE_NAME = 'addFileToDownloads';

    public function __construct(
        /**
         * Chat identifier of the message with the file.
         */
        protected int $chatId,
        /**
         * Identifier of the file to download.
         */
        protected int $fileId,
        /**
         * Message identifier.
         */
        protected int $messageId,
        /**
         * Priority of the download (1-32). The higher the priority, the earlier the file will be downloaded. If the priorities of two files are equal, then the last one for which downloadFile/addFileToDownloads was called will be downloaded first.
         */
        protected int $priority,
    ) {}

    public static function fromArray(array $array): AddFileToDownloads
    {
        return new static(
            chatId   : $array['chat_id'],
            fileId   : $array['file_id'],
            messageId: $array['message_id'],
            priority : $array['priority'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getFileId(): int
    {
        return $this->fileId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getPriority(): int
    {
        return $this->priority;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setFileId(int $value): static
    {
        $this->fileId = $value;

        return $this;
    }

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

        return $this;
    }

    public function setPriority(int $value): static
    {
        $this->priority = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'file_id'    => $this->fileId,
            'message_id' => $this->messageId,
            'priority'   => $this->priority,
        ];
    }
}
