<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Report;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Reports a chat to the Telegram moderators. A chat can be reported only from the chat action bar, or if chat.can_be_reported
 */
class ReportChat extends TdFunction
{
    public const TYPE_NAME = 'reportChat';

    /**
     * Chat identifier
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Identifiers of reported messages; may be empty to report the whole chat
     *
     * @var int[]
     */
    protected array $messageIds;

    /**
     * The reason for reporting the chat
     *
     * @var ReportReason
     */
    protected ReportReason $reason;

    /**
     * Additional report details; 0-1024 characters
     *
     * @var string
     */
    protected string $text;

    public function __construct(int $chatId, array $messageIds, ReportReason $reason, string $text)
    {
        $this->chatId = $chatId;
        $this->messageIds = $messageIds;
        $this->reason = $reason;
        $this->text = $text;
    }

    public static function fromArray(array $array): ReportChat
    {
        return new static(
            $array['chat_id'],
            $array['message_ids'],
            TdSchemaRegistry::fromArray($array['reason']),
            $array['text'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_ids' => $this->messageIds,
            'reason' => $this->reason->typeSerialize(),
            'text' => $this->text,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageIds(): array
    {
        return $this->messageIds;
    }

    public function getReason(): ReportReason
    {
        return $this->reason;
    }

    public function getText(): string
    {
        return $this->text;
    }
}