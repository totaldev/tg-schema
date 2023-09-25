<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Inline;

use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes the button that opens a private chat with the bot and sends a start message to the bot with the given parameter
 */
class InlineQueryResultsButtonTypeStartBot extends InlineQueryResultsButtonType
{
    public const TYPE_NAME = 'inlineQueryResultsButtonTypeStartBot';

    /**
     * The parameter for the bot start message
     *
     * @var string
     */
    protected string $parameter;

    public function __construct(string $parameter)
    {
        parent::__construct();

        $this->parameter = $parameter;
    }

    public static function fromArray(array $array): InlineQueryResultsButtonTypeStartBot
    {
        return new static(
            $array['parameter'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'parameter' => $this->parameter,
        ];
    }

    public function getParameter(): string
    {
        return $this->parameter;
    }
}
