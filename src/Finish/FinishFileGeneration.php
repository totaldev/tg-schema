<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Finish;

use Totaldev\TgSchema\Error\Error;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Finishes the file generation.
 */
class FinishFileGeneration extends TdFunction
{
    public const TYPE_NAME = 'finishFileGeneration';

    public function __construct(
        /**
         * The identifier of the generation process.
         */
        protected int   $generationId,
        /**
         * If passed, the file generation has failed and must be terminated; pass null if the file generation succeeded.
         */
        protected Error $error
    ) {}

    public static function fromArray(array $array): FinishFileGeneration
    {
        return new static(
            $array['generation_id'],
            TdSchemaRegistry::fromArray($array['error']),
        );
    }

    public function getError(): Error
    {
        return $this->error;
    }

    public function getGenerationId(): int
    {
        return $this->generationId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'generation_id' => $this->generationId,
            'error'         => $this->error->typeSerialize(),
        ];
    }
}
