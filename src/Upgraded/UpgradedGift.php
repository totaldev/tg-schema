<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Upgraded;

use Totaldev\TgSchema\Gift\GiftResaleParameters;
use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\TdObject;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Describes an upgraded gift that can be transferred to another owner or transferred to the TON blockchain as an NFT.
 */
class UpgradedGift extends TdObject
{
    public const TYPE_NAME = 'upgradedGift';

    public function __construct(
        /**
         * Unique identifier of the gift.
         */
        protected int                          $id,
        /**
         * Unique identifier of the regular gift from which the gift was upgraded; may be 0 for short period of time for old gifts from database.
         */
        protected int                          $regularGiftId,
        /**
         * Identifier of the chat that published the gift; 0 if none.
         */
        protected int                          $publisherChatId,
        /**
         * The title of the upgraded gift.
         */
        protected string                       $title,
        /**
         * Unique name of the upgraded gift that can be used with internalLinkTypeUpgradedGift or sendResoldGift.
         */
        protected string                       $name,
        /**
         * Unique number of the upgraded gift among gifts upgraded from the same gift.
         */
        protected int                          $number,
        /**
         * Total number of gifts that were upgraded from the same gift.
         */
        protected int                          $totalUpgradedCount,
        /**
         * The maximum number of gifts that can be upgraded from the same gift.
         */
        protected int                          $maxUpgradedCount,
        /**
         * True, if the original gift could have been bought only by Telegram Premium subscribers.
         */
        protected bool                         $isPremium,
        /**
         * True, if the gift can be used to set a theme in a chat.
         */
        protected bool                         $isThemeAvailable,
        /**
         * Identifier of the chat for which the gift is used to set a theme; 0 if none or the gift isn't owned by the current user.
         */
        protected int                          $usedThemeChatId,
        /**
         * Identifier of the user or the chat to which the upgraded gift was assigned from blockchain; may be null if none or unknown.
         */
        protected ?MessageSender               $hostId,
        /**
         * Identifier of the user or the chat that owns the upgraded gift; may be null if none or unknown.
         */
        protected ?MessageSender               $ownerId,
        /**
         * Address of the gift NFT owner in TON blockchain; may be empty if none. Append the address to getOption("ton_blockchain_explorer_url") to get a link with information about the address.
         */
        protected string                       $ownerAddress,
        /**
         * Name of the owner for the case when owner identifier and address aren't known.
         */
        protected string                       $ownerName,
        /**
         * Address of the gift NFT in TON blockchain; may be empty if none. Append the address to getOption("ton_blockchain_explorer_url") to get a link with information about the address.
         */
        protected string                       $giftAddress,
        /**
         * Model of the upgraded gift.
         */
        protected UpgradedGiftModel            $model,
        /**
         * Symbol of the upgraded gift.
         */
        protected UpgradedGiftSymbol           $symbol,
        /**
         * Backdrop of the upgraded gift.
         */
        protected UpgradedGiftBackdrop         $backdrop,
        /**
         * Information about the originally sent gift; may be null if unknown.
         */
        protected ?UpgradedGiftOriginalDetails $originalDetails,
        /**
         * Colors that can be set for user's name, background of empty chat photo, replies to messages and link previews; may be null if none.
         */
        protected ?UpgradedGiftColors          $colors,
        /**
         * Resale parameters of the gift; may be null if resale isn't possible.
         */
        protected ?GiftResaleParameters        $resaleParameters,
        /**
         * ISO 4217 currency code of the currency in which value of the gift is represented; may be empty if unavailable.
         */
        protected string                       $valueCurrency,
        /**
         * Estimated value of the gift; in the smallest units of the currency; 0 if unavailable.
         */
        protected int                          $valueAmount,
    ) {}

