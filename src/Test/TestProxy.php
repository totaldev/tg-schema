<?php

/**
 * This phpFile is auto-generated.
 */

namespace Totaldev\TgSchema\Test;

use Totaldev\TgSchema\Proxy\ProxyType;
use Totaldev\TgSchema\TdFunction;
use Totaldev\TgSchema\TdSchemaRegistry;

/**
 * Sends a simple network request to the Telegram servers via proxy; for testing only. Can be called before authorization
 */
class TestProxy extends TdFunction
{
    public const TYPE_NAME = 'testProxy';

    /**
     * Identifier of a datacenter with which to test connection
     *
     * @var int
     */
    protected int $dcId;

    /**
     * Proxy server port
     *
     * @var int
     */
    protected int $port;

    /**
     * Proxy server domain or IP address
     *
     * @var string
     */
    protected string $server;

    /**
     * The maximum overall timeout for the request
     *
     * @var float
     */
    protected float $timeout;

    /**
     * Proxy type
     *
     * @var ProxyType
     */
    protected ProxyType $type;

    public function __construct(string $server, int $port, ProxyType $type, int $dcId, float $timeout)
    {
        $this->server = $server;
        $this->port = $port;
        $this->type = $type;
        $this->dcId = $dcId;
        $this->timeout = $timeout;
    }

    public static function fromArray(array $array): TestProxy
    {
        return new static(
            $array['server'],
            $array['port'],
            TdSchemaRegistry::fromArray($array['type']),
            $array['dc_id'],
            $array['timeout'],
        );
    }

    public function getDcId(): int
    {
        return $this->dcId;
    }

    public function getPort(): int
    {
        return $this->port;
    }

    public function getServer(): string
    {
        return $this->server;
    }

    public function getTimeout(): float
    {
        return $this->timeout;
    }

    public function getType(): ProxyType
    {
        return $this->type;
    }

    public function typeSerialize(): array
    {
        return [
            '@type' => static::TYPE_NAME,
            'server' => $this->server,
            'port' => $this->port,
            'type' => $this->type->typeSerialize(),
            'dc_id' => $this->dcId,
            'timeout' => $this->timeout,
        ];
    }
}
