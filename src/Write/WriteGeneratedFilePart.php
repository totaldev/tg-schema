<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Write;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Writes a part of a generated file. This method is intended to be used only if the application has no direct access to TDLib's file system, because it is usually slower than a direct write to the destination file
 */
class WriteGeneratedFilePart extends TdFunction
{
    public const TYPE_NAME = 'writeGeneratedFilePart';

    /**
     * The identifier of the generation process
     *
     * @var int
     */
    protected int $generationId;

    /**
     * The offset from which to write the data to the file
     *
     * @var int
     */
    protected int $offset;

    /**
     * The data to write
     *
     * @var string
     */
    protected string $data;

    public function __construct(int $generationId, int $offset, string $data)
    {
        $this->generationId = $generationId;
        $this->offset = $offset;
        $this->data = $data;
    }

    public static function fromArray(array $array): WriteGeneratedFilePart
    {
        return new static(
            $array['generation_id'],
            $array['offset'],
            $array['data'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'generation_id' => $this->generationId,
            'offset' => $this->offset,
            'data' => $this->data,
        ];
    }

    public function getGenerationId(): int
    {
        return $this->generationId;
    }

    public function getOffset(): int
    {
        return $this->offset;
    }

    public function getData(): string
    {
        return $this->data;
    }
}
