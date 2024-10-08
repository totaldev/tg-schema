<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Chat\ChatActiveStories;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The list of active stories posted by a specific chat has changed.
 */
class UpdateChatActiveStories extends Update
{
    public const TYPE_NAME = 'updateChatActiveStories';

    public function __construct(
        /**
         * The new list of active stories.
         */
        protected ChatActiveStories $activeStories
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateChatActiveStories
    {
        return new static(
            TdSchemaRegistry::fromArray($array['active_stories']),
        );
    }

    public function getActiveStories(): ChatActiveStories
    {
        return $this->activeStories;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'          => static::TYPE_NAME,
            'active_stories' => $this->activeStories->typeSerialize(),
        ];
    }
}
