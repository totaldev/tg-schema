<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Write;

use Totaldev\TgSchema\TdFunction;

/**
 * Writes a part of a generated file. This method is intended to be used only if the application has no direct access to TDLib's file system, because it is
 * usually slower than a direct write to the destination file.
 */
class WriteGeneratedFilePart extends TdFunction
{
    public const TYPE_NAME = 'writeGeneratedFilePart';

    public function __construct(
        /**
         * The identifier of the generation process.
         */
        protected int    $generationId,
        /**
         * The offset from which to write the data to the file.
         */
        protected int    $offset,
        /**
         * The data to write.
         */
        protected string $data
    ) {}

    public static function fromArray(array $array): WriteGeneratedFilePart
    {
        return new static(
            $array['generation_id'],
            $array['offset'],
            $array['data'],
        );
    }

    public function getData(): string
    {
        return $this->data;
    }

    public function getGenerationId(): int
    {
        return $this->generationId;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'generation_id' => $this->generationId,
            'offset'        => $this->offset,
            'data'          => $this->data,
        ];
    }
}
