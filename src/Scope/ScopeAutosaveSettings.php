<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Scope;

use Totaldev\TgSchema\TdObject;

/**
 * Contains autosave settings for an autosave settings scope.
 */
class ScopeAutosaveSettings extends TdObject
{
    public const TYPE_NAME = 'scopeAutosaveSettings';

    public function __construct(
        /**
         * True, if photo autosave is enabled.
         */
        protected bool $autosavePhotos,
        /**
         * True, if video autosave is enabled.
         */
        protected bool $autosaveVideos,
        /**
         * The maximum size of a video file to be autosaved, in bytes; 512 KB - 4000 MB.
         */
        protected int  $maxVideoFileSize,
    ) {}

    public static function fromArray(array $array): ScopeAutosaveSettings
    {
        return new static(
            $array['autosave_photos'],
            $array['autosave_videos'],
            $array['max_video_file_size'],
        );
    }

    public function getAutosavePhotos(): bool
    {
        return $this->autosavePhotos;
    }

    public function getAutosaveVideos(): bool
    {
        return $this->autosaveVideos;
    }

    public function getMaxVideoFileSize(): int
    {
        return $this->maxVideoFileSize;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'               => static::TYPE_NAME,
            'autosave_photos'     => $this->autosavePhotos,
            'autosave_videos'     => $this->autosaveVideos,
            'max_video_file_size' => $this->maxVideoFileSize,
        ];
    }
}
