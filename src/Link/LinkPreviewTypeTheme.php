<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

use Totaldev\TgSchema\Document\Document;
use Totaldev\TgSchema\TdSchemaRegistry;
use Totaldev\TgSchema\Theme\ThemeSettings;

/**
 * The link is a link to a cloud theme. TDLib has no theme support yet.
 */
class LinkPreviewTypeTheme extends LinkPreviewType
{
    public const TYPE_NAME = 'linkPreviewTypeTheme';

    public function __construct(
        /**
         * The list of files with theme description.
         *
         * @var Document[]
         */
        protected array          $documents,
        /**
         * Settings for the cloud theme; may be null if unknown.
         */
        protected ?ThemeSettings $settings
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): LinkPreviewTypeTheme
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['documents']),
            isset($array['settings']) ? TdSchemaRegistry::fromArray($array['settings']) : null,
        );
    }

    public function getDocuments(): array
    {
        return $this->documents;
    }

    public function getSettings(): ?ThemeSettings
    {
        return $this->settings;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'     => static::TYPE_NAME,
            'documents' => array_map(static fn($x) => $x->typeSerialize(), $this->documents),
            'settings'  => $this->settings ?? null,
        ];
    }
}
