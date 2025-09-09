<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

/**
 * A chat theme was edited.
 */
class PushMessageContentChatSetTheme extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentChatSetTheme';

    public function __construct(
        /**
         * If non-empty, name of a new theme, set for the chat. Otherwise, the chat theme was reset to the default one.
         */
        protected string $themeName
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentChatSetTheme
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
