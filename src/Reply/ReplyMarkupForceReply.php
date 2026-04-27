<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Reply;

/**
 * Instructs application to force a reply to this message.
 */
class ReplyMarkupForceReply extends ReplyMarkup
{
    public const string TYPE_NAME = 'replyMarkupForceReply';

    public function __construct(
        /**
         * If non-empty, the placeholder to be shown in the input field when the reply is active; 0-64 characters.
         */
        protected string $inputFieldPlaceholder,
        /**
         * True, if a forced reply must automatically be shown to the current user. For outgoing messages, specify true to show the forced reply only for the mentioned users and for the target user of a reply.
         */
        protected bool   $isPersonal,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): ReplyMarkupForceReply
    {
        return new static(
            inputFieldPlaceholder: $array['input_field_placeholder'],
            isPersonal           : $array['is_personal'],
        );
    }

    public function getInputFieldPlaceholder(): string
    {
        return $this->inputFieldPlaceholder;
    }

    public function getIsPersonal(): bool
    {
        return $this->isPersonal;
    }

    public function setInputFieldPlaceholder(string $value): static
    {
        $this->inputFieldPlaceholder = $value;

        return $this;
    }

    public function setIsPersonal(bool $value): static
    {
        $this->isPersonal = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                   => static::TYPE_NAME,
            'input_field_placeholder' => $this->inputFieldPlaceholder,
            'is_personal'             => $this->isPersonal,
        ];
    }
}
