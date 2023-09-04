<?php

/**
 * This phpFile is auto-generated.
 */

//declare(strict_types=1);

namespace Totaldev\TgSchema\Message;

use Totaldev\TgSchema\Sticker\Sticker;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Telegram Premium was gifted to the user
 */
class MessageGiftedPremium extends MessageContent
{
    public const TYPE_NAME = 'messageGiftedPremium';

    /**
     * The identifier of a user that gifted Telegram Premium; 0 if the gift was anonymous
     *
     * @var int
     */
    protected int $gifterUserId;

    /**
     * Currency for the paid amount
     *
     * @var string
     */
    protected string $currency;

    /**
     * The paid amount, in the smallest units of the currency
     *
     * @var int
     */
    protected int $amount;

    /**
     * Cryptocurrency used to pay for the gift; may be empty if none
     *
     * @var string
     */
    protected string $cryptocurrency;

    /**
     * The paid amount, in the smallest units of the cryptocurrency
     *
     * @var int
     */
    protected int $cryptocurrencyAmount;

    /**
     * Number of month the Telegram Premium subscription will be active
     *
     * @var int
     */
    protected int $monthCount;

    /**
     * A sticker to be shown in the message; may be null if unknown
     *
     * @var Sticker|null
     */
    protected ?Sticker $sticker;

    public function __construct(
        int $gifterUserId,
        string $currency,
        int $amount,
        string $cryptocurrency,
        int $cryptocurrencyAmount,
        int $monthCount,
        ?Sticker $sticker,
    ) {
        parent::__construct();

        $this->gifterUserId = $gifterUserId;
        $this->currency = $currency;
        $this->amount = $amount;
        $this->cryptocurrency = $cryptocurrency;
        $this->cryptocurrencyAmount = $cryptocurrencyAmount;
        $this->monthCount = $monthCount;
        $this->sticker = $sticker;
    }

    public static function fromArray(array $array): MessageGiftedPremium
    {
        return new static(
            $array['gifter_user_id'],
            $array['currency'],
            $array['amount'],
            $array['cryptocurrency'],
            $array['cryptocurrency_amount'],
            $array['month_count'],
            (isset($array['sticker']) ? TdSchemaRegistry::fromArray($array['sticker']) : null),
        );
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'gifter_user_id' => $this->gifterUserId,
            'currency' => $this->currency,
            'amount' => $this->amount,
            'cryptocurrency' => $this->cryptocurrency,
            'cryptocurrency_amount' => $this->cryptocurrencyAmount,
            'month_count' => $this->monthCount,
            'sticker' => (isset($this->sticker) ? $this->sticker : null),
        ];
    }

    public function getGifterUserId(): int
    {
        return $this->gifterUserId;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function getCryptocurrency(): string
    {
        return $this->cryptocurrency;
    }

    public function getCryptocurrencyAmount(): int
    {
        return $this->cryptocurrencyAmount;
    }

    public function getMonthCount(): int
    {
        return $this->monthCount;
    }

    public function getSticker(): ?Sticker
    {
        return $this->sticker;
    }
}
