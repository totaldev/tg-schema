<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Push;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A message with a game
 */
class PushMessageContentGame extends PushMessageContent
{
    public const TYPE_NAME = 'pushMessageContentGame';

    /**
     * True, if the message is a pinned message with the specified content
     *
     * @var bool
     */
    protected bool $isPinned;

    /**
     * Game title, empty for pinned game message
     *
     * @var string
     */
    protected string $title;

    public function __construct(string $title, bool $isPinned)
    {
        parent::__construct();

        $this->title = $title;
        $this->isPinned = $isPinned;
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
            '@type' => static::TYPE_NAME,
            'title' => $this->title,
            'is_pinned' => $this->isPinned,
        ];
    }
}
