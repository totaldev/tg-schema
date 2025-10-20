<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Chat\ChatTheme;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A theme in the chat has been changed.
 */
class MessageChatSetTheme extends MessageContent
{
    public const TYPE_NAME = 'messageChatSetTheme';

    public function __construct(
        /**
         * New theme for the chat; may be null if chat theme was reset to the default one.
         */
        protected ?ChatTheme $theme
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageChatSetTheme
    {
        return new static(
            isset($array['theme']) ? TdSchemaRegistry::fromArray($array['theme']) : null,
        );
    }

    public function getTheme(): ?ChatTheme
    {
        return $this->theme;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'theme' => $this->theme ?? null,
        ];
    }
}
