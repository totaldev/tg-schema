<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Internal;

/**
 * The link is a link to the Contacts tab or page.
 */
class InternalLinkTypeContactsPage extends InternalLinkType
{
    public const string TYPE_NAME = 'internalLinkTypeContactsPage';

    public function __construct(
        /**
         * Section of the page; may be one of "", "search", "sort", "new", "invite", "manage".
         */
        protected string $section
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InternalLinkTypeContactsPage
    {
        return new static(
            section: $array['section'],
        );
    }

    public function getSection(): string
    {
        return $this->section;
    }

    public function setSection(string $value): static
    {
        $this->section = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'   => static::TYPE_NAME,
            'section' => $this->section,
        ];
    }
}
