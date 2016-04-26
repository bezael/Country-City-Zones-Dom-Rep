<?php

use Illuminate\Database\Seeder;

class ProvinciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('provincias')->insert([
            ['name'=>'Azua','capital'=>'Azua de Compostela','country_id'=>23],                   //1
            ['name'=>'Bahoruco','capital'=>'Neiba','country_id'=>23],                            //2
            ['name'=>'Barahona','capital'=>'Santa Cruz de Barahona','country_id'=>23],           //3
            ['name'=>'Dajabón','capital'=>'Dajabón','country_id'=>23],                           //4
            ['name'=>'Distrito Nacional','capital'=>'Santo Domingo','country_id'=>23],           //5
            ['name'=>'Duarte','capital'=>'San Francisco de Macorís','country_id'=>23],           //6
            ['name'=>'Elías Piña','capital'=>'Comendador','country_id'=>23],                     //7
            ['name'=>'El Seibo','capital'=>'Santa Cruz del Seibo','country_id'=>23],             //8
            ['name'=>'Espaillat','capital'=>'Moca','country_id'=>23],                            //9
            ['name'=>'Hato Mayor','capital'=>'Hato Mayor del Rey','country_id'=>23],             //10
            ['name'=>'Hermanas Mirabal','capital'=>'Salcedo','country_id'=>23],                  //11
            ['name'=>'Independencia','capital'=>'Jimaní','country_id'=>23],                      //12
            ['name'=>'La Altagracia','capital'=>'Salvaleón de Higüey','country_id'=>23],         //13
            ['name'=>'La Romana','capital'=>'La Romana','country_id'=>23],                       //14
            ['name'=>'La Vega','capital'=>'Concepción de la Vega','country_id'=>23],             //15
            ['name'=>'María Trinidad Sánchez','capital'=>'Nagua','country_id'=>23],              //16
            ['name'=>'Monseñor Nouel','capital'=>'Bonao','country_id'=>23],                      //17
            ['name'=>'Monte Cristi','capital'=>'San Fernando de Monte Cristi','country_id'=>23], //18
            ['name'=>'Monte Plata','capital'=>'Monte Plata','country_id'=>23],                   //19
            ['name'=>'Pedernales','capital'=>'Pedernales','country_id'=>23],                     //20
            ['name'=>'Peravia','capital'=>'Baní','country_id'=>23],                              //21
            ['name'=>'Puerto Plata','capital'=>'San Felipe de Puerto Plata','country_id'=>23],   //22
            ['name'=>'Samaná','capital'=>'Santa Bárbara de Samaná','country_id'=>23],            //23
            ['name'=>'Sánchez Ramírez','capital'=>'Cotuí','country_id'=>23],                     //24
            ['name'=>'San Cristóbal','capital'=>'San Cristóbal','country_id'=>23],               //25
            ['name'=>'San José de Ocoa','capital'=>'San José de Ocoa','country_id'=>23],         //26
            ['name'=>'San Juan','capital'=>'San Juan de la Maguana','country_id'=>23],           //27
            ['name'=>'San Pedro de Macorís','capital'=>'San Pedro de Macorís','country_id'=>23], //28
            ['name'=>'Santiago','capital'=>'Santiago de los Caballeros','country_id'=>23],       //29
            ['name'=>'Santiago Rodríguez','capital'=>'Sabaneta','country_id'=>23],               //30
            ['name'=>'Santo Domingo','capital'=>'Santo Domingo Este','country_id'=>23],          //31
            ['name'=>'Valverde','capital'=>'Mao','country_id'=>23],                              //32
        ]);
    }
}
