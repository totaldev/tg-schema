<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Set;

use Totaldev\TgSchema\TdFunction;

/**
 * Changes position of an audio file in the profile audio files of the current user.
 */
class SetProfileAudioPosition extends TdFunction
{
    public const TYPE_NAME = 'setProfileAudioPosition';

    public function __construct(
        /**
         * Identifier of the file from profile audio files, which position will be changed.
         */
        protected int $fileId,
        /**
         * Identifier of the file from profile audio files after which the file will be positioned; pass 0 to move the file to the beginning of the list.
         */
        protected int $afterFileId,
    ) {}

    public static function fromArray(array $array): SetProfileAudioPosition
    {
        return new static(
            $array['file_id'],
            $array['after_file_id'],
        );
    }

    public function getAfterFileId(): int
    {
        return $this->afterFileId;
    }

    public function getFileId(): int
    {
        return $this->fileId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'file_id'       => $this->fileId,
            'after_file_id' => $this->afterFileId,
        ];
    }
}
