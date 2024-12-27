<?php
    trait FileHandler{
        //Json file path
        private $filePath =  __DIR__ . "/../../data/vehicles.json";
        
        //Reading from the vehicles.json file
        public function readFile(){
              if (!file_exists($this->filePath)) {
                    file_put_contents($this->filePath, json_encode([]));
              }
              return json_decode(file_get_contents($this->filePath),true);
        }
       
        //Writing to the vehicles.json file.
        public function writeFile($data){
            file_put_contents($this->filePath, json_encode($data, JSON_PRETTY_PRINT));
        }
    }
?>