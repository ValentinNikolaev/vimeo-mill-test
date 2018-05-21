<?php
declare(strict_types = 1);

namespace App\Representations;

/**
 * @api-label Error
 */
class Error extends Representation
{
    /**
     * @param $error
     *
     * @return array
     */
    public function create($error)
    {
        return [
            /**
             * @api-data error (string) - User-friendly error message
             */
            'error' => $error,
        ];
    }
}