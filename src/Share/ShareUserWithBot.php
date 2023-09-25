<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Share;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Shares a user after pressing a keyboardButtonTypeRequestUser button with the bot
 */
class ShareUserWithBot extends TdFunction
{
    public const TYPE_NAME = 'shareUserWithBot';

    /**
     * Identifier of the button
     *
     * @var int
     */
    protected int $buttonId;

    /**
     * Identifier of the chat with the bot
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Identifier of the message with the button
     *
     * @var int
     */
    protected int $messageId;

    /**
     * Pass true to check that the user can be shared by the button instead of actually sharing them
     *
     * @var bool
     */
    protected bool $onlyCheck;

    /**
     * Identifier of the shared user
     *
     * @var int
     */
    protected int $sharedUserId;

    public function __construct(int $chatId, int $messageId, int $buttonId, int $sharedUserId, bool $onlyCheck)
    {
        $this->chatId = $chatId;
        $this->messageId = $messageId;
        $this->buttonId = $buttonId;
        $this->sharedUserId = $sharedUserId;
        $this->onlyCheck = $onlyCheck;
    }

    public static function fromArray(array $array): ShareUserWithBot
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['button_id'],
            $array['shared_user_id'],
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

    public function getSharedUserId(): int
    {
        return $this->sharedUserId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_id' => $this->messageId,
            'button_id' => $this->buttonId,
            'shared_user_id' => $this->sharedUserId,
            'only_check' => $this->onlyCheck,
        ];
    }
}
