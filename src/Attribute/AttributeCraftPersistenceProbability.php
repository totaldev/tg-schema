<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Attribute;

use Totaldev\TgSchema\TdObject;

/**
 * Describes chance of the crafted gift to have the backdrop or symbol of one of the original gifts.
 */
class AttributeCraftPersistenceProbability extends TdObject
{
    public const string TYPE_NAME = 'attributeCraftPersistenceProbability';

    public function __construct(
        /**
         * The 4 numbers that describe probability of the craft result to have the same attribute as one of the original gifts if 1, 2, 3, or 4 gifts with the attribute are used in the craft. Each number represents the number of crafted gifts with the original attribute per 1000 successful craftings.
         *
         * @var int[]
         */
        protected array $persistenceChancePerMille
    ) {}

    public static function fromArray(array $array): AttributeCraftPersistenceProbability
    {
        return new static(
            persistenceChancePerMille: $array['persistence_chance_per_mille'],
        );
    }

    public function getPersistenceChancePerMille(): array
    {
        return $this->persistenceChancePerMille;
    }

    public function setPersistenceChancePerMille(array $value): static
    {
        $this->persistenceChancePerMille = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                        => static::TYPE_NAME,
            'persistence_chance_per_mille' => $this->persistenceChancePerMille,
        ];
    }
}
