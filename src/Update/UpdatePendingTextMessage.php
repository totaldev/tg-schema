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
    public const TYPE_NAME = 'updatePendingTextMessage';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int           $chatId,
        /**
         * The forum topic identifier in which the message will be sent; 0 if none.
         */
        protected int           $forumTopicId,
        /**
         * Unique identifier of the message draft within the message thread.
         */
        protected int           $draftId,
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
            $array['chat_id'],
            $array['forum_topic_id'],
            $array['draft_id'],
            TdSchemaRegistry::fromArray($array['text']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'chat_id'        => $this->chatId,
            'forum_topic_id' => $this->forumTopicId,
            'draft_id'       => $this->draftId,
            'text'           => $this->text->typeSerialize(),
        ];
    }
}
