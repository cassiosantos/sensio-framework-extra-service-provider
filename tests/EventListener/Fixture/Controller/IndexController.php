<?php
namespace Inbep\Silex\EventListener\Fixture\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class IndexController
{
    /**
     * @Template(engine="php")
     */
    public function indexAction()
    {
    }
}
