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
    public const string TYPE_NAME = 'setProfileAudioPosition';

    public function __construct(
        /**
         * Identifier of the file from profile audio files after which the file will be positioned; pass 0 to move the file to the beginning of the list.
         */
        protected int $afterFileId,
        /**
         * Identifier of the file from profile audio files, which position will be changed.
         */
        protected int $fileId,
    ) {}

    public static function fromArray(array $array): SetProfileAudioPosition
    {
        return new static(
            afterFileId: $array['after_file_id'],
            fileId     : $array['file_id'],
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

    public function setAfterFileId(int $value): static
    {
        $this->afterFileId = $value;

        return $this;
    }

    public function setFileId(int $value): static
    {
        $this->fileId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'after_file_id' => $this->afterFileId,
            'file_id'       => $this->fileId,
        ];
    }
}
