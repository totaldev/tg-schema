<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Input;

/**
 * A stake dice message.
 */
class InputMessageStakeDice extends InputMessageContent
{
    public const string TYPE_NAME = 'inputMessageStakeDice';

    public function __construct(
        /**
         * True, if the chat message draft must be deleted.
         */
        protected bool   $clearDraft,
        /**
         * The Toncoin amount that will be staked; in the smallest units of the currency. Must be in the range getOption("stake_dice_stake_amount_min")-getOption("stake_dice_stake_amount_max").
         */
        protected int    $stakeToncoinAmount,
        /**
         * Hash of the stake dice state. The state hash can be used only if it was received recently enough. Otherwise, a new state must be requested using getStakeDiceState.
         */
        protected string $stateHash,
    ) {
        parent::__construct();
    }

    public static function fromArray(array $array): InputMessageStakeDice
    {
        return new static(
            clearDraft        : $array['clear_draft'],
            stakeToncoinAmount: $array['stake_toncoin_amount'],
            stateHash         : $array['state_hash'],
        );
    }

    public function getClearDraft(): bool
    {
        return $this->clearDraft;
    }

    public function getStakeToncoinAmount(): int
    {
        return $this->stakeToncoinAmount;
    }

    public function getStateHash(): string
    {
        return $this->stateHash;
    }

    public function setClearDraft(bool $value): static
    {
        $this->clearDraft = $value;

        return $this;
    }

    public function setStakeToncoinAmount(int $value): static
    {
        $this->stakeToncoinAmount = $value;

        return $this;
    }

    public function setStateHash(string $value): static
    {
        $this->stateHash = $value;

        return $this;
    }

    public function typeSerialize(): array
    {
        return [
            '@type'                => static::TYPE_NAME,
            'clear_draft'          => $this->clearDraft,
            'stake_toncoin_amount' => $this->stakeToncoinAmount,
            'state_hash'           => $this->stateHash,
        ];
    }
}
