<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Send;

use Totaldev\TgSchema\Input\InputMessageContent;
use Totaldev\TgSchema\Input\InputMessageReplyTo;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sends 2-10 messages grouped together into an album on behalf of a business account; for bots only. Currently, only audio, document, photo and video messages
 * can be grouped into an album. Documents and audio files can be only grouped in an album with messages of the same type. Returns sent messages.
 */
class SendBusinessMessageAlbum extends TdFunction
{
    public const string TYPE_NAME = 'sendBusinessMessageAlbum';

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
         * Contents of messages to be sent. At most 10 messages can be added to an album. All messages must have the same value of show_caption_above_media.
         *
         * @var InputMessageContent[]
         */
        protected array                $inputMessageContents,
        /**
         * Pass true if the content of the message must be protected from forwarding and saving.
         */
        protected bool                 $protectContent,
        /**
         * Information about the message to be replied; pass null if none.
         */
        protected ?InputMessageReplyTo $replyTo = null,
    ) {}

    public static function fromArray(array $array): SendBusinessMessageAlbum
    {
        return new static(
            businessConnectionId: $array['business_connection_id'],
            chatId              : $array['chat_id'],
            disableNotification : $array['disable_notification'],
            effectId            : $array['effect_id'],
            inputMessageContents: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['input_message_contents']),
            protectContent      : $array['protect_content'],
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

    public function getInputMessageContents(): array
    {
        return $this->inputMessageContents;
    }

    public function getProtectContent(): bool
    {
        return $this->protectContent;
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

    public function setInputMessageContents(array $value): static
    {
        $this->inputMessageContents = $value;

        return $this;
    }

    public function setProtectContent(bool $value): static
    {
        $this->protectContent = $value;

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
            'input_message_contents' => array_map(static fn($x) => $x->jsonSerialize(), $this->inputMessageContents),
            'protect_content'        => $this->protectContent,
            'reply_to'               => (null !== $this->replyTo ? $this->replyTo->jsonSerialize() : null),
        ];
    }
}
