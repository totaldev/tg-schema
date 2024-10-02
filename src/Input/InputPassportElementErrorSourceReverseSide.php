<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

/**
 * The reverse side of the document contains an error. The error is considered resolved when the file with the reverse side of the document changes.
 */
class InputPassportElementErrorSourceReverseSide extends InputPassportElementErrorSource
{
    public const TYPE_NAME = 'inputPassportElementErrorSourceReverseSide';

    public function __construct(
        /**
         * Current hash of the file containing the reverse side.
         */
        protected string $fileHash
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputPassportElementErrorSourceReverseSide
    {
        return new static(
            $array['file_hash'],
        );
    }

    public function getFileHash(): string
    {
        return $this->fileHash;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'file_hash' => $this->fileHash,
        ];
    }
}
