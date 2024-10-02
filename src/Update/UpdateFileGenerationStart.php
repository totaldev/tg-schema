<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * The file generation process needs to be started by the application.
 */
class UpdateFileGenerationStart extends Update
{
    public const TYPE_NAME = 'updateFileGenerationStart';

    public function __construct(
        /**
         * Unique identifier for the generation process.
         */
        protected int    $generationId,
        /**
         * The path to a file from which a new file is generated; may be empty.
         */
        protected string $originalPath,
        /**
         * The path to a file that must be created and where the new file is generated.
         */
        protected string $destinationPath,
        /**
         * String specifying the conversion applied to the original file. If conversion is "#url#" than original_path contains an HTTP/HTTPS URL of a file, which must be downloaded by the application.
         */
        protected string $conversion,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateFileGenerationStart
    {
        return new static(
            $array['generation_id'],
            $array['original_path'],
            $array['destination_path'],
            $array['conversion'],
        );
    }

    public function getConversion(): string
    {
        return $this->conversion;
    }

    public function getDestinationPath(): string
    {
        return $this->destinationPath;
    }

    public function getGenerationId(): int
    {
        return $this->generationId;
    }

    public function getOriginalPath(): string
    {
        return $this->originalPath;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'            => static::TYPE_NAME,
            'generation_id'    => $this->generationId,
            'original_path'    => $this->originalPath,
            'destination_path' => $this->destinationPath,
            'conversion'       => $this->conversion,
        ];
    }
}
