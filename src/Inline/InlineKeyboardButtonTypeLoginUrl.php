<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Inline;

/**
 * A button that opens a specified URL and automatically authorize the current user by calling getLoginUrlInfo.
 */
class InlineKeyboardButtonTypeLoginUrl extends InlineKeyboardButtonType
{
    public const TYPE_NAME = 'inlineKeyboardButtonTypeLoginUrl';

    public function __construct(
        /**
         * An HTTP URL to pass to getLoginUrlInfo.
         */
        protected string $url,
        /**
         * Unique button identifier.
         */
        protected int    $id,
        /**
         * If non-empty, new text of the button in forwarded messages.
         */
        protected string $forwardText,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InlineKeyboardButtonTypeLoginUrl
    {
        return new static(
            $array['url'],
            $array['id'],
            $array['forward_text'],
        );
    }

    public function getForwardText(): string
    {
        return $this->forwardText;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'url'          => $this->url,
            'id'           => $this->id,
            'forward_text' => $this->forwardText,
        ];
    }
}
