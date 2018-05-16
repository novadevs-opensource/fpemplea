<?php 
    namespace Tests;

    use \lib\Paginator;

    class PaginatorTest extends \PHPUnit_Framework_TestCase
    {
        public function testgetPageList()
        {
            $paginator=new Paginator(2, 101, 10);
            $pages=$paginator->getTotalPages();
            $this->assertEquals($pages, 11);
            $list=$paginator->getPagesList();
            $this->assertEquals($list, array(1,2,3,4,5));

            $paginator=new Paginator(7, 101, 10);
            $list=$paginator->getPagesList();
            $this->assertEquals($list, array(5,6,7,8,9));

            $paginator=new Paginator(10, 101, 10);
            $list=$paginator->getPagesList();
            $this->assertEquals($list, array(7,8,9,10,11));
        }
    }

?>