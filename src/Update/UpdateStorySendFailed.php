<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Can\CanSendStoryResult;
use Totaldev\TgSchema\Story\Story;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A story failed to send. If the story sending is canceled, then updateStoryDeleted will be received instead of this update
 */
class UpdateStorySendFailed extends Update
{
    public const TYPE_NAME = 'updateStorySendFailed';

    /**
     * The failed to send story
     *
     * @var Story
     */
    protected Story $story;

    /**
     * The cause of the failure; may be null if unknown
     *
     * @var CanSendStoryResult|null
     */
    protected ?CanSendStoryResult $error;

    /**
     * An error code
     *
     * @var int
     */
    protected int $errorCode;

    /**
     * Error message
     *
     * @var string
     */
    protected string $errorMessage;

    public function __construct(Story $story, ?CanSendStoryResult $error, int $errorCode, string $errorMessage)
    {
        parent::__construct();

        $this->story = $story;
        $this->error = $error;
        $this->errorCode = $errorCode;
        $this->errorMessage = $errorMessage;
    }

    public static function fromArray(array $array): UpdateStorySendFailed
    {
        return new static(
            TdSchemaRegistry::fromArray($array['story']),
            (isset($array['error']) ? TdSchemaRegistry::fromArray($array['error']) : null),
            $array['error_code'],
            $array['error_message'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'story' => $this->story->typeSerialize(),
            'error' => (isset($this->error) ? $this->error : null),
            'error_code' => $this->errorCode,
            'error_message' => $this->errorMessage,
        ];
    }

    public function getStory(): Story
    {
        return $this->story;
    }

    public function getError(): ?CanSendStoryResult
    {
        return $this->error;
    }

    public function getErrorCode(): int
    {
        return $this->errorCode;
    }

    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }
}
