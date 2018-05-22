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
            /**
             * @api-data    external_urls (object) - External URLs
             * @api-version >=1.0
             * @api-see     self::getExternalUrls external_urls
             */
            'external_urls' => $this->getExternalUrls(),
        ];
    }
    
    
    /**
     * @return array
     */
    private function getExternalUrls()
    {
        return [
            /**
             * @api-data trailer (string) - Trailer URL
             */
            'trailer'  => $this->movie->trailer,
            /**
             * @api-data trailer (array) - Trailers URLs
             */
            'trailers' => $this->movie->trailers,
            /**
             * @api-data    tickets (string, BUY_TICKETS) - Tickets URL
             * @api-version <1.2.1
             */
            'tickets'  => $this->movie->tickets_url,
            
            /**
             * @api-data    imdb (string) - imdb URL
             * @api-version >1.0.0
             */
            'imdb'     => $this->movie->imdb,
        ];
    }
}