<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Web;

use Totaldev\TgSchema\Internal\InternalLinkType;
use Totaldev\TgSchema\Page\PageBlock;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes an instant view page for a web page.
 */
class WebPageInstantView extends TdObject
{
    public const TYPE_NAME = 'webPageInstantView';

    public function __construct(
        /**
         * Content of the instant view page.
         *
         * @var PageBlock[]
         */
        protected array            $pageBlocks,
        /**
         * Number of the instant view views; 0 if unknown.
         */
        protected int              $viewCount,
        /**
         * Version of the instant view; currently, can be 1 or 2.
         */
        protected int              $version,
        /**
         * True, if the instant view must be shown from right to left.
         */
        protected bool             $isRtl,
        /**
         * True, if the instant view contains the full page. A network request might be needed to get the full instant view.
         */
        protected bool             $isFull,
        /**
         * An internal link to be opened to leave feedback about the instant view.
         */
        protected InternalLinkType $feedbackLink,
    ) {}

    public static function fromArray(array $array): WebPageInstantView
    {
        return new static(
            array_map(static fn($x) => TdSchemaRegistry::fromArray($x), $array['page_blocks']),
            $array['view_count'],
            $array['version'],
            $array['is_rtl'],
            $array['is_full'],
            TdSchemaRegistry::fromArray($array['feedback_link']),
        );
    }

    public function getFeedbackLink(): InternalLinkType
    {
        return $this->feedbackLink;
    }

    public function getIsFull(): bool
    {
        return $this->isFull;
    }

    public function getIsRtl(): bool
    {
        return $this->isRtl;
    }

    public function getPageBlocks(): array
    {
        return $this->pageBlocks;
    }

    public function getVersion(): int
    {
        return $this->version;
    }

    public function getViewCount(): int
    {
        return $this->viewCount;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'         => static::TYPE_NAME,
            array_map(static fn($x) => $x->typeSerialize(), $this->pageBlocks),
            'view_count'    => $this->viewCount,
            'version'       => $this->version,
            'is_rtl'        => $this->isRtl,
            'is_full'       => $this->isFull,
            'feedback_link' => $this->feedbackLink->typeSerialize(),
        ];
    }
}
