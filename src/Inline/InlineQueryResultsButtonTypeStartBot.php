<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Inline;

/**
 * Describes the button that opens a private chat with the bot and sends a start message to the bot with the given parameter.
 */
class InlineQueryResultsButtonTypeStartBot extends InlineQueryResultsButtonType
{
    public const TYPE_NAME = 'inlineQueryResultsButtonTypeStartBot';

    public function __construct(
        /**
         * The parameter for the bot start message.
         */
        protected string $parameter
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InlineQueryResultsButtonTypeStartBot
    {
        return new static(
            $array['parameter'],
        );
    }

    public function getParameter(): string
    {
        return $this->parameter;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'parameter' => $this->parameter,
        ];
    }
}
