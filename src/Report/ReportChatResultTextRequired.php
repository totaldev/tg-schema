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
    public const TYPE_NAME = 'reportChatResultTextRequired';

    public function __construct(
        /**
         * Option identifier for the next reportChat request.
         */
        protected string $optionId,
        /**
         * True, if the user can skip text adding.
         */
        protected bool   $isOptional
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ReportChatResultTextRequired
    {
        return new static(
            $array['option_id'],
            $array['is_optional'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'       => static::TYPE_NAME,
            'option_id'   => $this->optionId,
            'is_optional' => $this->isOptional,
        ];
    }
}
