<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Report;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The user must choose an option to report the message and repeat request with the chosen option.
 */
class ReportChatSponsoredMessageResultOptionRequired extends ReportChatSponsoredMessageResult
{
    public const TYPE_NAME = 'reportChatSponsoredMessageResultOptionRequired';

    public function __construct(
        /**
         * Title for the option choice.
         */
        protected string $title,
        /**
         * List of available options.
         *
         * @var ReportChatSponsoredMessageOption[]
         */
        protected array  $options,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ReportChatSponsoredMessageResultOptionRequired
    {
        return new static(
            $array['title'],
            array_map(fn($x) => TdSchemaRegistry::fromArray($x), $array['options']),
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
            '@type' => static::TYPE_NAME,
            'title' => $this->title,
            array_map(fn($x) => $x->typeSerialize(), $this->options),
        ];
    }
}
