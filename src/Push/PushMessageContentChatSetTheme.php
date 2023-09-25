<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A chat theme was edited
 */
class PushMessageContentChatSetTheme extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentChatSetTheme';

    /**
     * If non-empty, name of a new theme, set for the chat. Otherwise, the chat theme was reset to the default one
     *
     * @var string
     */
    protected string $themeName;

    public function __construct(string $themeName)
    {
        parent::__construct();

        $this->themeName = $themeName;
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
            '@type' => static::TYPE_NAME,
            'theme_name' => $this->themeName,
        ];
    }
}
