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
    public const TYPE_NAME = 'internalLinkTypeMessageDraft';

    public function __construct(
        /**
         * Message draft text.
         */
        protected FormattedText $text,
        /**
         * True, if the first line of the text contains a link. If true, the input field needs to be focused and the text after the link must be selected.
         */
        protected bool          $containsLink,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeMessageDraft
    {
        return new static(
            TdSchemaRegistry::fromArray($array['text']),
            $array['contains_link'],
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

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            'text'          => $this->text->typeSerialize(),
            'contains_link' => $this->containsLink,
        ];
    }
}
