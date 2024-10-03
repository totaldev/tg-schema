<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\File;

use Totaldev\TgSchema\Local\LocalFile;
use Totaldev\TgSchema\Remote\RemoteFile;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Represents a file.
 */
class File extends TdObject
{
    public const TYPE_NAME = 'file';

    public function __construct(
        /**
         * Unique file identifier.
         */
        protected int        $id,
        /**
         * File size, in bytes; 0 if unknown.
         */
        protected int        $size,
        /**
         * Approximate file size in bytes in case the exact file size is unknown. Can be used to show download/upload progress.
         */
        protected int        $expectedSize,
        /**
         * Information about the local copy of the file.
         */
        protected LocalFile  $local,
        /**
         * Information about the remote copy of the file.
         */
        protected RemoteFile $remote,
    ) {}

    public static function fromArray(array $array): File
    {
        return new static(
            $array['id'],
            $array['size'],
            $array['expected_size'],
            TdSchemaRegistry::fromArray($array['local']),
            TdSchemaRegistry::fromArray($array['remote']),
        );
    }

    public function getExpectedSize(): int
    {
        return $this->expectedSize;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getLocal(): LocalFile
    {
        return $this->local;
    }

    public function getRemote(): RemoteFile
    {
        return $this->remote;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'id'            => $this->id,
            'size'          => $this->size,
            'expected_size' => $this->expectedSize,
            'local'         => $this->local->typeSerialize(),
            'remote'        => $this->remote->typeSerialize(),
        ];
    }
}
