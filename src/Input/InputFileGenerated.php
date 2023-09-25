<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A file generated by the application
 */
class InputFileGenerated extends InputFile
{
    public const TYPE_NAME = 'inputFileGenerated';

    /**
     * String specifying the conversion applied to the original file; must be persistent across application restarts. Conversions beginning with '#' are
     * reserved for internal TDLib usage
     *
     * @var string
     */
    protected string $conversion;

    /**
     * Expected size of the generated file, in bytes; 0 if unknown
     *
     * @var int
     */
    protected int $expectedSize;

    /**
     * Local path to a file from which the file is generated; may be empty if there is no such file
     *
     * @var string
     */
    protected string $originalPath;

    public function __construct(string $originalPath, string $conversion, int $expectedSize)
    {
        parent::__construct();

        $this->originalPath = $originalPath;
        $this->conversion = $conversion;
        $this->expectedSize = $expectedSize;
    }

    public static function fromArray(array $array): InputFileGenerated
    {
        return new static(
            $array['original_path'],
            $array['conversion'],
            $array['expected_size'],
        );
    }

    public function getConversion(): string
    {
        return $this->conversion;
    }

    public function getExpectedSize(): int
    {
        return $this->expectedSize;
    }

    public function getOriginalPath(): string
    {
        return $this->originalPath;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'original_path' => $this->originalPath,
            'conversion' => $this->conversion,
            'expected_size' => $this->expectedSize,
        ];
    }
}
