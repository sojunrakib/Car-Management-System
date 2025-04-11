<?php


trait FileHandler {
    private $filePath = __DIR__ . "/../../data/vehicles.json";

    public function readFile() {
        if(!file_exists($this->filePath)){
            file_put_contents($this->filePath, json_encode([]));
        }
        return json_decode(file_get_contents($this->filePath), true);
    }

    public function writeFile($data) {
        file_put_contents($this->filePath, json_encode($data, JSON_PRETTY_PRINT));
    }
}
