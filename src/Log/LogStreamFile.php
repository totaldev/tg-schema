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
    public const string TYPE_NAME = 'logStreamFile';

    public function __construct(
        /**
         * The maximum size of the file to where the internal TDLib log is written before the file will automatically be rotated, in bytes.
         */
        protected int    $maxFileSize,
        /**
         * Path to the file to where the internal TDLib log will be written.
         */
        protected string $path,
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
            maxFileSize   : $array['max_file_size'],
            path          : $array['path'],
            redirectStderr: $array['redirect_stderr'],
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

    public function setMaxFileSize(int $value): static
    {
        $this->maxFileSize = $value;

        return $this;
    }

    public function setPath(string $value): static
    {
        $this->path = $value;

        return $this;
    }

    public function setRedirectStderr(bool $value): static
    {
        $this->redirectStderr = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'           => static::TYPE_NAME,
            'max_file_size'   => $this->maxFileSize,
            'path'            => $this->path,
            'redirect_stderr' => $this->redirectStderr,
        ];
    }
}
