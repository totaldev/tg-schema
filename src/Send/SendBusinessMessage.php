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
    public const string TYPE_NAME = 'sendBusinessMessage';

    public function __construct(
        /**
         * Unique identifier of business connection on behalf of which to send the request.
         */
        protected string               $businessConnectionId,
        /**
         * Target chat.
         */
        protected int                  $chatId,
        /**
         * Pass true to disable notification for the message.
         */
        protected bool                 $disableNotification,
        /**
         * Identifier of the effect to apply to the message.
         */
        protected int                  $effectId,
        /**
         * The content of the message to be sent.
         */
        protected InputMessageContent  $inputMessageContent,
        /**
         * Pass true if the content of the message must be protected from forwarding and saving.
         */
        protected bool                 $protectContent,
        /**
         * Markup for replying to the message; pass null if none.
         */
        protected ?ReplyMarkup         $replyMarkup = null,
        /**
         * Information about the message to be replied; pass null if none.
         */
        protected ?InputMessageReplyTo $replyTo = null,
    ) {}

    public static function fromArray(array $array): SendBusinessMessage
    {
        return new static(
            businessConnectionId: $array['business_connection_id'],
            chatId              : $array['chat_id'],
            disableNotification : $array['disable_notification'],
            effectId            : $array['effect_id'],
            inputMessageContent : TdSchemaRegistry::fromArray($array['input_message_content']),
            protectContent      : $array['protect_content'],
            replyMarkup         : (isset($array['reply_markup']) ? TdSchemaRegistry::fromArray($array['reply_markup']) : null),
            replyTo             : (isset($array['reply_to']) ? TdSchemaRegistry::fromArray($array['reply_to']) : null),
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

    public function getReplyMarkup(): ?ReplyMarkup
    {
        return $this->replyMarkup;
    }

    public function getReplyTo(): ?InputMessageReplyTo
    {
        return $this->replyTo;
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

    public function setDisableNotification(bool $value): static
    {
        $this->disableNotification = $value;

        return $this;
    }

    public function setEffectId(int $value): static
    {
        $this->effectId = $value;

        return $this;
    }

    public function setInputMessageContent(InputMessageContent $value): static
    {
        $this->inputMessageContent = $value;

        return $this;
    }

    public function setProtectContent(bool $value): static
    {
        $this->protectContent = $value;

        return $this;
    }

    public function setReplyMarkup(?ReplyMarkup $value): static
    {
        $this->replyMarkup = $value;

        return $this;
    }

    public function setReplyTo(?InputMessageReplyTo $value): static
    {
        $this->replyTo = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                  => static::TYPE_NAME,
            'business_connection_id' => $this->businessConnectionId,
            'chat_id'                => $this->chatId,
            'disable_notification'   => $this->disableNotification,
            'effect_id'              => $this->effectId,
            'input_message_content'  => $this->inputMessageContent->jsonSerialize(),
            'protect_content'        => $this->protectContent,
            'reply_markup'           => (null !== $this->replyMarkup ? $this->replyMarkup->jsonSerialize() : null),
            'reply_to'               => (null !== $this->replyTo ? $this->replyTo->jsonSerialize() : null),
        ];
    }
}
