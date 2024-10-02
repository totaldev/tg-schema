<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

/**
 * A message with a game.
 */
class PushMessageContentGame extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentGame';

    public function __construct(
        /**
         * Game title, empty for pinned game message.
         */
        protected string $title,
        /**
         * True, if the message is a pinned message with the specified content.
         */
        protected bool   $isPinned,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): PushMessageContentGame
    {
        return new static(
            $array['title'],
            $array['is_pinned'],
        );
    }

    public function getIsPinned(): bool
    {
        return $this->isPinned;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'title'     => $this->title,
            'is_pinned' => $this->isPinned,
        ];
    }
}
