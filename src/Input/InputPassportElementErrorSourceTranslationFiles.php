<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

/**
 * The translation of the document contains an error. The error is considered resolved when the list of files changes.
 */
class InputPassportElementErrorSourceTranslationFiles extends InputPassportElementErrorSource
{
    public const string TYPE_NAME = 'inputPassportElementErrorSourceTranslationFiles';

    public function __construct(
        /**
         * Current hashes of all files with the translation.
         *
         * @var string[]
         */
        protected array $fileHashes
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputPassportElementErrorSourceTranslationFiles
    {
        return new static(
            fileHashes: $array['file_hashes'],
        );
    }

    public function getFileHashes(): array
    {
        return $this->fileHashes;
    }

    public function setFileHashes(array $value): static
    {
        $this->fileHashes = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'file_hashes' => $this->fileHashes,
        ];
    }
}
