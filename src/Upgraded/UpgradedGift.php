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
    public const string TYPE_NAME = 'upgradedGift';

    public function __construct(
        /**
         * Backdrop of the upgraded gift.
         */
        protected UpgradedGiftBackdrop         $backdrop,
        /**
         * True, if an offer to purchase the gift can be sent using sendGiftPurchaseOffer.
         */
        protected bool                         $canSendPurchaseOffer,
        /**
         * Colors that can be set for user's name, background of empty chat photo, replies to messages and link previews; may be null if none or unknown.
         */
        protected ?UpgradedGiftColors          $colors,
        /**
         * Probability that the gift adds to the chance of successful crafting of a new gift; 0 if the gift can't be used for crafting.
         */
        protected int                          $craftProbabilityPerMille,
        /**
         * Address of the gift NFT in TON blockchain; may be empty if none. Append the address to getOption("ton_blockchain_explorer_url") to get a link with information about the address.
         */
        protected string                       $giftAddress,
        /**
         * Identifier of the user or the chat to which the upgraded gift was assigned from blockchain; may be null if none or unknown.
         */
        protected ?MessageSender               $hostId,
        /**
         * Unique identifier of the gift.
         */
        protected int                          $id,
        /**
         * True, if the gift was used to craft another gift.
         */
        protected bool                         $isBurned,
        /**
         * True, if the gift was craft from another gifts.
         */
        protected bool                         $isCrafted,
        /**
         * True, if the original gift could have been bought only by Telegram Premium subscribers.
         */
        protected bool                         $isPremium,
        /**
         * True, if the gift can be used to set a theme in a chat.
         */
        protected bool                         $isThemeAvailable,
        /**
         * The maximum number of gifts that can be upgraded from the same gift.
         */
        protected int                          $maxUpgradedCount,
        /**
         * Model of the upgraded gift.
         */
        protected UpgradedGiftModel            $model,
        /**
         * Unique name of the upgraded gift that can be used with internalLinkTypeUpgradedGift or sendResoldGift.
         */
        protected string                       $name,
        /**
         * Unique number of the upgraded gift among gifts upgraded from the same gift.
         */
        protected int                          $number,
        /**
         * Information about the originally sent gift; may be null if unknown.
         */
        protected ?UpgradedGiftOriginalDetails $originalDetails,
        /**
         * Address of the gift NFT owner in TON blockchain; may be empty if none. Append the address to getOption("ton_blockchain_explorer_url") to get a link with information about the address.
         */
        protected string                       $ownerAddress,
        /**
         * Identifier of the user or the chat that owns the upgraded gift; may be null if none or unknown.
         */
        protected ?MessageSender               $ownerId,
        /**
         * Name of the owner for the case when owner identifier and address aren't known.
         */
        protected string                       $ownerName,
        /**
         * Identifier of the chat that published the gift; 0 if none.
         */
        protected int                          $publisherChatId,
        /**
         * Unique identifier of the regular gift from which the gift was upgraded; may be 0 for short period of time for old gifts from database.
         */
        protected int                          $regularGiftId,
        /**
         * Resale parameters of the gift; may be null if resale isn't possible.
         */
        protected ?GiftResaleParameters        $resaleParameters,
        /**
         * Symbol of the upgraded gift.
         */
        protected UpgradedGiftSymbol           $symbol,
        /**
         * The title of the upgraded gift.
         */
        protected string                       $title,
        /**
         * Total number of gifts that were upgraded from the same gift.
         */
        protected int                          $totalUpgradedCount,
        /**
         * Identifier of the chat for which the gift is used to set a theme; 0 if none or the gift isn't owned by the current user.
         */
        protected int                          $usedThemeChatId,
        /**
         * Estimated value of the gift; in the smallest units of the currency; 0 if unavailable.
         */
        protected int                          $valueAmount,
        /**
         * ISO 4217 currency code of the currency in which value of the gift is represented; may be empty if unavailable.
         */
        protected string                       $valueCurrency,
        /**
         * Estimated value of the gift in USD; in USD cents; 0 if unavailable.
         */
        protected int                          $valueUsdAmount,
    ) {}

    public static function fromArray(array $array): UpgradedGift
    {
        return new static(
            backdrop                : TdSchemaRegistry::fromArray($array['backdrop']),
            canSendPurchaseOffer    : $array['can_send_purchase_offer'],
            colors                  : (isset($array['colors']) ? TdSchemaRegistry::fromArray($array['colors']) : null),
            craftProbabilityPerMille: $array['craft_probability_per_mille'],
            giftAddress             : $array['gift_address'],
            hostId                  : (isset($array['host_id']) ? TdSchemaRegistry::fromArray($array['host_id']) : null),
            id                      : $array['id'],
            isBurned                : $array['is_burned'],
            isCrafted               : $array['is_crafted'],
            isPremium               : $array['is_premium'],
            isThemeAvailable        : $array['is_theme_available'],
            maxUpgradedCount        : $array['max_upgraded_count'],
            model                   : TdSchemaRegistry::fromArray($array['model']),
            name                    : $array['name'],
            number                  : $array['number'],
            originalDetails         : (isset($array['original_details']) ? TdSchemaRegistry::fromArray($array['original_details']) : null),
            ownerAddress            : $array['owner_address'],
            ownerId                 : (isset($array['owner_id']) ? TdSchemaRegistry::fromArray($array['owner_id']) : null),
            ownerName               : $array['owner_name'],
            publisherChatId         : $array['publisher_chat_id'],
            regularGiftId           : $array['regular_gift_id'],
            resaleParameters        : (isset($array['resale_parameters']) ? TdSchemaRegistry::fromArray($array['resale_parameters']) : null),
            symbol                  : TdSchemaRegistry::fromArray($array['symbol']),
            title                   : $array['title'],
            totalUpgradedCount      : $array['total_upgraded_count'],
            usedThemeChatId         : $array['used_theme_chat_id'],
            valueAmount             : $array['value_amount'],
            valueCurrency           : $array['value_currency'],
            valueUsdAmount          : $array['value_usd_amount'],
        );
    }

    public function getBackdrop(): UpgradedGiftBackdrop
    {
        return $this->backdrop;
    }

    public function getCanSendPurchaseOffer(): bool
    {
        return $this->canSendPurchaseOffer;
    }

    public function getColors(): ?UpgradedGiftColors
    {
        return $this->colors;
    }

    public function getCraftProbabilityPerMille(): int
    {
        return $this->craftProbabilityPerMille;
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

    public function getIsBurned(): bool
    {
        return $this->isBurned;
    }

    public function getIsCrafted(): bool
    {
        return $this->isCrafted;
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

    public function getValueUsdAmount(): int
    {
        return $this->valueUsdAmount;
    }

    public function setBackdrop(UpgradedGiftBackdrop $value): static
    {
        $this->backdrop = $value;

        return $this;
    }

    public function setCanSendPurchaseOffer(bool $value): static
    {
        $this->canSendPurchaseOffer = $value;

        return $this;
    }

    public function setColors(?UpgradedGiftColors $value): static
    {
        $this->colors = $value;

        return $this;
    }

    public function setCraftProbabilityPerMille(int $value): static
    {
        $this->craftProbabilityPerMille = $value;

        return $this;
    }

    public function setGiftAddress(string $value): static
    {
        $this->giftAddress = $value;

        return $this;
    }

    public function setHostId(?MessageSender $value): static
    {
        $this->hostId = $value;

        return $this;
    }

    public function setId(int $value): static
    {
        $this->id = $value;

        return $this;
    }

    public function setIsBurned(bool $value): static
    {
        $this->isBurned = $value;

        return $this;
    }

    public function setIsCrafted(bool $value): static
    {
        $this->isCrafted = $value;

        return $this;
    }

    public function setIsPremium(bool $value): static
    {
        $this->isPremium = $value;

        return $this;
    }

    public function setIsThemeAvailable(bool $value): static
    {
        $this->isThemeAvailable = $value;

        return $this;
    }

    public function setMaxUpgradedCount(int $value): static
    {
        $this->maxUpgradedCount = $value;

        return $this;
    }

    public function setModel(UpgradedGiftModel $value): static
    {
        $this->model = $value;

        return $this;
    }

    public function setName(string $value): static
    {
        $this->name = $value;

        return $this;
    }

    public function setNumber(int $value): static
    {
        $this->number = $value;

        return $this;
    }

    public function setOriginalDetails(?UpgradedGiftOriginalDetails $value): static
    {
        $this->originalDetails = $value;

        return $this;
    }

    public function setOwnerAddress(string $value): static
    {
        $this->ownerAddress = $value;

        return $this;
    }

    public function setOwnerId(?MessageSender $value): static
    {
        $this->ownerId = $value;

        return $this;
    }

    public function setOwnerName(string $value): static
    {
        $this->ownerName = $value;

        return $this;
    }

    public function setPublisherChatId(int $value): static
    {
        $this->publisherChatId = $value;

        return $this;
    }

    public function setRegularGiftId(int $value): static
    {
        $this->regularGiftId = $value;

        return $this;
    }

    public function setResaleParameters(?GiftResaleParameters $value): static
    {
        $this->resaleParameters = $value;

        return $this;
    }

    public function setSymbol(UpgradedGiftSymbol $value): static
    {
        $this->symbol = $value;

        return $this;
    }

    public function setTitle(string $value): static
    {
        $this->title = $value;

        return $this;
    }

    public function setTotalUpgradedCount(int $value): static
    {
        $this->totalUpgradedCount = $value;

        return $this;
    }

    public function setUsedThemeChatId(int $value): static
    {
        $this->usedThemeChatId = $value;

        return $this;
    }

    public function setValueAmount(int $value): static
    {
        $this->valueAmount = $value;

        return $this;
    }

    public function setValueCurrency(string $value): static
    {
        $this->valueCurrency = $value;

        return $this;
    }

    public function setValueUsdAmount(int $value): static
    {
        $this->valueUsdAmount = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                       => static::TYPE_NAME,
            'backdrop'                    => $this->backdrop->jsonSerialize(),
            'can_send_purchase_offer'     => $this->canSendPurchaseOffer,
            'colors'                      => (null !== $this->colors ? $this->colors->jsonSerialize() : null),
            'craft_probability_per_mille' => $this->craftProbabilityPerMille,
            'gift_address'                => $this->giftAddress,
            'host_id'                     => (null !== $this->hostId ? $this->hostId->jsonSerialize() : null),
            'id'                          => $this->id,
            'is_burned'                   => $this->isBurned,
            'is_crafted'                  => $this->isCrafted,
            'is_premium'                  => $this->isPremium,
            'is_theme_available'          => $this->isThemeAvailable,
            'max_upgraded_count'          => $this->maxUpgradedCount,
            'model'                       => $this->model->jsonSerialize(),
            'name'                        => $this->name,
            'number'                      => $this->number,
            'original_details'            => (null !== $this->originalDetails ? $this->originalDetails->jsonSerialize() : null),
            'owner_address'               => $this->ownerAddress,
            'owner_id'                    => (null !== $this->ownerId ? $this->ownerId->jsonSerialize() : null),
            'owner_name'                  => $this->ownerName,
            'publisher_chat_id'           => $this->publisherChatId,
            'regular_gift_id'             => $this->regularGiftId,
            'resale_parameters'           => (null !== $this->resaleParameters ? $this->resaleParameters->jsonSerialize() : null),
            'symbol'                      => $this->symbol->jsonSerialize(),
            'title'                       => $this->title,
            'total_upgraded_count'        => $this->totalUpgradedCount,
            'used_theme_chat_id'          => $this->usedThemeChatId,
            'value_amount'                => $this->valueAmount,
            'value_currency'              => $this->valueCurrency,
            'value_usd_amount'            => $this->valueUsdAmount,
        ];
    }
}
