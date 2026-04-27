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
    public const string TYPE_NAME = 'shareUsersWithBot';

    public function __construct(
        /**
         * Identifier of the button.
         */
        protected int   $buttonId,
        /**
         * Identifier of the chat with the bot.
         */
        protected int   $chatId,
        /**
         * Identifier of the message with the button.
         */
        protected int   $messageId,
        /**
         * Pass true to check that the users can be shared by the button instead of actually sharing them.
         */
        protected bool  $onlyCheck,
        /**
         * Identifiers of the shared users.
         *
         * @var int[]
         */
        protected array $sharedUserIds,
    ) {}

    public static function fromArray(array $array): ShareUsersWithBot
    {
        return new static(
            buttonId     : $array['button_id'],
            chatId       : $array['chat_id'],
            messageId    : $array['message_id'],
            onlyCheck    : $array['only_check'],
            sharedUserIds: $array['shared_user_ids'],
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

    public function setButtonId(int $value): static
    {
        $this->buttonId = $value;

        return $this;
    }

    public function setChatId(int $value): static
    {
        $this->chatId = $value;

        return $this;
    }

    public function setMessageId(int $value): static
    {
        $this->messageId = $value;

        return $this;
    }

    public function setOnlyCheck(bool $value): static
    {
        $this->onlyCheck = $value;

        return $this;
    }

    public function setSharedUserIds(array $value): static
    {
        $this->sharedUserIds = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'button_id'       => $this->buttonId,
            'chat_id'         => $this->chatId,
            'message_id'      => $this->messageId,
            'only_check'      => $this->onlyCheck,
            'shared_user_ids' => $this->sharedUserIds,
        ];
    }
}
