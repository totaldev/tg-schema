<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Upgraded;

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
         * Number of Telegram Stars that must be paid to buy the gift and send it to someone else; 0 if resale isn't possible.
         */
        protected int                          $resaleStarCount,
    ) {}

    public static function fromArray(array $array): UpgradedGift
    {
        return new static(
            $array['id'],
            $array['title'],
            $array['name'],
            $array['number'],
            $array['total_upgraded_count'],
            $array['max_upgraded_count'],
            isset($array['owner_id']) ? TdSchemaRegistry::fromArray($array['owner_id']) : null,
            $array['owner_address'],
            $array['owner_name'],
            $array['gift_address'],
            TdSchemaRegistry::fromArray($array['model']),
            TdSchemaRegistry::fromArray($array['symbol']),
            TdSchemaRegistry::fromArray($array['backdrop']),
            isset($array['original_details']) ? TdSchemaRegistry::fromArray($array['original_details']) : null,
            $array['resale_star_count'],
        );
    }

    public function getBackdrop(): UpgradedGiftBackdrop
    {
        return $this->backdrop;
    }

    public function getGiftAddress(): string
    {
        return $this->giftAddress;
    }

    public function getId(): int
    {
        return $this->id;
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

    public function getResaleStarCount(): int
    {
        return $this->resaleStarCount;
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

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'id'                   => $this->id,
            'title'                => $this->title,
            'name'                 => $this->name,
            'number'               => $this->number,
            'total_upgraded_count' => $this->totalUpgradedCount,
            'max_upgraded_count'   => $this->maxUpgradedCount,
            'owner_id'             => $this->ownerId ?? null,
            'owner_address'        => $this->ownerAddress,
            'owner_name'           => $this->ownerName,
            'gift_address'         => $this->giftAddress,
            'model'                => $this->model->typeSerialize(),
            'symbol'               => $this->symbol->typeSerialize(),
            'backdrop'             => $this->backdrop->typeSerialize(),
            'original_details'     => $this->originalDetails ?? null,
            'resale_star_count'    => $this->resaleStarCount,
        ];
    }
}
