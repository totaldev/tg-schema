<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes pause state of a file in the file download list.
 */
class ToggleDownloadIsPaused extends TdFunction
{
    public const string TYPE_NAME = 'toggleDownloadIsPaused';

    public function __construct(
        /**
         * Identifier of the downloaded file.
         */
        protected int  $fileId,
        /**
         * Pass true if the download is paused.
         */
        protected bool $isPaused,
    ) {}

    public static function fromArray(array $array): ToggleDownloadIsPaused
    {
        return new static(
            fileId  : $array['file_id'],
            isPaused: $array['is_paused'],
        );
    }

    public function getFileId(): int
    {
        return $this->fileId;
    }

    public function getIsPaused(): bool
    {
        return $this->isPaused;
    }

    public function setFileId(int $value): static
    {
        $this->fileId = $value;

        return $this;
    }

    public function setIsPaused(bool $value): static
    {
        $this->isPaused = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'file_id'   => $this->fileId,
            'is_paused' => $this->isPaused,
        ];
    }
}
