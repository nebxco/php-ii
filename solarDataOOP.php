<?php

/*TODO:
 * create a constant that will 
 * select all meters to an array
 */


// Query database for Meter Definitions
class MeterDefs {
      public const METERS_SQL= "SELECT * FROM meters";

      //Properties
      protected string $conn;
      protected string $meters;
      public function __construct(string $conn, string $meters) {
           $this->conn = $conn;
           $this->meters = $meters;
      }
      public function getMeters() : string
      {
          return $this->meters;
      }
      // The Subclass
      class MeterLoop extends MetersDefs{
          protected string $definition;
          public function __construct($protocol,$offset)
          {
              parent::__construct($protocol,$offset);
              $this>definition=$definition;
          }
      }
}
