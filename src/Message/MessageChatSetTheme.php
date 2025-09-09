<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * A theme in the chat has been changed.
 */
class MessageChatSetTheme extends MessageContent
{
    public const TYPE_NAME = 'messageChatSetTheme';

    public function __construct(
        /**
         * If non-empty, name of a new theme, set for the chat. Otherwise, chat theme was reset to the default one.
         */
        protected string $themeName
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageChatSetTheme
    {
        return new static(
            $array['theme_name'],
        );
    }

    public function getThemeName(): string
    {
        return $this->themeName;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'theme_name' => $this->themeName,
        ];
    }
}
