<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

/**
 * A file defined by its unique identifier.
 */
class InputFileId extends InputFile
{
    public const TYPE_NAME = 'inputFileId';

    public function __construct(
        /**
         * Unique file identifier.
         */
        protected int $id
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputFileId
    {
        return new static(
            $array['id'],
        );
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id'    => $this->id,
        ];
    }
}
