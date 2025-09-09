<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Link;

use Totaldev\TgSchema\Formatted\FormattedText;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a link preview.
 */
class LinkPreview extends TdObject
{
    public const TYPE_NAME = 'linkPreview';

    public function __construct(
        /**
         * Original URL of the link.
         */
        protected string          $url,
        /**
         * URL to display.
         */
        protected string          $displayUrl,
        /**
         * Short name of the site (e.g., Google Docs, App Store).
         */
        protected string          $siteName,
        /**
         * Title of the content.
         */
        protected string          $title,
        /**
         * Description of the content.
         */
        protected FormattedText   $description,
        /**
         * Author of the content.
         */
        protected string          $author,
        /**
         * Type of the link preview.
         */
        protected LinkPreviewType $type,
        /**
         * True, if size of media in the preview can be changed.
         */
        protected bool            $hasLargeMedia,
        /**
         * True, if large media preview must be shown; otherwise, the media preview must be shown small and only the first frame must be shown for videos.
         */
        protected bool            $showLargeMedia,
        /**
         * True, if media must be shown above link preview description; otherwise, the media must be shown below the description.
         */
        protected bool            $showMediaAboveDescription,
        /**
         * True, if there is no need to show an ordinary open URL confirmation, when opening the URL from the preview, because the URL is shown in the message text in clear.
         */
        protected bool            $skipConfirmation,
        /**
         * True, if the link preview must be shown above message text; otherwise, the link preview must be shown below the message text.
         */
        protected bool            $showAboveText,
        /**
         * Version of instant view (currently, can be 1 or 2) for the web page; 0 if none.
         */
        protected int             $instantViewVersion,
    ) {}

    public static function fromArray(array $array): LinkPreview
    {
        return new static(
            $array['url'],
            $array['display_url'],
            $array['site_name'],
            $array['title'],
            TdSchemaRegistry::fromArray($array['description']),
            $array['author'],
            TdSchemaRegistry::fromArray($array['type']),
            $array['has_large_media'],
            $array['show_large_media'],
            $array['show_media_above_description'],
            $array['skip_confirmation'],
            $array['show_above_text'],
            $array['instant_view_version'],
        );
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getDescription(): FormattedText
    {
        return $this->description;
    }

    public function getDisplayUrl(): string
    {
        return $this->displayUrl;
    }

    public function getHasLargeMedia(): bool
    {
        return $this->hasLargeMedia;
    }

    public function getInstantViewVersion(): int
    {
        return $this->instantViewVersion;
    }

    public function getShowAboveText(): bool
    {
        return $this->showAboveText;
    }

    public function getShowLargeMedia(): bool
    {
        return $this->showLargeMedia;
    }

    public function getShowMediaAboveDescription(): bool
    {
        return $this->showMediaAboveDescription;
    }

    public function getSiteName(): string
    {
        return $this->siteName;
    }

    public function getSkipConfirmation(): bool
    {
        return $this->skipConfirmation;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getType(): LinkPreviewType
    {
        return $this->type;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                        => static::TYPE_NAME,
            'url'                          => $this->url,
            'display_url'                  => $this->displayUrl,
            'site_name'                    => $this->siteName,
            'title'                        => $this->title,
            'description'                  => $this->description->typeSerialize(),
            'author'                       => $this->author,
            'type'                         => $this->type->typeSerialize(),
            'has_large_media'              => $this->hasLargeMedia,
            'show_large_media'             => $this->showLargeMedia,
            'show_media_above_description' => $this->showMediaAboveDescription,
            'skip_confirmation'            => $this->skipConfirmation,
            'show_above_text'              => $this->showAboveText,
            'instant_view_version'         => $this->instantViewVersion,
        ];
    }
}
