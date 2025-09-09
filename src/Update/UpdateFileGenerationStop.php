<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

/**
 * File generation is no longer needed.
 */
class UpdateFileGenerationStop extends Update
{
    public const TYPE_NAME = 'updateFileGenerationStop';

    public function __construct(
        /**
         * Unique identifier for the generation process.
         */
        protected int $generationId
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateFileGenerationStop
    {
        return new static(
            $array['generation_id'],
        );
    }

    public function getGenerationId(): int
    {
        return $this->generationId;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'generation_id' => $this->generationId,
        ];
    }
}
