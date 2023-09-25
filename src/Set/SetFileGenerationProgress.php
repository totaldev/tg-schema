<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Informs TDLib on a file generation progress
 */
class SetFileGenerationProgress extends TdFunction
{
    public const TYPE_NAME = 'setFileGenerationProgress';

    /**
     * Expected size of the generated file, in bytes; 0 if unknown
     *
     * @var int
     */
    protected int $expectedSize;

    /**
     * The identifier of the generation process
     *
     * @var int
     */
    protected int $generationId;

    /**
     * The number of bytes already generated
     *
     * @var int
     */
    protected int $localPrefixSize;

    public function __construct(int $generationId, int $expectedSize, int $localPrefixSize)
    {
        $this->generationId = $generationId;
        $this->expectedSize = $expectedSize;
        $this->localPrefixSize = $localPrefixSize;
    }

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
            '@type' => static::TYPE_NAME,
            'generation_id' => $this->generationId,
            'expected_size' => $this->expectedSize,
            'local_prefix_size' => $this->localPrefixSize,
        ];
    }
}
