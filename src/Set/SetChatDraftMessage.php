<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Draft\DraftMessage;
use Totaldev\TgSchema\Message\MessageTopic;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the draft message in a chat or a topic.
 */
class SetChatDraftMessage extends TdFunction
{
    public const string TYPE_NAME = 'setChatDraftMessage';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int           $chatId,
        /**
         * New draft message; pass null to remove the draft. All files in draft message content must be of the type inputFileLocal. Media thumbnails and captions are ignored.
         */
        protected ?DraftMessage $draftMessage = null,
        /**
         * Topic in which the draft will be changed; pass null to change the draft for the chat itself.
         */
        protected ?MessageTopic $topicId = null,
    ) {}

    public static function fromArray(array $array): SetChatDraftMessage
    {
        return new static(
            chatId      : $array['chat_id'],
            draftMessage: (isset($array['draft_message']) ? TdSchemaRegistry::fromArray($array['draft_message']) : null),
            topicId     : (isset($array['topic_id']) ? TdSchemaRegistry::fromArray($array['topic_id']) : null),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getDraftMessage(): ?DraftMessage
    {
        return $this->draftMessage;
    }

    public function getTopicId(): ?MessageTopic
    {
        return $this->topicId;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setDraftMessage(?DraftMessage $value): static
    {
        $this->draftMessage = $value;

        return $this;
    }

    public function setTopicId(?MessageTopic $value): static
    {
        $this->topicId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'chat_id'       => $this->chatId,
            'draft_message' => (null !== $this->draftMessage ? $this->draftMessage->jsonSerialize() : null),
            'topic_id'      => (null !== $this->topicId ? $this->topicId->jsonSerialize() : null),
        ];
    }
}
