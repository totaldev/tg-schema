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
    public const string TYPE_NAME = 'setFileGenerationProgress';

    public function __construct(
        /**
         * Expected size of the generated file, in bytes; 0 if unknown.
         */
        protected int $expectedSize,
        /**
         * The identifier of the generation process.
         */
        protected int $generationId,
        /**
         * The number of bytes already generated.
         */
        protected int $localPrefixSize,
    ) {}

    public static function fromArray(array $array): SetFileGenerationProgress
    {
        return new static(
            expectedSize   : $array['expected_size'],
            generationId   : $array['generation_id'],
            localPrefixSize: $array['local_prefix_size'],
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

    public function setExpectedSize(int $value): static
    {
        $this->expectedSize = $value;

        return $this;
    }

    public function setGenerationId(int $value): static
    {
        $this->generationId = $value;

        return $this;
    }

    public function setLocalPrefixSize(int $value): static
    {
        $this->localPrefixSize = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'             => static::TYPE_NAME,
            'expected_size'     => $this->expectedSize,
            'generation_id'     => $this->generationId,
            'local_prefix_size' => $this->localPrefixSize,
        ];
    }
}
