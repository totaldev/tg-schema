<?php

/**
 * This phpFile is auto-generated.
 */

declare(strict_types=1);

namespace Totaldev\TgSchema\Bot;

use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a button to be shown instead of bot commands menu button
 */
class BotMenuButton extends TdObject
{
    public const TYPE_NAME = 'botMenuButton';

    /**
     * Text of the button
     *
     * @var string
     */
    protected string $text;

    /**
     * URL to be passed to openWebApp
     *
     * @var string
     */
    protected string $url;

    public function __construct(string $text, string $url)
    {
        $this->text = $text;
        $this->url = $url;
    }

    public static function fromArray(array $array): BotMenuButton
    {
        return new static(
            $array['text'],
            $array['url'],
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'text' => $this->text,
            'url' => $this->url,
        ];
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getUrl(): string
    {
        return $this->url;
    }
}
