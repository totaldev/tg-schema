<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

/**
 * A file defined by its remote identifier. The remote identifier is guaranteed to be usable only if the corresponding file is still accessible to the user and
 * known to TDLib. For example, if the file is from a message, then the message must be not deleted and accessible to the user. If the file database is
 * disabled, then the corresponding object with the file must be preloaded by the application.
 */
class InputFileRemote extends InputFile
{
    public const TYPE_NAME = 'inputFileRemote';

    public function __construct(
        /**
         * Remote file identifier.
         */
        protected string $id
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputFileRemote
    {
        return new static(
            $array['id'],
        );
    }

    public function getId(): string
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
