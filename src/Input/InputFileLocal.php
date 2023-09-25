<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A file defined by a local path
 */
class InputFileLocal extends InputFile
{
    public const TYPE_NAME = 'inputFileLocal';

    /**
     * Local path to the file
     *
     * @var string
     */
    protected string $path;

    public function __construct(string $path)
    {
        parent::__construct();

        $this->path = $path;
    }

    public static function fromArray(array $array): InputFileLocal
    {
        return new static(
            $array['path'],
        );
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'path' => $this->path,
        ];
    }
}
