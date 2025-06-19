<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Share;

use Totaldev\TgSchema\TdFunction;

/**
 * Shares users after pressing a keyboardButtonTypeRequestUsers button with the bot.
 */
class ShareUsersWithBot extends TdFunction
{
    public const TYPE_NAME = 'shareUsersWithBot';

    public function __construct(
        /**
         * Identifier of the chat with the bot.
         */
        protected int   $chatId,
        /**
         * Identifier of the message with the button.
         */
        protected int   $messageId,
        /**
         * Identifier of the button.
         */
        protected int   $buttonId,
        /**
         * Identifiers of the shared users.
         *
         * @var int[]
         */
        protected array $sharedUserIds,
        /**
         * Pass true to check that the users can be shared by the button instead of actually sharing them.
         */
        protected bool  $onlyCheck
    ) {}

    public static function fromArray(array $array): ShareUsersWithBot
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['button_id'],
            $array['shared_user_ids'],
            $array['only_check'],
        );
    }

    public function getButtonId(): int
    {
        return $this->buttonId;
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }

    public function getOnlyCheck(): bool
    {
        return $this->onlyCheck;
    }

    public function getSharedUserIds(): array
    {
        return $this->sharedUserIds;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'chat_id'         => $this->chatId,
            'message_id'      => $this->messageId,
            'button_id'       => $this->buttonId,
            'shared_user_ids' => $this->sharedUserIds,
            'only_check'      => $this->onlyCheck,
        ];
    }
}
