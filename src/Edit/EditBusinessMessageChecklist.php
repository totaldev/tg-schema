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
    public const string TYPE_NAME = 'editBusinessMessageChecklist';

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
         * The new checklist. If some tasks were completed, this information will be kept.
         */
        protected InputChecklist $checklist,
        /**
         * Identifier of the message.
         */
        protected int            $messageId,
        /**
         * The new message reply markup; pass null if none.
         */
        protected ?ReplyMarkup   $replyMarkup = null,
    ) {}

    public static function fromArray(array $array): EditBusinessMessageChecklist
    {
        return new static(
            businessConnectionId: $array['business_connection_id'],
            chatId              : $array['chat_id'],
            checklist           : TdSchemaRegistry::fromArray($array['checklist']),
            messageId           : $array['message_id'],
            replyMarkup         : (isset($array['reply_markup']) ? TdSchemaRegistry::fromArray($array['reply_markup']) : null),
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

    public function setBusinessConnectionId(string $value): static
    {
        $this->businessConnectionId = $value;

        return $this;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setChecklist(InputChecklist $value): static
    {
        $this->checklist = $value;

        return $this;
    }

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

        return $this;
    }

    public function setReplyMarkup(?ReplyMarkup $value): static
    {
        $this->replyMarkup = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'business_connection_id' => $this->businessConnectionId,
            'chat_id'                => $this->chatId,
            'checklist'              => $this->checklist->jsonSerialize(),
            'message_id'             => $this->messageId,
            'reply_markup'           => (null !== $this->replyMarkup ? $this->replyMarkup->jsonSerialize() : null),
        ];
    }
}
