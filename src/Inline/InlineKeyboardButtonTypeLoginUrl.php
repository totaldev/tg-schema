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
    public const string TYPE_NAME = 'inlineKeyboardButtonTypeLoginUrl';

    public function __construct(
        /**
         * If non-empty, new text of the button in forwarded messages.
         */
        protected string $forwardText,
        /**
         * Unique button identifier.
         */
        protected int    $id,
        /**
         * An HTTP URL to pass to getLoginUrlInfo.
         */
        protected string $url,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InlineKeyboardButtonTypeLoginUrl
    {
        return new static(
            forwardText: $array['forward_text'],
            id         : $array['id'],
            url        : $array['url'],
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

    public function setForwardText(string $value): static
    {
        $this->forwardText = $value;

        return $this;
    }

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setUrl(string $value): static
    {
        $this->url = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'forward_text' => $this->forwardText,
            'id'           => $this->id,
            'url'          => $this->url,
        ];
    }
}
