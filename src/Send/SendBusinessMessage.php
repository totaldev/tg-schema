<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Send;

use Totaldev\TgSchema\Input\InputMessageContent;
use Totaldev\TgSchema\Input\InputMessageReplyTo;
use Totaldev\TgSchema\Reply\ReplyMarkup;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sends a message on behalf of a business account; for bots only. Returns the message after it was sent.
 */
class SendBusinessMessage extends TdFunction
{
    public const TYPE_NAME = 'sendBusinessMessage';

    public function __construct(
        /**
         * Unique identifier of business connection on behalf of which to send the request.
         */
        protected string              $businessConnectionId,
        /**
         * Target chat.
         */
        protected int                 $chatId,
        /**
         * Information about the message to be replied; pass null if none.
         */
        protected InputMessageReplyTo $replyTo,
        /**
         * Pass true to disable notification for the message.
         */
        protected bool                $disableNotification,
        /**
         * Pass true if the content of the message must be protected from forwarding and saving.
         */
        protected bool                $protectContent,
        /**
         * Identifier of the effect to apply to the message.
         */
        protected int                 $effectId,
        /**
         * Markup for replying to the message; pass null if none.
         */
        protected ReplyMarkup         $replyMarkup,
        /**
         * The content of the message to be sent.
         */
        protected InputMessageContent $inputMessageContent,
    ) {}

    public static function fromArray(array $array): SendBusinessMessage
    {
        return new static(
            $array['business_connection_id'],
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['reply_to']),
            $array['disable_notification'],
            $array['protect_content'],
            $array['effect_id'],
            TdSchemaRegistry::fromArray($array['reply_markup']),
            TdSchemaRegistry::fromArray($array['input_message_content']),
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

    public function getDisableNotification(): bool
    {
        return $this->disableNotification;
    }

    public function getEffectId(): int
    {
        return $this->effectId;
    }

    public function getInputMessageContent(): InputMessageContent
    {
        return $this->inputMessageContent;
    }

    public function getProtectContent(): bool
    {
        return $this->protectContent;
    }

    public function getReplyMarkup(): ReplyMarkup
    {
        return $this->replyMarkup;
    }

    public function getReplyTo(): InputMessageReplyTo
    {
        return $this->replyTo;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'business_connection_id' => $this->businessConnectionId,
            'chat_id'                => $this->chatId,
            'reply_to'               => $this->replyTo->typeSerialize(),
            'disable_notification'   => $this->disableNotification,
            'protect_content'        => $this->protectContent,
            'effect_id'              => $this->effectId,
            'reply_markup'           => $this->replyMarkup->typeSerialize(),
            'input_message_content'  => $this->inputMessageContent->typeSerialize(),
        ];
    }
}
