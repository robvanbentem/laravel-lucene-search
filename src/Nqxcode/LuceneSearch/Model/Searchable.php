<?php
namespace Nqxcode\LuceneSearch\Model;

/**
 * Interface Searchable
 * @package Nqxcode\LuceneSearch
 */
interface Searchable
{
    /**
     * Is the model available for search indexing?
     *
     * @return boolean
     */
    public function isSearchable();

    /**
     * Let the model know it is about to get indexed
     *
     * @return void
     */
    public function prepareForIndexing();
}
