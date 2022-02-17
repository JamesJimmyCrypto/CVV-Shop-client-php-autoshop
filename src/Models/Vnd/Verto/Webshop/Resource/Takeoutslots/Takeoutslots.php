<?php

declare(strict_types=1);

namespace JacobDeKeizer\Ccv\Models\Vnd\Verto\Webshop\Resource\Takeoutslots;

use JacobDeKeizer\Ccv\Contracts\Model;
use JacobDeKeizer\Ccv\Traits\FromArray;
use JacobDeKeizer\Ccv\Traits\ToArray;

/**
 * This class is autogenerated.
 */
class Takeoutslots implements Model
{
    use FromArray;
    use ToArray;

    /**
     * @var string Link to self
     */
    private string $href;

    /**
     * @var int Unique id of the resource
     */
    private int $id;

    /**
     * @var int Slot Capacity
     */
    private int $capacity;

    /**
     * @var string Start datetime
     */
    private string $datetimefrom;

    /**
     * @var string End datetime
     */
    private string $datetimetill;

    /**
     * @var string Checkout type
     */
    private string $checkouttype;

    /**
     * @var int Number of reservations
     */
    private int $countReservation;

    public static function fromArray(array $data): static
    {
        return static::createFromArray($data);
    }

    /**
     * @return string Link to self
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @return int Unique id of the resource
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return int Slot Capacity
     */
    public function getCapacity(): int
    {
        return $this->capacity;
    }

    /**
     * @return string Start datetime
     */
    public function getDatetimefrom(): string
    {
        return $this->datetimefrom;
    }

    /**
     * @return string End datetime
     */
    public function getDatetimetill(): string
    {
        return $this->datetimetill;
    }

    /**
     * @return string Checkout type
     */
    public function getCheckouttype(): string
    {
        return $this->checkouttype;
    }

    /**
     * @return int Number of reservations
     */
    public function getCountReservation(): int
    {
        return $this->countReservation;
    }

    /**
     * @param string $href Link to self
     * @return self
     */
    public function setHref(string $href): self
    {
        $this->href = $href;
        return $this;
    }

    /**
     * @param int $id Unique id of the resource
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @param int $capacity Slot Capacity
     * @return self
     */
    public function setCapacity(int $capacity): self
    {
        $this->capacity = $capacity;
        return $this;
    }

    /**
     * @param string $datetimefrom Start datetime
     * @return self
     */
    public function setDatetimefrom(string $datetimefrom): self
    {
        $this->datetimefrom = $datetimefrom;
        return $this;
    }

    /**
     * @param string $datetimetill End datetime
     * @return self
     */
    public function setDatetimetill(string $datetimetill): self
    {
        $this->datetimetill = $datetimetill;
        return $this;
    }

    /**
     * @param string $checkouttype Checkout type
     * @return self
     */
    public function setCheckouttype(string $checkouttype): self
    {
        $this->checkouttype = $checkouttype;
        return $this;
    }

    /**
     * @param int $countReservation Number of reservations
     * @return self
     */
    public function setCountReservation(int $countReservation): self
    {
        $this->countReservation = $countReservation;
        return $this;
    }
}