<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

/**
 * A file defined by a local path.
 */
class InputFileLocal extends InputFile
{
    public const string TYPE_NAME = 'inputFileLocal';

    public function __construct(
        /**
         * Local path to the file.
         */
        protected string $path
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputFileLocal
    {
        return new static(
            path: $array['path'],
        );
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function setPath(string $value): static
    {
        $this->path = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'path'  => $this->path,
        ];
    }
}
