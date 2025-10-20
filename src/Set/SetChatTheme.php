<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\Input\InputChatTheme;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

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
        protected int             $chatId,
        /**
         * New chat theme; pass null to return the default theme.
         */
        protected ?InputChatTheme $theme = null,
    ) {}

    public static function fromArray(array $array): SetChatTheme
    {
        return new static(
            $array['chat_id'],
            isset($array['theme']) ? TdSchemaRegistry::fromArray($array['theme']) : null,
        );
    }

    public function getChatId(): int
    {
        return $this->chatId;
    }

    public function getTheme(): ?InputChatTheme
    {
        return $this->theme;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'chat_id' => $this->chatId,
            'theme'   => $this->theme ?? null,
        ];
    }
}
