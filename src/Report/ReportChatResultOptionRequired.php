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
    public const TYPE_NAME = 'reportChatResultOptionRequired';

    public function __construct(
        /**
         * Title for the option choice.
         */
        protected string $title,
        /**
         * List of available options.
         *
         * @var ReportOption[]
         */
        protected array  $options
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ReportChatResultOptionRequired
    {
        return new static(
            $array['title'],
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['options']),
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

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'title'   => $this->title,
            'options' => array_map(static fn($x) => $x->typeSerialize(), $this->options),
        ];
    }
}
