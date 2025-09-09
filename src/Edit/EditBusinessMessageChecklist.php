<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Edit;

use Totaldev\TgSchema\Input\InputChecklist;
use Totaldev\TgSchema\Reply\ReplyMarkup;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Edits the content of a checklist in a message sent on behalf of a business account; for bots only.
 */
class EditBusinessMessageChecklist extends TdFunction
{
    public const TYPE_NAME = 'editBusinessMessageChecklist';

    public function __construct(
        /**
         * Unique identifier of business connection on behalf of which the message was sent.
         */
        protected string         $businessConnectionId,
        /**
         * The chat the message belongs to.
         */
        protected int            $chatId,
        /**
         * Identifier of the message.
         */
        protected int            $messageId,
        /**
         * The new checklist. If some tasks were completed, this information will be kept.
         */
        protected InputChecklist $checklist,
        /**
         * The new message reply markup; pass null if none.
         */
        protected ?ReplyMarkup   $replyMarkup = null,
    ) {}

    public static function fromArray(array $array): EditBusinessMessageChecklist
    {
        return new static(
            $array['business_connection_id'],
            $array['chat_id'],
            $array['message_id'],
            isset($array['reply_markup']) ? TdSchemaRegistry::fromArray($array['reply_markup']) : null,
            TdSchemaRegistry::fromArray($array['checklist']),
        );
    }

    public function getBusinessConnectionId(): string
    {
        return $this->businessConnectionId;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getChecklist(): InputChecklist
    {
        return $this->checklist;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getReplyMarkup(): ?ReplyMarkup
    {
        return $this->replyMarkup;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'business_connection_id' => $this->businessConnectionId,
            'chat_id'                => $this->chatId,
            'message_id'             => $this->messageId,
            'reply_markup'           => $this->replyMarkup ?? null,
            'checklist'              => $this->checklist->typeSerialize(),
        ];
    }
}
