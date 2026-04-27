<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Message;

/**
 * A non-standard action has happened in the chat.
 */
class MessageCustomServiceAction extends MessageContent
{
    public const string TYPE_NAME = 'messageCustomServiceAction';

    public function __construct(
        /**
         * Message text to be shown in the chat.
         */
        protected string $text
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): MessageCustomServiceAction
    {
        return new static(
            text: $array['text'],
        );
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function setText(string $value): static
    {
        $this->text = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'text'  => $this->text,
        ];
    }
}
