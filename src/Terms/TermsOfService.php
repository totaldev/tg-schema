<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Terms;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Contains Telegram terms of service.
 */
class TermsOfService extends TdObject
{
    public const string TYPE_NAME = 'termsOfService';

    public function __construct(
        /**
         * The minimum age of a user to be able to accept the terms; 0 if age isn't restricted.
         */
        protected int           $minUserAge,
        /**
         * True, if a blocking popup with terms of service must be shown to the user.
         */
        protected bool          $showPopup,
        /**
         * Text of the terms of service.
         */
        protected FormattedText $text,
    ) {}

    public static function fromArray(array $array): TermsOfService
    {
        return new static(
            minUserAge: $array['min_user_age'],
            showPopup : $array['show_popup'],
            text      : TdSchemaRegistry::fromArray($array['text']),
        );
    }

    public function getMinUserAge(): int
    {
        return $this->minUserAge;
    }

    public function getShowPopup(): bool
    {
        return $this->showPopup;
    }

    public function getText(): FormattedText
    {
        return $this->text;
    }

    public function setMinUserAge(int $value): static
    {
        $this->minUserAge = $value;

        return $this;
    }

    public function setShowPopup(bool $value): static
    {
        $this->showPopup = $value;

        return $this;
    }

    public function setText(FormattedText $value): static
    {
        $this->text = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'min_user_age' => $this->minUserAge,
            'show_popup'   => $this->showPopup,
            'text'         => $this->text->jsonSerialize(),
        ];
    }
}
