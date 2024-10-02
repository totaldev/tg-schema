<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Delete;

use Totaldev\TgSchema\TdFunction;

/**
 * Deletes background in a specific chat.
 */
class DeleteChatBackground extends TdFunction
{
    public const TYPE_NAME = 'deleteChatBackground';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int  $chatId,
        /**
         * Pass true to restore previously set background. Can be used only in private and secret chats with non-deleted users if userFullInfo.set_chat_background == true. Supposed to be used from messageChatSetBackground messages with the currently set background that was set for both sides by the other user.
         */
        protected bool $restorePrevious,
    ) {}

    public static function fromArray(array $array): DeleteChatBackground
    {
        return new static(
            $array['chat_id'],
            $array['restore_previous'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getRestorePrevious(): bool
    {
        return $this->restorePrevious;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'chat_id'          => $this->chatId,
            'restore_previous' => $this->restorePrevious,
        ];
    }
}
