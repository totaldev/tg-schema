<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The link contains a message draft text. A share screen needs to be shown to the user, then the chosen chat must be opened and the text is added to the input
 * field.
 */
class InternalLinkTypeMessageDraft extends InternalLinkType
{
    public const string TYPE_NAME = 'internalLinkTypeMessageDraft';

    public function __construct(
        /**
         * True, if the first line of the text contains a link. If true, the input field needs to be focused and the text after the link must be selected.
         */
        protected bool          $containsLink,
        /**
         * Message draft text.
         */
        protected FormattedText $text,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeMessageDraft
    {
        return new static(
            containsLink: $array['contains_link'],
            text        : TdSchemaRegistry::fromArray($array['text']),
        );
    }

    public function getContainsLink(): bool
    {
        return $this->containsLink;
    }

    public function getText(): FormattedText
    {
        return $this->text;
    }

    public function setContainsLink(bool $value): static
    {
        $this->containsLink = $value;

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
            '@type'         => static::TYPE_NAME,
            'contains_link' => $this->containsLink,
            'text'          => $this->text->jsonSerialize(),
        ];
    }
}
