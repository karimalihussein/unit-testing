<?php
use App\Support\Collection;
class CollectionTest extends \PHPUnit\Framework\TestCase
{
     

     /** @test*/
     public function empty_instantiatedCollection_returns_no_items()
     {
         $collection = new Collection();

         $this->assertEmpty($collection->get());
     }

     /** @test*/

     public function count_is_correct_for_items_passed_in()
     {
         $collection = new Collection([
             'one', 'two', 'three'
         ]);

         $this->assertEquals(3, $collection->count());
     }

     /** @test */
     
}