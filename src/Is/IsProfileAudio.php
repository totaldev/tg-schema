<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Is;

use Totaldev\TgSchema\TdFunction;

/**
 * Checks whether a file is in the profile audio files of the current user. Returns a 404 error if it isn't.
 */
class IsProfileAudio extends TdFunction
{
    public const TYPE_NAME = 'isProfileAudio';

    public function __construct(
        /**
         * Identifier of the audio file to check.
         */
        protected int $fileId
    ) {}

    public static function fromArray(array $array): IsProfileAudio
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
