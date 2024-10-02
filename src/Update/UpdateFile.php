<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\File\File;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Information about a file was updated.
 */
class UpdateFile extends Update
{
    public const TYPE_NAME = 'updateFile';

    public function __construct(
        /**
         * New data about the file.
         */
        protected File $file
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateFile
    {
        return new static(
            TdSchemaRegistry::fromArray($array['file']),
        );
    }

    public function getFile(): File
    {
        return $this->file;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'file'  => $this->file->typeSerialize(),
        ];
    }
}
