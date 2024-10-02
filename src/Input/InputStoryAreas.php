<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of story areas to be added.
 */
class InputStoryAreas extends TdObject
{
    public const TYPE_NAME = 'inputStoryAreas';

    public function __construct(
        /**
         * List of input story areas. Currently, a story can have up to 10 inputStoryAreaTypeLocation, inputStoryAreaTypeFoundVenue, and inputStoryAreaTypePreviousVenue areas, up to getOption("story_suggested_reaction_area_count_max") inputStoryAreaTypeSuggestedReaction areas, up to 1 inputStoryAreaTypeMessage area, up to getOption("story_link_area_count_max") inputStoryAreaTypeLink areas if the current user is a Telegram Premium user, and up to 3 inputStoryAreaTypeWeather areas.
         *
         * @var InputStoryArea[]
         */
        protected array $areas
    ) {}

    public static function fromArray(array $array): InputStoryAreas
    {
        return new static(
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['areas']),
        );
    }

    public function getAreas(): array
    {
        return $this->areas;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            array_map(fn($x) => $x->typeSerialize(), $this->areas),
        ];
    }
}
