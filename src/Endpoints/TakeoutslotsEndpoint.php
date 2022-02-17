<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

/**
 * This class is autogenerated.
 */
class TakeoutslotsEndpoint extends BaseEndpoint
{
    /**
     * Get one slot. 150 per minute
     *
     * @throws CcvShopException
     */
    public function get(int $id): \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Takeoutslots\Takeoutslots
    {
        $result = $this->doRequest(
            self::GET,
            'takeoutslots/' . $id . '/'
        );

        return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Takeoutslots\Takeoutslots::fromArray($result);
    }

    /**
     * Get all slots for this webshop. 150 per minute
     *
     * @throws CcvShopException
     */
    public function all(\JacobDeKeizer\Ccv\Parameters\Takeoutslots\All $parameter = null): \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Collection\Takeoutslots\Takeoutslots
    {
        if ($parameter === null) {
            $parameter = new \JacobDeKeizer\Ccv\Parameters\Takeoutslots\All();
        }

        $result = $this->doRequest(
            self::GET,
            'takeoutslots/' . $parameter->toBuilder()->toQueryString()
        );

        return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Collection\Takeoutslots\Takeoutslots::fromArray($result);
    }
}