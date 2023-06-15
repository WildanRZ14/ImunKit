<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Upload extends BaseConfig
{
    /*
     |--------------------------------------------------------------------------
     | Upload Directory
     |--------------------------------------------------------------------------
     |
     | The directory where the uploaded files will be stored.
     |
     */
    public $uploadDirectory = 'public/assets/images/jadwal';

    /*
     |--------------------------------------------------------------------------
     | Allowed File Types
     |--------------------------------------------------------------------------
     |
     | The allowed file types for upload. Use the file extension or MIME type.
     | Separate multiple types with a pipe (|) character.
     |
     */
    public $allowedTypes = 'jpg|jpeg|png';

    /*
     |--------------------------------------------------------------------------
     | Maximum File Size
     |--------------------------------------------------------------------------
     |
     | The maximum file size (in kilobytes) allowed for upload.
     |
     */
    public $maxSize = 5120; // 5 MB
}
