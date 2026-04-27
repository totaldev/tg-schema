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
    public const string TYPE_NAME = 'starSubscriptionTypeBot';

    public function __construct(
        /**
         * The link to the subscription invoice.
         */
        protected string $invoiceLink,
        /**
         * True, if the subscription was canceled by the bot and can't be extended.
         */
        protected bool   $isCanceledByBot,
        /**
         * Subscription invoice photo.
         */
        protected Photo  $photo,
        /**
         * Subscription invoice title.
         */
        protected string $title,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): StarSubscriptionTypeBot
    {
        return new static(
            invoiceLink    : $array['invoice_link'],
            isCanceledByBot: $array['is_canceled_by_bot'],
            photo          : TdSchemaRegistry::fromArray($array['photo']),
            title          : $array['title'],
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

    public function setInvoiceLink(string $value): static
    {
        $this->invoiceLink = $value;

        return $this;
    }

    public function setIsCanceledByBot(bool $value): static
    {
        $this->isCanceledByBot = $value;

        return $this;
    }

    public function setPhoto(Photo $value): static
    {
        $this->photo = $value;

        return $this;
    }

    public function setTitle(string $value): static
    {
        $this->title = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'              => static::TYPE_NAME,
            'invoice_link'       => $this->invoiceLink,
            'is_canceled_by_bot' => $this->isCanceledByBot,
            'photo'              => $this->photo->jsonSerialize(),
            'title'              => $this->title,
        ];
    }
}
