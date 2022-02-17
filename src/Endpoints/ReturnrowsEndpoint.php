<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

/**
 * This class is autogenerated.
 */
class ReturnrowsEndpoint extends BaseEndpoint
{
    /**
     * Get all return rows of this return. 150 per minute
     *
     * @throws CcvShopException
     */
    public function allFromReturn(int $id, \JacobDeKeizer\Ccv\Parameters\Returnrows\AllFromReturn $parameter = null): \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Collection\Returnrows\Returnrows
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Returnrows\AllFromReturn();
        }

        $result = $this->doRequest(
            self::GET,
            'returns/' . $id . '/returnrows/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Collection\Returnrows\Returnrows::fromArray($result);
    }

    /**
     * Get one return row. 150 per minute
     *
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Returnrows\Returnrows
    {
        $result = $this->doRequest(
            self::GET,
            'returnrows/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Returnrows\Returnrows::fromArray($result);
    }
}