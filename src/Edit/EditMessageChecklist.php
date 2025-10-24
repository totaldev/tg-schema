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
 * Edits the message content of a checklist. Returns the edited message after the edit is completed on the server side.
 */
class EditMessageChecklist extends TdFunction
{
    public const string TYPE_NAME = 'editMessageChecklist';

    public function __construct(
        /**
         * The chat the message belongs to.
         */
        protected int            $chatId,
        /**
         * Identifier of the message. Use messageProperties.can_be_edited to check whether the message can be edited.
         */
        protected int            $messageId,
        /**
         * The new checklist. If some tasks were completed, this information will be kept.
         */
        protected InputChecklist $checklist,
        /**
         * The new message reply markup; pass null if none; for bots only.
         */
        protected ?ReplyMarkup   $replyMarkup = null,
    ) {}

    public static function fromArray(array $array): EditMessageChecklist
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            isset($array['reply_markup']) ? TdSchemaRegistry::fromArray($array['reply_markup']) : null,
            TdSchemaRegistry::fromArray($array['checklist']),
        );
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
            '@type'        => static::TYPE_NAME,
            'chat_id'      => $this->chatId,
            'message_id'   => $this->messageId,
            'reply_markup' => $this->replyMarkup ?? null,
            'checklist'    => $this->checklist->typeSerialize(),
        ];
    }
}
