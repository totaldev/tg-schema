<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * A suggested post was declined.
 */
class MessageSuggestedPostDeclined extends MessageContent
{
    public const string TYPE_NAME = 'messageSuggestedPostDeclined';

    public function __construct(
        /**
         * Identifier of the message with the suggested post; can be 0 if the message was deleted.
         */
        protected int    $suggestedPostMessageId,
        /**
         * Comment added by administrator of the channel when the post was declined.
         */
        protected string $comment,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageSuggestedPostDeclined
    {
        return new static(
            $array['suggested_post_message_id'],
            $array['comment'],
        );
    }

    public function getComment(): string
    {
        return $this->comment;
    }

    public function getSuggestedPostMessageId(): int
    {
        return $this->suggestedPostMessageId;
    }

    public function setComment(string $value): static
    {
        $this->comment = $value;

        return $this;
    }

    public function setSuggestedPostMessageId(int $value): static
    {
        $this->suggestedPostMessageId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                     => static::TYPE_NAME,
            'suggested_post_message_id' => $this->suggestedPostMessageId,
            'comment'                   => $this->comment,
        ];
    }
}
