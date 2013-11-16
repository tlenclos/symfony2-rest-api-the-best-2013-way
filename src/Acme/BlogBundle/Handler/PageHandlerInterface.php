<?php

namespace Acme\BlogBundle\Handler;

use Acme\BlogBundle\Model\PageInterface;

interface PageHandlerInterface
{
    /**
     * Get a Page given the identifier
     *
     * @api
     *
     * @param mixed $id
     *
     * @return PageInterface
     */
    public function get($id);


    /**
     * Post Page, creates a new Page.
     *
     * @api
     *
     * @param array $parameters
     *
     * @return PageInterface
     */
    public function post(array $parameters);

    /**
     * Edit a Page.
     *
     * @api
     *
     * @param PageInterface   $page
     * @param array           $parameters
     *
     * @return PageInterface
     */
    public function put(PageInterface $page, array $parameters);

    /**
     * Partially update a Page.
     *
     * @api
     *
     * @param PageInterface   $page
     * @param array           $parameters
     *
     * @return PageInterface
     */
    public function patch(PageInterface $page, array $parameters);
}