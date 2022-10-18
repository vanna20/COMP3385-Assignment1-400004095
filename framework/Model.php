<?php

 abstract class Model implements Observable
 {
   #implement the Observable interface.
   #automatically load the JSON file and store it as an appropriate data structure – caching is necessary
   #call methods to retrieve and update data in the JSON file

   protected $json_cach = []; // associative array for json files
   protected $observers = []; //array for observer objects
   protected $updateObserverData = [];
   
   //adds observers to an array
   public function attach(Observer $obj)
   {
     $this->observers[] = $obj;
   }

   //removes observer(s) from the array
   public function detach(Observer $obj)
   {

   }

   public function notify()
   {
     #iterate through the array we created in attach, essentially sending a notification to
     #all of the observers to update their data
     foreach ($this->observers as $observerUpdate) {
           $observerUpdate->update($this);
       }
   }

   //Loads the JSON file(s) and stores them in an array
   public function loadFiles(string $fileName) : array
   {
     $nameOfFile = basename($fileName, '.json'); //removes the .json extension from the file name

     #isset determins wether a variable has been declared and if it is NULL
     #empty checks to see if the array is empty
     if (!isset($this->json_cach[$nameOfFile]) || empty($this->json_cach[$nameOfFile])) {
            #Reads file to a string and stores it in the variable $jsonContent
            $jsonContent = file_get_contents($nameOfFile);

            #stores data in $cached_json array
            $this->json_cach[$nameOfFile] = json_decode($json_file, true);
        }

		 return $this->json_cach[$nameOfFile]; //return array

   }

   abstract public function getAll() : array;

   abstract public function getRecord(string $id) : array;

 }
