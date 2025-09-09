<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Log;

/**
 * The log is written to a file.
 */
class LogStreamFile extends LogStream
{
    public const TYPE_NAME = 'logStreamFile';

    public function __construct(
        /**
         * Path to the file to where the internal TDLib log will be written.
         */
        protected string $path,
        /**
         * The maximum size of the file to where the internal TDLib log is written before the file will automatically be rotated, in bytes.
         */
        protected int    $maxFileSize,
        /**
         * Pass true to additionally redirect stderr to the log file. Ignored on Windows.
         */
        protected bool   $redirectStderr,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LogStreamFile
    {
        return new static(
            $array['path'],
            $array['max_file_size'],
            $array['redirect_stderr'],
        );
    }

    public function getMaxFileSize(): int
    {
        return $this->maxFileSize;
    }

    public function getPath(): string
    {
        return $this->path;
    }

    public function getRedirectStderr(): bool
    {
        return $this->redirectStderr;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'path'            => $this->path,
            'max_file_size'   => $this->maxFileSize,
            'redirect_stderr' => $this->redirectStderr,
        ];
    }
}
