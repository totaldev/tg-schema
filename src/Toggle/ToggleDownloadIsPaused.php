<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Toggle;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes pause state of a file in the file download list
 */
class ToggleDownloadIsPaused extends TdFunction
{
    public const TYPE_NAME = 'toggleDownloadIsPaused';

    /**
     * Identifier of the downloaded file
     *
     * @var int
     */
    protected int $fileId;

    /**
     * Pass true if the download is paused
     *
     * @var bool
     */
    protected bool $isPaused;

    public function __construct(int $fileId, bool $isPaused)
    {
        $this->fileId = $fileId;
        $this->isPaused = $isPaused;
    }

    public static function fromArray(array $array): ToggleDownloadIsPaused
    {
        return new static(
            $array['file_id'],
            $array['is_paused'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'file_id' => $this->fileId,
            'is_paused' => $this->isPaused,
        ];
    }

    public function getFileId(): int
    {
        return $this->fileId;
    }

    public function getIsPaused(): bool
    {
        return $this->isPaused;
    }
}
