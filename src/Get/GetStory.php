<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns a story
 */
class GetStory extends TdFunction
{
    public const TYPE_NAME = 'getStory';

    /**
     * Identifier of the chat that posted the story
     *
     * @var int
     */
    protected int $storySenderChatId;

    /**
     * Story identifier
     *
     * @var int
     */
    protected int $storyId;

    /**
     * Pass true to get only locally available information without sending network requests
     *
     * @var bool
     */
    protected bool $onlyLocal;

    public function __construct(int $storySenderChatId, int $storyId, bool $onlyLocal)
    {
        $this->storySenderChatId = $storySenderChatId;
        $this->storyId = $storyId;
        $this->onlyLocal = $onlyLocal;
    }

    public static function fromArray(array $array): GetStory
    {
        return new static(
            $array['story_sender_chat_id'],
            $array['story_id'],
            $array['only_local'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'story_sender_chat_id' => $this->storySenderChatId,
            'story_id' => $this->storyId,
            'only_local' => $this->onlyLocal,
        ];
    }

    public function getStorySenderChatId(): int
    {
        return $this->storySenderChatId;
    }

    public function getStoryId(): int
    {
        return $this->storyId;
    }

    public function getOnlyLocal(): bool
    {
        return $this->onlyLocal;
    }
}