    public static function fromArray(array $array): UpgradedGift
    {
        return new static(
            $array['id'],
            $array['regular_gift_id'],
            $array['publisher_chat_id'],
            $array['title'],
            $array['name'],
            $array['number'],
            $array['total_upgraded_count'],
            $array['max_upgraded_count'],
            $array['is_premium'],
            $array['is_theme_available'],
            $array['used_theme_chat_id'],
            isset($array['host_id']) ? TdSchemaRegistry::fromArray($array['host_id']) : null,
            isset($array['owner_id']) ? TdSchemaRegistry::fromArray($array['owner_id']) : null,
            $array['owner_address'],
            $array['owner_name'],
            $array['gift_address'],
            TdSchemaRegistry::fromArray($array['model']),
            TdSchemaRegistry::fromArray($array['symbol']),
            TdSchemaRegistry::fromArray($array['backdrop']),
            isset($array['original_details']) ? TdSchemaRegistry::fromArray($array['original_details']) : null,
            isset($array['colors']) ? TdSchemaRegistry::fromArray($array['colors']) : null,
            isset($array['resale_parameters']) ? TdSchemaRegistry::fromArray($array['resale_parameters']) : null,
            $array['value_currency'],
            $array['value_amount'],
        );
    }

    public function getBackdrop(): UpgradedGiftBackdrop
    {
        return $this->backdrop;
    }

    public function getColors(): ?UpgradedGiftColors
    {
        return $this->colors;
    }

    public function getGiftAddress(): string
    {
        return $this->giftAddress;
    }

    public function getHostId(): ?MessageSender
    {
        return $this->hostId;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getIsPremium(): bool
    {
        return $this->isPremium;
    }

    public function getIsThemeAvailable(): bool
    {
        return $this->isThemeAvailable;
    }

    public function getMaxUpgradedCount(): int
    {
        return $this->maxUpgradedCount;
    }

    public function getModel(): UpgradedGiftModel
    {
        return $this->model;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getNumber(): int
    {
        return $this->number;
    }

    public function getOriginalDetails(): ?UpgradedGiftOriginalDetails
    {
        return $this->originalDetails;
    }

    public function getOwnerAddress(): string
    {
        return $this->ownerAddress;
    }

    public function getOwnerId(): ?MessageSender
    {
        return $this->ownerId;
    }

    public function getOwnerName(): string
    {
        return $this->ownerName;
    }

    public function getPublisherChatId(): int
    {
        return $this->publisherChatId;
    }

    public function getRegularGiftId(): int
    {
        return $this->regularGiftId;
    }

    public function getResaleParameters(): ?GiftResaleParameters
    {
        return $this->resaleParameters;
    }

    public function getSymbol(): UpgradedGiftSymbol
    {
        return $this->symbol;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getTotalUpgradedCount(): int
    {
        return $this->totalUpgradedCount;
    }

    public function getUsedThemeChatId(): int
    {
        return $this->usedThemeChatId;
    }

    public function getValueAmount(): int
    {
        return $this->valueAmount;
    }

    public function getValueCurrency(): string
    {
        return $this->valueCurrency;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'id'                   => $this->id,
            'regular_gift_id'      => $this->regularGiftId,
            'publisher_chat_id'    => $this->publisherChatId,
            'title'                => $this->title,
            'name'                 => $this->name,
            'number'               => $this->number,
            'total_upgraded_count' => $this->totalUpgradedCount,
            'max_upgraded_count'   => $this->maxUpgradedCount,
            'is_premium'           => $this->isPremium,
            'is_theme_available'   => $this->isThemeAvailable,
            'used_theme_chat_id'   => $this->usedThemeChatId,
            'host_id'              => $this->hostId ?? null,
            'owner_id'             => $this->ownerId ?? null,
            'owner_address'        => $this->ownerAddress,
            'owner_name'           => $this->ownerName,
            'gift_address'         => $this->giftAddress,
            'model'                => $this->model->typeSerialize(),
            'symbol'               => $this->symbol->typeSerialize(),
            'backdrop'             => $this->backdrop->typeSerialize(),
            'original_details'     => $this->originalDetails ?? null,
            'colors'               => $this->colors ?? null,
            'resale_parameters'    => $this->resaleParameters ?? null,
            'value_currency'       => $this->valueCurrency,
            'value_amount'         => $this->valueAmount,
        ];
    }
}
