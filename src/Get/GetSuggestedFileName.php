<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Returns suggested name for saving a file in a given directory
 */
class GetSuggestedFileName extends TdFunction
{
    public const TYPE_NAME = 'getSuggestedFileName';

    /**
     * Directory in which the file is supposed to be saved
     *
     * @var string
     */
    protected string $directory;

    /**
     * Identifier of the file
     *
     * @var int
     */
    protected int $fileId;

    public function __construct(int $fileId, string $directory)
    {
        $this->fileId = $fileId;
        $this->directory = $directory;
    }

    public static function fromArray(array $array): GetSuggestedFileName
    {
        return new static(
            $array['file_id'],
            $array['directory'],
        );
    }

    public function getDirectory(): string
    {
        return $this->directory;
    }

    public function getFileId(): int
    {
        return $this->fileId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'file_id' => $this->fileId,
            'directory' => $this->directory,
        ];
    }
}
