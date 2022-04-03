<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];
    
    private string $energy;
    private int $energyLevel;
    private int $storageCapacity;
    private int $currentLoad = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $storageCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->storageCapacity = $storageCapacity;
    }
    public function getEnergy(): string
    {
        return $this->energy;
    }
    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }
    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }
    public function getStorageCapacity(): int
    {
        return $this->storageCapacity;
    }
    public function setStorageCapacity(int $storageCapacity): void
    {
        $this->storageCapacity = $storageCapacity;
    }
    public function getCurrentLoad(): int
    {
        return $this->currentLoad;
    }
    public function setCurrentLoad(int $currentLoad): void
    {
        $this->currentLoad = $currentLoad;
    }
    public function load(int $amount): string
    {
        if ($this->currentLoad + $amount > $this->storageCapacity) {
            return "Not enough storage capacity " ;
        }
        elseif ($this -> currentLoad + $amount === $this->storageCapacity){
            $this->currentLoad = $this->storageCapacity;
            return "full ";
        }
        else{
            $this->currentLoad += $amount;
            return "in filling ";
        }
    }
}