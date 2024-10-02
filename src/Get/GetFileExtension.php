<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Get;

use Totaldev\TgSchema\TdFunction;

/**
 * Returns the extension of a file, guessed by its MIME type. Returns an empty string on failure. Can be called synchronously.
 */
class GetFileExtension extends TdFunction
{
    public const TYPE_NAME = 'getFileExtension';

    public function __construct(
        /**
         * The MIME type of the file.
         */
        protected string $mimeType
    ) {}

    public static function fromArray(array $array): GetFileExtension
    {
        return new static(
            $array['mime_type'],
        );
    }

    public function getMimeType(): string
    {
        return $this->mimeType;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'mime_type' => $this->mimeType,
        ];
    }
}
