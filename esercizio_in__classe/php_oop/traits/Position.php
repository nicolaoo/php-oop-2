<?php

trait Position {
  public float $lat;
  public float $lng;


  public function getCoordinates() {
    return $this->lat . "; " . $this->lng;
  }


  /**
   * Get the value of lat
   */
  public function getLat() {
    return $this->lat;
  }

  /**
   * Set the value of lat
   *
   * @return  self
   */
  public function setLat($lat) {
    $this->lat = $lat;

    return $this;
  }

  /**
   * Get the value of lng
   */
  public function getLng() {
    return $this->lng;
  }

  /**
   * Set the value of lng
   *
   * @return  self
   */
  public function setLng($lng) {
    $this->lng = $lng;

    return $this;
  }
}
