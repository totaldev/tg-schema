<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema;

/**
 * Informs TDLib that the user opened the sponsored chat via the button, the name, the photo, or a mention in the sponsored message
 */
class ClickChatSponsoredMessage extends TdFunction
{
    public const TYPE_NAME = 'clickChatSponsoredMessage';

    /**
     * Chat identifier of the sponsored message
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Identifier of the sponsored message
     *
     * @var int
     */
    protected int $messageId;

    public function __construct(int $chatId, int $messageId)
    {
        $this->chatId = $chatId;
        $this->messageId = $messageId;
    }

    public static function fromArray(array $array): ClickChatSponsoredMessage
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_id' => $this->messageId,
        ];
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getMessageId(): int
    {
        return $this->messageId;
    }
}
