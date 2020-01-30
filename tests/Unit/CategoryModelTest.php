<?php

namespace Tests\Unit;

use App\Entity\Category;
use PHPUnit\Framework\TestCase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CategoryModelTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_category_add()
    {
        $data = array(
            'top_category'=>0,
            'name' => "test_".rand(10,100),
            "created_at"=>date("Y-m-d h:i:s"),
            "updated_at"=>date("Y-m-d h:i:s"));
        $result=Category::create($data);

            $this->assertEquals("test_category",$result->categoryname());
    }
}
