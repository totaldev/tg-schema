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
 * Represents a file
 */
class File extends TdObject
{
    public const TYPE_NAME = 'file';

    /**
     * Approximate file size in bytes in case the exact file size is unknown. Can be used to show download/upload progress
     *
     * @var int
     */
    protected int $expectedSize;

    /**
     * Unique file identifier
     *
     * @var int
     */
    protected int $id;

    /**
     * Information about the local copy of the file
     *
     * @var LocalFile
     */
    protected LocalFile $local;

    /**
     * Information about the remote copy of the file
     *
     * @var RemoteFile
     */
    protected RemoteFile $remote;

    /**
     * File size, in bytes; 0 if unknown
     *
     * @var int
     */
    protected int $size;

    public function __construct(int $id, int $size, int $expectedSize, LocalFile $local, RemoteFile $remote)
    {
        $this->id = $id;
        $this->size = $size;
        $this->expectedSize = $expectedSize;
        $this->local = $local;
        $this->remote = $remote;
    }

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
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
            'size' => $this->size,
            'expected_size' => $this->expectedSize,
            'local' => $this->local->typeSerialize(),
            'remote' => $this->remote->typeSerialize(),
        ];
    }
}
