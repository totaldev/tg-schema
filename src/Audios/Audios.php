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
    public const string TYPE_NAME = 'audios';

    public function __construct(
        /**
         * List of audio files.
         *
         * @var Audio[]
         */
        protected array $audios,
        /**
         * Approximate total number of audio files found.
         */
        protected int   $totalCount,
    ) {}

    public static function fromArray(array $array): Audios
    {
        return new static(
            audios    : array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['audios']),
            totalCount: $array['total_count'],
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

    public function setAudios(array $value): static
    {
        $this->audios = $value;

        return $this;
    }

    public function setTotalCount(int $value): static
    {
        $this->totalCount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'audios'      => array_map(static fn($x) => $x->jsonSerialize(), $this->audios),
            'total_count' => $this->totalCount,
        ];
    }
}
