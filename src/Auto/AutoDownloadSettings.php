<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Auto;

use Totaldev\TgSchema\TdObject;

/**
 * Contains auto-download settings.
 */
class AutoDownloadSettings extends TdObject
{
    public const TYPE_NAME = 'autoDownloadSettings';

    public function __construct(
        /**
         * True, if the auto-download is enabled.
         */
        protected bool $isAutoDownloadEnabled,
        /**
         * The maximum size of a photo file to be auto-downloaded, in bytes.
         */
        protected int  $maxPhotoFileSize,
        /**
         * The maximum size of a video file to be auto-downloaded, in bytes.
         */
        protected int  $maxVideoFileSize,
        /**
         * The maximum size of other file types to be auto-downloaded, in bytes.
         */
        protected int  $maxOtherFileSize,
        /**
         * The maximum suggested bitrate for uploaded videos, in kbit/s.
         */
        protected int  $videoUploadBitrate,
        /**
         * True, if the beginning of video files needs to be preloaded for instant playback.
         */
        protected bool $preloadLargeVideos,
        /**
         * True, if the next audio track needs to be preloaded while the user is listening to an audio file.
         */
        protected bool $preloadNextAudio,
        /**
         * True, if stories needs to be preloaded.
         */
        protected bool $preloadStories,
        /**
         * True, if "use less data for calls" option needs to be enabled.
         */
        protected bool $useLessDataForCalls,
    ) {}

    public static function fromArray(array $array): AutoDownloadSettings
    {
        return new static(
            $array['is_auto_download_enabled'],
            $array['max_photo_file_size'],
            $array['max_video_file_size'],
            $array['max_other_file_size'],
            $array['video_upload_bitrate'],
            $array['preload_large_videos'],
            $array['preload_next_audio'],
            $array['preload_stories'],
            $array['use_less_data_for_calls'],
        );
    }

    public function getIsAutoDownloadEnabled(): bool
    {
        return $this->isAutoDownloadEnabled;
    }

    public function getMaxOtherFileSize(): int
    {
        return $this->maxOtherFileSize;
    }

    public function getMaxPhotoFileSize(): int
    {
        return $this->maxPhotoFileSize;
    }

    public function getMaxVideoFileSize(): int
    {
        return $this->maxVideoFileSize;
    }

    public function getPreloadLargeVideos(): bool
    {
        return $this->preloadLargeVideos;
    }

    public function getPreloadNextAudio(): bool
    {
        return $this->preloadNextAudio;
    }

    public function getPreloadStories(): bool
    {
        return $this->preloadStories;
    }

    public function getUseLessDataForCalls(): bool
    {
        return $this->useLessDataForCalls;
    }

    public function getVideoUploadBitrate(): int
    {
        return $this->videoUploadBitrate;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                    => static::TYPE_NAME,
            'is_auto_download_enabled' => $this->isAutoDownloadEnabled,
            'max_photo_file_size'      => $this->maxPhotoFileSize,
            'max_video_file_size'      => $this->maxVideoFileSize,
            'max_other_file_size'      => $this->maxOtherFileSize,
            'video_upload_bitrate'     => $this->videoUploadBitrate,
            'preload_large_videos'     => $this->preloadLargeVideos,
            'preload_next_audio'       => $this->preloadNextAudio,
            'preload_stories'          => $this->preloadStories,
            'use_less_data_for_calls'  => $this->useLessDataForCalls,
        ];
    }
}
