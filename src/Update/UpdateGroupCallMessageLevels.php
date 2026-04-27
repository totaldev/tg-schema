<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Group\GroupCallMessageLevel;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The levels of live story group call messages have changed.
 */
class UpdateGroupCallMessageLevels extends Update
{
    public const string TYPE_NAME = 'updateGroupCallMessageLevels';

    public function __construct(
        /**
         * New description of the levels in decreasing order of groupCallMessageLevel.min_star_count.
         *
         * @var GroupCallMessageLevel[]
         */
        protected array $levels
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateGroupCallMessageLevels
    {
        return new static(
            levels: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['levels']),
        );
    }

    public function getLevels(): array
    {
        return $this->levels;
    }

    public function setLevels(array $value): static
    {
        $this->levels = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'  => static::TYPE_NAME,
            'levels' => array_map(static fn($x) => $x->jsonSerialize(), $this->levels),
        ];
    }
}
