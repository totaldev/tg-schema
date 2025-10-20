<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Remove;

use Totaldev\TgSchema\TdFunction;

/**
 * Removes an audio file from the profile audio files of the current user.
 */
class RemoveProfileAudio extends TdFunction
{
    public const TYPE_NAME = 'removeProfileAudio';

    public function __construct(
        /**
         * Identifier of the audio file to be removed.
         */
        protected int $fileId
    ) {}

    public static function fromArray(array $array): RemoveProfileAudio
    {
        return new static(
            $array['file_id'],
        );
    }

    public function getFileId(): int
    {
        return $this->fileId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'file_id' => $this->fileId,
        ];
    }
}
