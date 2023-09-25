<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns information about a button of type inlineKeyboardButtonTypeLoginUrl. The method needs to be called when the user presses the button
 */
class GetLoginUrlInfo extends TdFunction
{
    public const TYPE_NAME = 'getLoginUrlInfo';

    /**
     * Button identifier
     *
     * @var int
     */
    protected int $buttonId;

    /**
     * Chat identifier of the message with the button
     *
     * @var int
     */
    protected int $chatId;

    /**
     * Message identifier of the message with the button
     *
     * @var int
     */
    protected int $messageId;

    public function __construct(int $chatId, int $messageId, int $buttonId)
    {
        $this->chatId = $chatId;
        $this->messageId = $messageId;
        $this->buttonId = $buttonId;
    }

    public static function fromArray(array $array): GetLoginUrlInfo
    {
        return new static(
            $array['chat_id'],
            $array['message_id'],
            $array['button_id'],
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

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'message_id' => $this->messageId,
            'button_id' => $this->buttonId,
        ];
    }
}
