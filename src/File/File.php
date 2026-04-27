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
    public const string TYPE_NAME = 'file';

    public function __construct(
        /**
         * Approximate file size in bytes in case the exact file size is unknown. Can be used to show download/upload progress.
         */
        protected int        $expectedSize,
        /**
         * Unique file identifier.
         */
        protected int        $id,
        /**
         * Information about the local copy of the file.
         */
        protected LocalFile  $local,
        /**
         * Information about the remote copy of the file.
         */
        protected RemoteFile $remote,
        /**
         * File size, in bytes; 0 if unknown.
         */
        protected int        $size,
    ) {}

    public static function fromArray(array $array): File
    {
        return new static(
            expectedSize: $array['expected_size'],
            id          : $array['id'],
            local       : TdSchemaRegistry::fromArray($array['local']),
            remote      : TdSchemaRegistry::fromArray($array['remote']),
            size        : $array['size'],
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

    public function setExpectedSize(int $value): static
    {
        $this->expectedSize = $value;

        return $this;
    }

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setLocal(LocalFile $value): static
    {
        $this->local = $value;

        return $this;
    }

    public function setRemote(RemoteFile $value): static
    {
        $this->remote = $value;

        return $this;
    }

    public function setSize(int $value): static
    {
        $this->size = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'expected_size' => $this->expectedSize,
            'id'            => $this->id,
            'local'         => $this->local->jsonSerialize(),
            'remote'        => $this->remote->jsonSerialize(),
            'size'          => $this->size,
        ];
    }
}
