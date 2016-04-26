<?php

use Illuminate\Database\Seeder;

class ZonasCiudadesRDTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('zonas_provincias')->insert([
            ['zona_id'=>1,'ciudad_id'=>9],  //Espaillat
            ['zona_id'=>1,'ciudad_id'=>22], //Puerto Plata
            ['zona_id'=>1,'ciudad_id'=>29], //Santiago
            ['zona_id'=>1,'ciudad_id'=>15], //La Vega
            ['zona_id'=>1,'ciudad_id'=>17], //Monseñor Nouel
            ['zona_id'=>1,'ciudad_id'=>24], //Sanchez Ramirez
            ['zona_id'=>1,'ciudad_id'=>6],  //Duarte
            ['zona_id'=>1,'ciudad_id'=>11], //Hermanas Mirabal
            ['zona_id'=>1,'ciudad_id'=>16], //María Trinidad Sánchez
            ['zona_id'=>1,'ciudad_id'=>23], //Samaná
            ['zona_id'=>1,'ciudad_id'=>4],  //Dajabón
            ['zona_id'=>1,'ciudad_id'=>18], //Monte Cristi
            ['zona_id'=>1,'ciudad_id'=>30], //Santiago Rodríguez
            ['zona_id'=>1,'ciudad_id'=>32], //Valverde
            ['zona_id'=>2,'ciudad_id'=>1],  //Azua
            ['zona_id'=>2,'ciudad_id'=>21], //Peravia
            ['zona_id'=>2,'ciudad_id'=>26], //San José de Ocoa
            ['zona_id'=>2,'ciudad_id'=>25], //San Cristóbal
            ['zona_id'=>2,'ciudad_id'=>7],  //Elías Piña
            ['zona_id'=>2,'ciudad_id'=>27], //San Juan
            ['zona_id'=>2,'ciudad_id'=>3],  //Barahona
            ['zona_id'=>2,'ciudad_id'=>12], //Independencia
            ['zona_id'=>2,'ciudad_id'=>20], //Pedernales
            ['zona_id'=>3,'ciudad_id'=>8],  //El Seibo
            ['zona_id'=>3,'ciudad_id'=>14], //La Romana
            ['zona_id'=>3,'ciudad_id'=>13], //La Altagracia
            ['zona_id'=>3,'ciudad_id'=>10], //Hato Mayor
            ['zona_id'=>3,'ciudad_id'=>19], //Monte Plata
            ['zona_id'=>3,'ciudad_id'=>28], //San Pedro de Macorís
            ['zona_id'=>3,'ciudad_id'=>5],  //Distrito Nacional
            ['zona_id'=>3,'ciudad_id'=>32], //Santo Domingo Este
        ]);
    }
}
