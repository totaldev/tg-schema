<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes the chat theme. Supported only in private and secret chats.
 */
class SetChatTheme extends TdFunction
{
    public const TYPE_NAME = 'setChatTheme';

    public function __construct(
        /**
         * Chat identifier.
         */
        protected int    $chatId,
        /**
         * Name of the new chat theme; pass an empty string to return the default theme.
         */
        protected string $themeName = ''
    ) {}

    public static function fromArray(array $array): SetChatTheme
    {
        return new static(
            $array['chat_id'],
            $array['theme_name'],
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getThemeName(): string
    {
        return $this->themeName;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'chat_id'    => $this->chatId,
            'theme_name' => $this->themeName,
        ];
    }
}
