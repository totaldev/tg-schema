<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Start;

use Totaldev\TgSchema\Can\CanPostStoryResult;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The live story failed to post with an error to be handled.
 */
class StartLiveStoryResultFail extends StartLiveStoryResult
{
    public const string TYPE_NAME = 'startLiveStoryResultFail';

    public function __construct(
        /**
         * Type of the error; other error types may be returned as regular errors.
         */
        protected CanPostStoryResult $errorType
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StartLiveStoryResultFail
    {
        return new static(
            errorType: TdSchemaRegistry::fromArray($array['error_type']),
        );
    }

    public function getErrorType(): CanPostStoryResult
    {
        return $this->errorType;
    }

    public function setErrorType(CanPostStoryResult $value): static
    {
        $this->errorType = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'error_type' => $this->errorType->jsonSerialize(),
        ];
    }
}
