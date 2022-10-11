<?php

 abstract class Model
 {
   //Retrieves all the records from the JSON file and returns them
   //in a multi-dimensional associative array.
   public function getAll(): array
     {

       $jasonFile = file_get_contents("C:\xampp\400004095\app", "Model.php");
       $jasonData = json_decode($jasonFile, true);

       return $jasonData;
     }

    // Retrieves a database record using the id stored
   //in the Model data structure. Returns the data in an associative array.


    public function getRecord(string $id)
     {
         $test = $id;

         if(!is_string($test))
           $this->throwException(new \InvalidArgumentException('Wrong DataType'));

       //throw new \InvalidArgumentException('Wrong DataType');


     }

 }
