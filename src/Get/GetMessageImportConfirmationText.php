<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns a confirmation text to be shown to the user before starting message import.
 */
class GetMessageImportConfirmationText extends TdFunction
{
    public const TYPE_NAME = 'getMessageImportConfirmationText';

    public function __construct(
        /**
         * Identifier of a chat to which the messages will be imported. It must be an identifier of a private chat with a mutual contact or an identifier of a supergroup chat with can_change_info member right.
         */
        protected int $chatId
    ) {}

    public static function fromArray(array $array): GetMessageImportConfirmationText
    {
        return new static(
            $array['chat_id'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
        ];
    }
}
