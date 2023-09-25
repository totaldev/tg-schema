<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * A file defined by its unique identifier
 */
class InputFileId extends InputFile
{
    public const TYPE_NAME = 'inputFileId';

    /**
     * Unique file identifier
     *
     * @var int
     */
    protected int $id;

    public function __construct(int $id)
    {
        parent::__construct();

        $this->id = $id;
    }

    public static function fromArray(array $array): InputFileId
    {
        return new static(
            $array['id'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'id' => $this->id,
        ];
    }

    public function getId(): int
    {
        return $this->id;
    }
}
