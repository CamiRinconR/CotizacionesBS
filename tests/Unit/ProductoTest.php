<?php

namespace Tests\Unit;

use App\Models\Producto;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\TestCase;

class ProductoTest extends TestCase
{
    use RefreshDatabase;
    public function test_decrement_method_reduce(): void
    {
        $producto = new Producto();
        $producto -> nombreProducto = "B";
        $producto -> categoriaProducto = "G";
        $producto -> save();
        $this->assertCount(2,$producto::all(),"");
        $this->assertEquals(" ",$producto->categoriaProducto);
    }
}
