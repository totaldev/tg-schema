<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

/**
 * The list of attached files contains an error. The error is considered resolved when the file list changes.
 */
class InputPassportElementErrorSourceFiles extends InputPassportElementErrorSource
{
    public const TYPE_NAME = 'inputPassportElementErrorSourceFiles';

    public function __construct(
        /**
         * Current hashes of all attached files.
         *
         * @var string[]
         */
        protected array $fileHashes
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputPassportElementErrorSourceFiles
    {
        return new static(
            $array['file_hashes'],
        );
    }

    public function getFileHashes(): array
    {
        return $this->fileHashes;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'file_hashes' => $this->fileHashes,
        ];
    }
}
