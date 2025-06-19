<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Draft\DraftMessage;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the draft message in a chat.
 */
class SetChatDraftMessage extends TdFunction
{
    public const TYPE_NAME = 'setChatDraftMessage';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int          $chatId,
        /**
         * If not 0, the message thread identifier in which the draft was changed.
         */
        protected int          $messageThreadId,
        /**
         * New draft message; pass null to remove the draft. All files in draft message content must be of the type inputFileLocal. Media thumbnails and captions are ignored.
         */
        protected DraftMessage $draftMessage
    ) {}

    public static function fromArray(array $array): SetChatDraftMessage
    {
        return new static(
            $array['chat_id'],
            $array['message_thread_id'],
            TdSchemaRegistry::fromArray($array['draft_message']),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getDraftMessage(): DraftMessage
    {
        return $this->draftMessage;
    }

    public function getMessageThreadId(): int
    {
        return $this->messageThreadId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'chat_id'           => $this->chatId,
            'message_thread_id' => $this->messageThreadId,
            'draft_message'     => $this->draftMessage->typeSerialize(),
        ];
    }
}
