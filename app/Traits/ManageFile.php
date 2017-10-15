<?php

namespace App\Traits;

use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Support\Facades\Storage;

trait ManageFile
{
    protected $path_attribute;

    public function file_generate_path(){}

    public function file_path(){}

    /**
     * @return bool
     */
    public function file_exists(){
        return file_exists($this->file_path());
    }

    /**
     * @return \Symfony\Component\HttpFoundation\BinaryFileResponse
     * @throws FileNotFoundException
     */
    public function file_download(){
        if(!$this->exists()){
            throw new FileNotFoundException();
        }
        return response()->download($this->file_path());
    }

    /**
     * @return mixed
     * @throws FileNotFoundException
     */
    public function file_display(){
        if(!$this->exists()){
            throw new FileNotFoundException();
        }
        return response()->file($this->file_path());
    }

    /**
     * @param $file_uploaded
     */
    public function file_upload($file_uploaded){
        Storage::putFileAs("c");
    }
}