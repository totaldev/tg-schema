<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Callback\CallbackQueryPayload;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A new incoming callback query from a message sent via a bot; for bots only.
 */
class UpdateNewInlineCallbackQuery extends Update
{
    public const string TYPE_NAME = 'updateNewInlineCallbackQuery';

    public function __construct(
        /**
         * An identifier uniquely corresponding to the chat a message was sent to.
         */
        protected int                  $chatInstance,
        /**
         * Unique query identifier.
         */
        protected int                  $id,
        /**
         * Identifier of the inline message from which the query originated.
         */
        protected string               $inlineMessageId,
        /**
         * Query payload.
         */
        protected CallbackQueryPayload $payload,
        /**
         * Identifier of the user who sent the query.
         */
        protected int                  $senderUserId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateNewInlineCallbackQuery
    {
        return new static(
            chatInstance   : $array['chat_instance'],
            id             : $array['id'],
            inlineMessageId: $array['inline_message_id'],
            payload        : TdSchemaRegistry::fromArray($array['payload']),
            senderUserId   : $array['sender_user_id'],
        );
    }

    public function getChatInstance(): int
    {
        return $this->chatInstance;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getInlineMessageId(): string
    {
        return $this->inlineMessageId;
    }

    public function getPayload(): CallbackQueryPayload
    {
        return $this->payload;
    }

    public function getSenderUserId(): int
    {
        return $this->senderUserId;
    }

    public function setChatInstance(int $value): static
    {
        $this->chatInstance = $value;

        return $this;
    }

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setInlineMessageId(string $value): static
    {
        $this->inlineMessageId = $value;

        return $this;
    }

    public function setPayload(CallbackQueryPayload $value): static
    {
        $this->payload = $value;

        return $this;
    }

    public function setSenderUserId(int $value): static
    {
        $this->senderUserId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'chat_instance'     => $this->chatInstance,
            'id'                => $this->id,
            'inline_message_id' => $this->inlineMessageId,
            'payload'           => $this->payload->jsonSerialize(),
            'sender_user_id'    => $this->senderUserId,
        ];
    }
}
