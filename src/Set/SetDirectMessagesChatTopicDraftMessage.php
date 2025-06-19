<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Draft\DraftMessage;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Changes the draft message in the topic in a channel direct messages chat administered by the current user.
 */
class SetDirectMessagesChatTopicDraftMessage extends TdFunction
{
    public const TYPE_NAME = 'setDirectMessagesChatTopicDraftMessage';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int          $chatId,
        /**
         * Topic identifier.
         */
        protected int          $topicId,
        /**
         * New draft message; pass null to remove the draft. All files in draft message content must be of the type inputFileLocal. Media thumbnails and captions are ignored.
         */
        protected DraftMessage $draftMessage
    ) {}

    public static function fromArray(array $array): SetDirectMessagesChatTopicDraftMessage
    {
        return new static(
            $array['chat_id'],
            $array['topic_id'],
            TdSchemaRegistry::fromArray($array['draft_message']),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getDraftMessage(): DraftMessage
    {
        return $this->draftMessage;
    }

    public function getTopicId(): int
    {
        return $this->topicId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'chat_id'       => $this->chatId,
            'topic_id'      => $this->topicId,
            'draft_message' => $this->draftMessage->typeSerialize(),
        ];
    }
}
