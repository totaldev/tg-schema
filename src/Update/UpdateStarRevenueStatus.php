<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Update;

use Totaldev\TgSchema\Message\MessageSender;
use Totaldev\TgSchema\Star\StarRevenueStatus;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * The Telegram Star revenue earned by a bot or a chat has changed. If Telegram Star transaction screen of the chat is opened, then getStarTransactions may be
 * called to fetch new transactions.
 */
class UpdateStarRevenueStatus extends Update
{
    public const TYPE_NAME = 'updateStarRevenueStatus';

    public function __construct(
        /**
         * Identifier of the owner of the Telegram Stars.
         */
        protected MessageSender     $ownerId,
        /**
         * New Telegram Star revenue status.
         */
        protected StarRevenueStatus $status
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): UpdateStarRevenueStatus
    {
        return new static(
            TdSchemaRegistry::fromArray($array['owner_id']),
            TdSchemaRegistry::fromArray($array['status']),
        );
    }

    public function getOwnerId(): MessageSender
    {
        return $this->ownerId;
    }

    public function getStatus(): StarRevenueStatus
    {
        return $this->status;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'    => static::TYPE_NAME,
            'owner_id' => $this->ownerId->typeSerialize(),
            'status'   => $this->status->typeSerialize(),
        ];
    }
}
