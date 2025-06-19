<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Can\CanPostStoryResult;
use Totaldev\TgSchema\Error\Error;
use Totaldev\TgSchema\Story\Story;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A story failed to post. If the story posting is canceled, then updateStoryDeleted will be received instead of this update.
 */
class UpdateStoryPostFailed extends Update
{
    public const TYPE_NAME = 'updateStoryPostFailed';

    public function __construct(
        /**
         * The failed to post story.
         */
        protected Story               $story,
        /**
         * The cause of the story posting failure.
         */
        protected Error               $error,
        /**
         * Type of the error; may be null if unknown.
         */
        protected ?CanPostStoryResult $errorType
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateStoryPostFailed
    {
        return new static(
            TdSchemaRegistry::fromArray($array['story']),
            TdSchemaRegistry::fromArray($array['error']),
            isset($array['error_type']) ? TdSchemaRegistry::fromArray($array['error_type']) : null,
        );
    }

    public function getError(): Error
    {
        return $this->error;
    }

    public function getErrorType(): ?CanPostStoryResult
    {
        return $this->errorType;
    }

    public function getStory(): Story
    {
        return $this->story;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'story'      => $this->story->typeSerialize(),
            'error'      => $this->error->typeSerialize(),
            'error_type' => (isset($this->errorType) ? $this->errorType : null),
        ];
    }
}
