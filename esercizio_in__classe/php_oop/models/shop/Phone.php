<?php

require_once __DIR__ . "/Product.php";

class Phone extends Product {
  protected string $brand;
  protected string $model;
  protected string $serialNum;
  protected string $cpuName;
  protected float $cpuFrequency;
  protected int $ram;
  protected int $storage;

  function __construct($_brand, $_model, $_title, $_price, $_description) {
    parent::__construct($_title, $_price, $_description);

    $this->setBrand($_brand);
    $this->setModel($_model);
  }

  /**
   * Get the value of brand
   */
  public function getBrand() {
    return $this->brand;
  }

  /**
   * Set the value of brand
   *
   * @return  self
   */
  public function setBrand($brand) {
    $this->brand = $brand;

    return $this;
  }

  /**
   * Get the value of model
   */
  public function getModel() {
    return $this->model;
  }

  /**
   * Set the value of model
   *
   * @return  self
   */
  public function setModel($model) {
    $this->model = $model;

    return $this;
  }

  /**
   * Get the value of serialNum
   */
  public function getSerialNum() {
    return $this->serialNum;
  }

  /**
   * Set the value of serialNum
   *
   * @return  self
   */
  public function setSerialNum($serialNum) {
    $this->serialNum = $serialNum;

    return $this;
  }

  /**
   * Get the value of cpuName
   */
  public function getCpuName() {
    return $this->cpuName;
  }

  /**
   * Set the value of cpuName
   *
   * @return  self
   */
  public function setCpuName($cpuName) {
    $this->cpuName = $cpuName;

    return $this;
  }

  /**
   * Get the value of cpuFrequency
   */
  public function getCpuFrequency() {
    return $this->cpuFrequency;
  }

  /**
   * Set the value of cpuFrequency
   *
   * @return  self
   */
  public function setCpuFrequency($cpuFrequency) {
    $this->cpuFrequency = $cpuFrequency;

    return $this;
  }

  /**
   * Get the value of ram
   */
  public function getRam() {
    return $this->ram;
  }

  /**
   * Set the value of ram
   *
   * @return  self
   */
  public function setRam($ram) {
    $this->ram = $ram;

    return $this;
  }

  /**
   * Get the value of storage
   */
  public function getStorage() {
    return $this->storage;
  }

  /**
   * Set the value of storage
   *
   * @return  self
   */
  public function setStorage($storage) {
    $this->storage = $storage;

    return $this;
  }
}
