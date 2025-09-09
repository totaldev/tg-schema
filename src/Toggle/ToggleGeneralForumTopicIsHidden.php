<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Toggles whether a General topic is hidden in a forum supergroup chat; requires can_manage_topics right in the supergroup.
 */
class ToggleGeneralForumTopicIsHidden extends TdFunction
{
    public const TYPE_NAME = 'toggleGeneralForumTopicIsHidden';

    public function __construct(
        /**
         * Identifier of the chat.
         */
        protected int  $chatId,
        /**
         * Pass true to hide and close the General topic; pass false to unhide it.
         */
        protected bool $isHidden,
    ) {}

    public static function fromArray(array $array): ToggleGeneralForumTopicIsHidden
    {
        return new static(
            $array['chat_id'],
            $array['is_hidden'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getIsHidden(): bool
    {
        return $this->isHidden;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'chat_id'   => $this->chatId,
            'is_hidden' => $this->isHidden,
        ];
    }
}
