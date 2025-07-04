<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Report;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Reports a chat photo to the Telegram moderators. A chat photo can be reported only if chat.can_be_reported.
 */
class ReportChatPhoto extends TdFunction
{
    public const TYPE_NAME = 'reportChatPhoto';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int          $chatId,
        /**
         * Identifier of the photo to report. Only full photos from chatPhoto can be reported.
         */
        protected int          $fileId,
        /**
         * The reason for reporting the chat photo.
         */
        protected ReportReason $reason,
        /**
         * Additional report details; 0-1024 characters.
         */
        protected string       $text
    ) {}

    public static function fromArray(array $array): ReportChatPhoto
    {
        return new static(
            $array['chat_id'],
            $array['file_id'],
            TdSchemaRegistry::fromArray($array['reason']),
            $array['text'],
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

    public function getReason(): ReportReason
    {
        return $this->reason;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'file_id' => $this->fileId,
            'reason'  => $this->reason->typeSerialize(),
            'text'    => $this->text,
        ];
    }
}
