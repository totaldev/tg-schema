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
    public const TYPE_NAME = 'sendBusinessMessageAlbum';

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
         * Contents of messages to be sent. At most 10 messages can be added to an album. All messages must have the same value of show_caption_above_media.
         *
         * @var InputMessageContent[]
         */
        protected array               $inputMessageContents,
    ) {}

    public static function fromArray(array $array): SendBusinessMessageAlbum
    {
        return new static(
            $array['business_connection_id'],
            $array['chat_id'],
            TdSchemaRegistry::fromArray($array['reply_to']),
            $array['disable_notification'],
            $array['protect_content'],
            $array['effect_id'],
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['input_message_contents']),
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
            'input_message_contents' => array_map(static fn($x) => $x->typeSerialize(), $this->inputMessageContents),
        ];
    }
}
