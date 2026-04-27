<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Report;

/**
 * The user must add additional text details to the report.
 */
class ReportChatResultTextRequired extends ReportChatResult
{
    public const string TYPE_NAME = 'reportChatResultTextRequired';

    public function __construct(
        /**
         * True, if the user can skip text adding.
         */
        protected bool   $isOptional,
        /**
         * Option identifier for the next reportChat request.
         */
        protected string $optionId,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ReportChatResultTextRequired
    {
        return new static(
            isOptional: $array['is_optional'],
            optionId  : $array['option_id'],
        );
    }

    public function getIsOptional(): bool
    {
        return $this->isOptional;
    }

    public function getOptionId(): string
    {
        return $this->optionId;
    }

    public function setIsOptional(bool $value): static
    {
        $this->isOptional = $value;

        return $this;
    }

    public function setOptionId(string $value): static
    {
        $this->optionId = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'is_optional' => $this->isOptional,
            'option_id'   => $this->optionId,
        ];
    }
}
