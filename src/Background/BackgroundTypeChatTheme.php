<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Background;

/**
 * A background from a chat theme based on an emoji; can be used only as a chat background in channels.
 */
class BackgroundTypeChatTheme extends BackgroundType
{
    public const string TYPE_NAME = 'backgroundTypeChatTheme';

    public function __construct(
        /**
         * Name of the emoji chat theme.
         */
        protected string $themeName
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): BackgroundTypeChatTheme
    {
        return new static(
            $array['theme_name'],
        );
    }

    public function getThemeName(): string
    {
        return $this->themeName;
    }

    public function setThemeName(string $value): static
    {
        $this->themeName = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'theme_name' => $this->themeName,
        ];
    }
}
