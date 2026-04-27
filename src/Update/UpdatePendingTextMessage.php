<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A new pending text message was received in a chat with a bot. The message must be shown in the chat for at most getOption("pending_text_message_period")
 * seconds, replace any other pending message with the same draft_id, and be deleted whenever any incoming message from the bot in the message thread is
 * received.
 */
class UpdatePendingTextMessage extends Update
{
    public const string TYPE_NAME = 'updatePendingTextMessage';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int           $chatId,
        /**
         * Unique identifier of the message draft within the message thread.
         */
        protected int           $draftId,
        /**
         * The forum topic identifier in which the message will be sent; 0 if none.
         */
        protected int           $forumTopicId,
        /**
         * Text of the pending message.
         */
        protected FormattedText $text,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdatePendingTextMessage
    {
        return new static(
            chatId      : $array['chat_id'],
            draftId     : $array['draft_id'],
            forumTopicId: $array['forum_topic_id'],
            text        : TdSchemaRegistry::fromArray($array['text']),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getDraftId(): int
    {
        return $this->draftId;
    }

    public function getForumTopicId(): int
    {
        return $this->forumTopicId;
    }

    public function getText(): FormattedText
    {
        return $this->text;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setDraftId(int $value): static
    {
        $this->draftId = $value;

        return $this;
    }

    public function setForumTopicId(int $value): static
    {
        $this->forumTopicId = $value;

        return $this;
    }

    public function setText(FormattedText $value): static
    {
        $this->text = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'chat_id'        => $this->chatId,
            'draft_id'       => $this->draftId,
            'forum_topic_id' => $this->forumTopicId,
            'text'           => $this->text->jsonSerialize(),
        ];
    }
}
