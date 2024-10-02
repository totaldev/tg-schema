<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Load;

use Totaldev\TgSchema\TdFunction;

/**
 * Loads more Saved Messages topics. The loaded topics will be sent through updateSavedMessagesTopic. Topics are sorted by their topic.order in descending
 * order. Returns a 404 error if all topics have been loaded.
 */
class LoadSavedMessagesTopics extends TdFunction
{
    public const TYPE_NAME = 'loadSavedMessagesTopics';

    public function __construct(
        /**
         * The maximum number of topics to be loaded. For optimal performance, the number of loaded topics is chosen by TDLib and can be smaller than the specified limit, even if the end of the list is not reached.
         */
        protected int $limit
    ) {}

    public static function fromArray(array $array): LoadSavedMessagesTopics
    {
        return new static(
            $array['limit'],
        );
    }

    public function getLimit(): int
    {
        return $this->limit;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'limit' => $this->limit,
        ];
    }
}
