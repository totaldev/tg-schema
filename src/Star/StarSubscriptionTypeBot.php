<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Star;

use Totaldev\TgSchema\Photo\Photo;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes a subscription in a bot or a business account.
 */
class StarSubscriptionTypeBot extends StarSubscriptionType
{
    public const TYPE_NAME = 'starSubscriptionTypeBot';

    public function __construct(
        /**
         * True, if the subscription was canceled by the bot and can't be extended.
         */
        protected bool   $isCanceledByBot,
        /**
         * Subscription invoice title.
         */
        protected string $title,
        /**
         * Subscription invoice photo.
         */
        protected Photo  $photo,
        /**
         * The link to the subscription invoice.
         */
        protected string $invoiceLink
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarSubscriptionTypeBot
    {
        return new static(
            $array['is_canceled_by_bot'],
            $array['title'],
            TdSchemaRegistry::fromArray($array['photo']),
            $array['invoice_link'],
        );
    }

    public function getInvoiceLink(): string
    {
        return $this->invoiceLink;
    }

    public function getIsCanceledByBot(): bool
    {
        return $this->isCanceledByBot;
    }

    public function getPhoto(): Photo
    {
        return $this->photo;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'is_canceled_by_bot' => $this->isCanceledByBot,
            'title'              => $this->title,
            'photo'              => $this->photo->typeSerialize(),
            'invoice_link'       => $this->invoiceLink,
        ];
    }
}
