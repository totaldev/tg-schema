<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Can\CanSendStoryResult;
use Totaldev\TgSchema\Error\Error;
use Totaldev\TgSchema\Story\Story;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A story failed to send. If the story sending is canceled, then updateStoryDeleted will be received instead of this update
 */
class UpdateStorySendFailed extends Update
{
    public const TYPE_NAME = 'updateStorySendFailed';

    /**
     * The cause of the story sending failure
     *
     * @var Error
     */
    protected Error $error;

    /**
     * Type of the error; may be null if unknown
     *
     * @var CanSendStoryResult|null
     */
    protected ?CanSendStoryResult $errorType;

    /**
     * The failed to send story
     *
     * @var Story
     */
    protected Story $story;

    public function __construct(Story $story, Error $error, ?CanSendStoryResult $errorType)
    {
        parent::__construct();

        $this->story = $story;
        $this->error = $error;
        $this->errorType = $errorType;
    }

    public static function fromArray(array $array): UpdateStorySendFailed
    {
        return new static(
            TdSchemaRegistry::fromArray($array['story']),
            TdSchemaRegistry::fromArray($array['error']),
            (isset($array['error_type']) ? TdSchemaRegistry::fromArray($array['error_type']) : null),
        );
    }

    public function getError(): Error
    {
        return $this->error;
    }

    public function getErrorType(): ?CanSendStoryResult
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
            '@type' => static::TYPE_NAME,
            'story' => $this->story->typeSerialize(),
            'error' => $this->error->typeSerialize(),
            'error_type' => (isset($this->errorType) ? $this->errorType : null),
        ];
    }
}
