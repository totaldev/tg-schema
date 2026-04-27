<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Report;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The user must choose an option to report the chat and repeat request with the chosen option.
 */
class ReportChatResultOptionRequired extends ReportChatResult
{
    public const string TYPE_NAME = 'reportChatResultOptionRequired';

    public function __construct(
        /**
         * List of available options.
         *
         * @var ReportOption[]
         */
        protected array  $options,
        /**
         * Title for the option choice.
         */
        protected string $title,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ReportChatResultOptionRequired
    {
        return new static(
            options: array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['options']),
            title  : $array['title'],
        );
    }

    public function getOptions(): array
    {
        return $this->options;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setOptions(array $value): static
    {
        $this->options = $value;

        return $this;
    }

    public function setTitle(string $value): static
    {
        $this->title = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'options' => array_map(static fn($x) => $x->jsonSerialize(), $this->options),
            'title'   => $this->title,
        ];
    }
}
