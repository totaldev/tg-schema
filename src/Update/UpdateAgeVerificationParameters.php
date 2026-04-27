<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Age\AgeVerificationParameters;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The parameters for age verification of the current user's account has changed.
 */
class UpdateAgeVerificationParameters extends Update
{
    public const string TYPE_NAME = 'updateAgeVerificationParameters';

    public function __construct(
        /**
         * Parameters for the age verification; may be null if age verification isn't needed.
         */
        protected ?AgeVerificationParameters $parameters
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateAgeVerificationParameters
    {
        return new static(
            parameters: (isset($array['parameters']) ? TdSchemaRegistry::fromArray($array['parameters']) : null),
        );
    }

    public function getParameters(): ?AgeVerificationParameters
    {
        return $this->parameters;
    }

    public function setParameters(?AgeVerificationParameters $value): static
    {
        $this->parameters = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'      => static::TYPE_NAME,
            'parameters' => (null !== $this->parameters ? $this->parameters->jsonSerialize() : null),
        ];
    }
}
