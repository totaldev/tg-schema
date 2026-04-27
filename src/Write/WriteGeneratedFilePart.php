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
    public const string TYPE_NAME = 'writeGeneratedFilePart';

    public function __construct(
        /**
         * The data to write.
         */
        protected string $data,
        /**
         * The identifier of the generation process.
         */
        protected int    $generationId,
        /**
         * The offset from which to write the data to the file.
         */
        protected int    $offset,
    ) {}

    public static function fromArray(array $array): WriteGeneratedFilePart
    {
        return new static(
            data        : $array['data'],
            generationId: $array['generation_id'],
            offset      : $array['offset'],
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

    public function setData(string $value): static
    {
        $this->data = $value;

        return $this;
    }

    public function setGenerationId(int $value): static
    {
        $this->generationId = $value;

        return $this;
    }

    public function setOffset(int $value): static
    {
        $this->offset = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'data'          => $this->data,
            'generation_id' => $this->generationId,
            'offset'        => $this->offset,
        ];
    }
}
