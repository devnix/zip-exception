<?php

namespace Devnix\ZipException;

use ZipArchive;

class ZipException extends \Exception
{
    public function __construct(int $status)
    {
        switch ($status) {
            case ZipArchive::ER_EXISTS:
                $message = 'File already exists';
                break;

            case ZipArchive::ER_INCONS:
                $message = 'Zip archive inconsistent';
                break;

            case ZipArchive::ER_INVAL:
                $message = 'Invalid argument';
                break;

            case ZipArchive::ER_MEMORY:
                $message = 'Malloc failure';
                break;

            case ZipArchive::ER_NOENT:
                $message = 'No such file';
                break;

            case ZipArchive::ER_NOZIP:
                $message = 'Not a zip archive';
                break;

            case ZipArchive::ER_OPEN:
                $message = 'Can\'t open file';
                break;

            case ZipArchive::ER_READ:
                $message = 'Read error';
                break;

            case ZipArchive::ER_SEEK:
                $message = 'Seek error';
                break;

            default:
                $message = 'Undefined exception';
                break;
        }

        parent::__construct($message);
    }
}
