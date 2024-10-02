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
    public const TYPE_NAME = 'termsOfService';

    public function __construct(
        /**
         * Text of the terms of service.
         */
        protected FormattedText $text,
        /**
         * The minimum age of a user to be able to accept the terms; 0 if age isn't restricted.
         */
        protected int           $minUserAge,
        /**
         * True, if a blocking popup with terms of service must be shown to the user.
         */
        protected bool          $showPopup,
    ) {}

    public static function fromArray(array $array): TermsOfService
    {
        return new static(
            TdSchemaRegistry::fromArray($array['text']),
            $array['min_user_age'],
            $array['show_popup'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'        => static::TYPE_NAME,
            'text'         => $this->text->typeSerialize(),
            'min_user_age' => $this->minUserAge,
            'show_popup'   => $this->showPopup,
        ];
    }
}
