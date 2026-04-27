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
    public const string TYPE_NAME = 'updateStoryPostFailed';

    public function __construct(
        /**
         * The cause of the story posting failure.
         */
        protected Error               $error,
        /**
         * Type of the error; may be null if unknown.
         */
        protected ?CanPostStoryResult $errorType,
        /**
         * The failed to post story.
         */
        protected Story               $story,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateStoryPostFailed
    {
        return new static(
            error    : TdSchemaRegistry::fromArray($array['error']),
            errorType: (isset($array['error_type']) ? TdSchemaRegistry::fromArray($array['error_type']) : null),
            story    : TdSchemaRegistry::fromArray($array['story']),
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

    public function setError(Error $value): static
    {
        $this->error = $value;

        return $this;
    }

    public function setErrorType(?CanPostStoryResult $value): static
    {
        $this->errorType = $value;

        return $this;
    }

    public function setStory(Story $value): static
    {
        $this->story = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'error'      => $this->error->jsonSerialize(),
            'error_type' => (null !== $this->errorType ? $this->errorType->jsonSerialize() : null),
            'story'      => $this->story->jsonSerialize(),
        ];
    }
}
