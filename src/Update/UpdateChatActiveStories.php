<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Chat\ChatActiveStories;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The list of active stories posted by a specific chat has changed
 */
class UpdateChatActiveStories extends Update
{
    public const TYPE_NAME = 'updateChatActiveStories';

    /**
     * The new list of active stories
     *
     * @var ChatActiveStories
     */
    protected ChatActiveStories $activeStories;

    public function __construct(ChatActiveStories $activeStories)
    {
        parent::__construct();

        $this->activeStories = $activeStories;
    }

    public static function fromArray(array $array): UpdateChatActiveStories
    {
        return new static(
            TdSchemaRegistry::fromArray($array['active_stories']),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'active_stories' => $this->activeStories->typeSerialize(),
        ];
    }

    public function getActiveStories(): ChatActiveStories
    {
        return $this->activeStories;
    }
}
