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
         * If non-empty, human-readable name of the new theme. Otherwise, the chat theme was reset to the default one.
         */
        protected string $name
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentChatSetTheme
    {
        return new static(
            $array['name'],
        );
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'name'  => $this->name,
        ];
    }
}
