<?php
declare(strict_types = 1);

namespace App\Representations;

/**
 * Data representation for a specific movie.
 *
 * @api-label Movie
 */
class Movie extends Representation
{
    protected $movie;
    
    public function create()
    {
        return [
        
        ];
    }
}