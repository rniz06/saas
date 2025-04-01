<?php

namespace Database\Seeders\Tenant;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoVariante extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Obtener algunos productos y atributos existentes para insertar variantes
        $producto1 = DB::table('productos')->where('nombre', 'Smartphone Samsung Galaxy')->first()->id_producto;
        $producto2 = DB::table('productos')->where('nombre', 'Laptop HP Pavilion')->first()->id_producto;
        $producto3 = DB::table('productos')->where('nombre', 'Camiseta Adidas')->first()->id_producto;

        $atributoColor = DB::table('producto_atributos')->where('atributo', 'Color')->first()->idproducto_atributo;
        $atributoTamaño = DB::table('producto_atributos')->where('atributo', 'Tamaño')->first()->idproducto_atributo;
        $atributoPeso = DB::table('producto_atributos')->where('atributo', 'Peso')->first()->idproducto_atributo;

        // Insertar variantes para Smartphone Samsung Galaxy
        DB::table('producto_variantes')->insert([
            'producto_id' => $producto1,
            'atributo_id' => $atributoColor,
            'variante' => 'Rojo',
            'precio_adicional' => 50,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('producto_variantes')->insert([
            'producto_id' => $producto1,
            'atributo_id' => $atributoColor,
            'variante' => 'Negro',
            'precio_adicional' => 50,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('producto_variantes')->insert([
            'producto_id' => $producto1,
            'atributo_id' => $atributoTamaño,
            'variante' => '128GB',
            'precio_adicional' => 100,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Insertar variantes para Laptop HP Pavilion
        DB::table('producto_variantes')->insert([
            'producto_id' => $producto2,
            'atributo_id' => $atributoColor,
            'variante' => 'Plata',
            'precio_adicional' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('producto_variantes')->insert([
            'producto_id' => $producto2,
            'atributo_id' => $atributoPeso,
            'variante' => '1.8kg',
            'precio_adicional' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Insertar variantes para Camiseta Adidas
        DB::table('producto_variantes')->insert([
            'producto_id' => $producto3,
            'atributo_id' => $atributoColor,
            'variante' => 'Azul',
            'precio_adicional' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('producto_variantes')->insert([
            'producto_id' => $producto3,
            'atributo_id' => $atributoTamaño,
            'variante' => 'L',
            'precio_adicional' => 0,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
