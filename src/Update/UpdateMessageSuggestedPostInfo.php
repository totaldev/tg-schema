<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Suggested\SuggestedPostInfo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Information about suggested post of a message was changed.
 */
class UpdateMessageSuggestedPostInfo extends Update
{
    public const TYPE_NAME = 'updateMessageSuggestedPostInfo';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int               $chatId,
        /**
         * Message identifier.
         */
        protected int               $messageId,
        /**
         * The new information about the suggested post.
         */
        protected SuggestedPostInfo $suggestedPostInfo,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateMessageSuggestedPostInfo
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            TdSchemaRegistry::fromArray($array['suggested_post_info']),
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getSuggestedPostInfo(): SuggestedPostInfo
    {
        return $this->suggestedPostInfo;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'chat_id'             => $this->chatId,
            'message_id'          => $this->messageId,
            'suggested_post_info' => $this->suggestedPostInfo->typeSerialize(),
        ];
    }
}
