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
    public const TYPE_NAME = 'updateNewInlineCallbackQuery';

    public function __construct(
        /**
         * Unique query identifier.
         */
        protected int                  $id,
        /**
         * Identifier of the user who sent the query.
         */
        protected int                  $senderUserId,
        /**
         * Identifier of the inline message from which the query originated.
         */
        protected string               $inlineMessageId,
        /**
         * An identifier uniquely corresponding to the chat a message was sent to.
         */
        protected int                  $chatInstance,
        /**
         * Query payload.
         */
        protected CallbackQueryPayload $payload,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateNewInlineCallbackQuery
    {
        return new static(
            $array['id'],
            $array['sender_user_id'],
            $array['inline_message_id'],
            $array['chat_instance'],
            TdSchemaRegistry::fromArray($array['payload']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'id'                => $this->id,
            'sender_user_id'    => $this->senderUserId,
            'inline_message_id' => $this->inlineMessageId,
            'chat_instance'     => $this->chatInstance,
            'payload'           => $this->payload->typeSerialize(),
        ];
    }
}
