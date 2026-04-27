<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

/**
 * The selfie contains an error. The error is considered resolved when the file with the selfie changes.
 */
class InputPassportElementErrorSourceSelfie extends InputPassportElementErrorSource
{
    public const string TYPE_NAME = 'inputPassportElementErrorSourceSelfie';

    public function __construct(
        /**
         * Current hash of the file containing the selfie.
         */
        protected string $fileHash
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputPassportElementErrorSourceSelfie
    {
        return new static(
            fileHash: $array['file_hash'],
        );
    }

    public function getFileHash(): string
    {
        return $this->fileHash;
    }

    public function setFileHash(string $value): static
    {
        $this->fileHash = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'file_hash' => $this->fileHash,
        ];
    }
}
