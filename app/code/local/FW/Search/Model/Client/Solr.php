<?php
/**
 * @category    FW
 * @package     FW_Search
 * @copyright   Copyright (c) 2012 F+W Media, Inc. (http://www.fwmedia.com)
 * @author      J.P. Daniel <jp.daniel@fwmedia.com>
 */

class FW_Search_Model_Client_Solr extends Enterprise_Search_Model_Client_Solr
{
    /**
     * Simple Search interface
     *
     * @param string $query The raw query string
     * @param int $offset The starting offset for result documents
     * @param int $limit The maximum number of result documents to return
     * @param array $params key / value pairs for other query parameters (see Solr documentation), use arrays for parameter keys used more than once (e.g. facet.field)
     * @return Apache_Solr_Response
     *
     * @throws Exception If an error occurs during the service call
     */
    public function search($query, $offset = 0, $limit = 10, $params = array(), $method = self::METHOD_GET)
    {
        $params['sort'] = implode(',', $params['sort']);    // SOLR is expecting multiple sort params to be comma seperated
        return parent::search($query, $offset, $limit, $params, $method);
    }
}
