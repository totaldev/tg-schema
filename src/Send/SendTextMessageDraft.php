<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Send;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sends a draft for a being generated text message; for bots only.
 */
class SendTextMessageDraft extends TdFunction
{
    public const string TYPE_NAME = 'sendTextMessageDraft';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int           $chatId,
        /**
         * Unique identifier of the draft.
         */
        protected int           $draftId,
        /**
         * The forum topic identifier in which the message will be sent; pass 0 if none.
         */
        protected int           $forumTopicId,
        /**
         * Draft text of the message.
         */
        protected FormattedText $text,
    ) {}

    public static function fromArray(array $array): SendTextMessageDraft
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
