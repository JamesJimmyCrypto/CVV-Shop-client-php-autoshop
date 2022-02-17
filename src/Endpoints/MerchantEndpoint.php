<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Endpoints;

use JacobDeKeizer\Ccv\Exceptions\CcvShopException;

/**
 * This class is autogenerated.
 */
class MerchantEndpoint extends BaseEndpoint
{
    /**
     * Get merchant data associated with this webshop. 150 per minute
     *
     * @throws CcvShopException
     */
    public function allFromWebshop(int $id): \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Entity\Merchant\Merchant
    {
        $result = $this->doRequest(
            self::GET,
            'webshops/' . $id . '/merchant/'
        );

        return \JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Entity\Merchant\Merchant::fromArray($result);
    }
}