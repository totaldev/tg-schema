<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Audios;

use Totaldev\TgSchema\Audio\Audio;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains a list of audio files.
 */
class Audios extends TdObject
{
    public const TYPE_NAME = 'audios';

    public function __construct(
        /**
         * Approximate total number of audio files found.
         */
        protected int   $totalCount,
        /**
         * List of audio files.
         *
         * @var Audio[]
         */
        protected array $audios,
    ) {}

    public static function fromArray(array $array): Audios
    {
        return new static(
            $array['total_count'],
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['audios']),
        );
    }

    public function getAudios(): array
    {
        return $this->audios;
    }

    public function getTotalCount(): int
    {
        return $this->totalCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'total_count' => $this->totalCount,
            'audios'      => array_map(static fn($x) => $x->typeSerialize(), $this->audios),
        ];
    }
}
