<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Passport;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * One of files with the translation of the document contains an error. The error will be considered resolved when the file changes
 */
class PassportElementErrorSourceTranslationFile extends PassportElementErrorSource
{
    public const TYPE_NAME = 'passportElementErrorSourceTranslationFile';

    /**
     * Index of a file with the error
     *
     * @var int
     */
    protected int $fileIndex;

    public function __construct(int $fileIndex)
    {
        parent::__construct();

        $this->fileIndex = $fileIndex;
    }

    public static function fromArray(array $array): PassportElementErrorSourceTranslationFile
    {
        return new static(
            $array['file_index'],
        );
    }

    public function getFileIndex(): int
    {
        return $this->fileIndex;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'file_index' => $this->fileIndex,
        ];
    }
}
