<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Add;

use Totaldev\TgSchema\TdFunction;

/**
 * Adds an audio file to the beginning of the profile audio files of the current user.
 */
class AddProfileAudio extends TdFunction
{
    public const string TYPE_NAME = 'addProfileAudio';

    public function __construct(
        /**
         * Identifier of the audio file to be added. The file must have been uploaded to the server.
         */
        protected int $fileId
    ) {}

    public static function fromArray(array $array): AddProfileAudio
    {
        return new static(
            fileId: $array['file_id'],
        );
    }

    public function getFileId(): int
    {
        return $this->fileId;
    }

    public function setFileId(int $value): static
    {
        $this->fileId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'file_id' => $this->fileId,
        ];
    }
}
