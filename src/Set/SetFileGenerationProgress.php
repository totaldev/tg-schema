<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Informs TDLib on a file generation progress.
 */
class SetFileGenerationProgress extends TdFunction
{
    public const TYPE_NAME = 'setFileGenerationProgress';

    public function __construct(
        /**
         * The identifier of the generation process.
         */
        protected int $generationId,
        /**
         * Expected size of the generated file, in bytes; 0 if unknown.
         */
        protected int $expectedSize,
        /**
         * The number of bytes already generated.
         */
        protected int $localPrefixSize
    ) {}

    public static function fromArray(array $array): SetFileGenerationProgress
    {
        return new static(
            $array['generation_id'],
            $array['expected_size'],
            $array['local_prefix_size'],
        );
    }

    public function getExpectedSize(): int
    {
        return $this->expectedSize;
    }

    public function getGenerationId(): int
    {
        return $this->generationId;
    }

    public function getLocalPrefixSize(): int
    {
        return $this->localPrefixSize;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'generation_id'     => $this->generationId,
            'expected_size'     => $this->expectedSize,
            'local_prefix_size' => $this->localPrefixSize,
        ];
    }
}
