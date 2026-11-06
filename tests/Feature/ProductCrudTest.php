<?php

namespace Tests\Feature;

use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

final class ProductCrudTest extends TestCase
{
    use RefreshDatabase;

    public function test_product_index_displays_saved_products(): void
    {
        $product = Product::factory()->create([
            'product_code' => 'PRD-001',
            'product_name' => 'Kopi Arabica',
        ]);

        $response = $this->get(route('products.index'));

        $response->assertOk();
        $response->assertSee($product->product_code);
        $response->assertSee($product->product_name);
    }

    public function test_valid_product_data_creates_a_product(): void
    {
        $data = [
            'product_code' => 'PRD-001',
            'product_name' => 'Kopi Arabica',
            'product_price' => 15000,
            'current_stock' => 10,
            'price' => 18000,
        ];

        $response = $this->post(route('products.store'), $data);

        $response->assertRedirectToRoute('products.index');
        $this->assertDatabaseHas('products', $data);
    }

    public function test_product_creation_rejects_invalid_data(): void
    {
        $response = $this->from(route('products.create'))->post(route('products.store'), []);

        $response->assertRedirect(route('products.create'));
        $response->assertInvalid([
            'product_code' => 'The product code field is required.',
            'product_name' => 'The product name field is required.',
            'product_price' => 'The product price field is required.',
            'current_stock' => 'The current stock field is required.',
            'price' => 'The price field is required.',
        ]);
        $this->assertDatabaseEmpty('products');
    }

    public function test_product_update_changes_the_saved_product(): void
    {
        $product = Product::factory()->create();

        $response = $this->put(route('products.update', $product), [
            'product_code' => $product->product_code,
            'product_name' => 'Teh Melati',
            'product_price' => 10000,
            'current_stock' => 25,
            'price' => 12000,
        ]);

        $response->assertRedirectToRoute('products.index');
        $this->assertDatabaseHas('products', [
            'id' => $product->id,
            'product_name' => 'Teh Melati',
            'current_stock' => 25,
        ]);
    }

    public function test_product_delete_removes_the_saved_product(): void
    {
        $product = Product::factory()->create();

        $response = $this->delete(route('products.destroy', $product));

        $response->assertRedirectToRoute('products.index');
        $this->assertModelMissing($product);
    }
}
