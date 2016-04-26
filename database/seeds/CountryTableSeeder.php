<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('country')->insert([
            ['name'=>'San Martín','country_code'=>'MF'],
            ['name'=>'Argentina','country_code'=>'AR'],
            ['name'=>'Aruba','country_code'=>'AW'],
            ['name'=>'Australia','country_code'=>'AU'],
            ['name'=>'Bahamas','country_code'=>'BS'],
            ['name'=>'Barbados','country_code'=>'BB'],
            ['name'=>'islas Bermudas','country_code'=>'BM'],
            ['name'=>'Bolivia','country_code'=>'BO'],
            ['name'=>'Brasil','country_code'=>'BR'],
            ['name'=>'Islas Vírgenes Británicas','country_code'=>'VG'],
            ['name'=>'Canadá','country_code'=>'CA'],
            ['name'=>'Cabo Verde','country_code'=>'CV'],
            ['name'=>'Islas Caimán','country_code'=>'KY'],
            ['name'=>'Chile','country_code'=>'CL'],
            ['name'=>'China','country_code'=>'CN'],
            ['name'=>'Islas Cocos','country_code'=>'CC'],
            ['name'=>'Colombia','country_code'=>'CO'],
            ['name'=>'Costa Rica','country_code'=>'CR'],
            ['name'=>'Costa de Marfil','country_code'=>'CI'],
            ['name'=>'Cuba','country_code'=>'CU'],
            ['name'=>'Curaçao','country_code'=>'CW'],
            ['name'=>'dominica','country_code'=>'DM'],
            ['name'=>'República Dominicana','country_code'=>'DO'],
            ['name'=>'Ecuador','country_code'=>'EC'],
            ['name'=>'El Salvador','country_code'=>'SV'],
            ['name'=>'Islas Malvinas','country_code'=>'FK'],
            ['name'=>'Francia','country_code'=>'FR'],
            ['name'=>'Alemania','country_code'=>'DE'],
            ['name'=>'Grecia','country_code'=>'GR'],
            ['name'=>'Granada','country_code'=>'GD'],
            ['name'=>'Guatemala','country_code'=>'GT'],
            ['name'=>'Haití','country_code'=>'HT'],
            ['name'=>'Honduras','country_code'=>'HN'],
            ['name'=>'Italia','country_code'=>'IT'],
            ['name'=>'Jamaica','country_code'=>'JM'],
            ['name'=>'Japón','country_code'=>'JP'],
            ['name'=>'Malta','country_code'=>'MT'],
            ['name'=>'Méjico','country_code'=>'MX'],
            ['name'=>'Marruecos','country_code'=>'MA'],
            ['name'=>'Nicaragua','country_code'=>'NI'],
            ['name'=>'Noruega','country_code'=>'NO'],
            ['name'=>'Panamá','country_code'=>'PA'],
            ['name'=>'Paraguay','country_code'=>'PY'],
            ['name'=>'Perú','country_code'=>'PE'],
            ['name'=>'Portugal','country_code'=>'PT'],
            ['name'=>'Puerto Rico','country_code'=>'PR'],
            ['name'=>'Rusia','country_code'=>'RU'],
            ['name'=>'España','country_code'=>'ES'],
            ['name'=>'Suecia','country_code'=>'SE'],
            ['name'=>'Suiza','country_code'=>'CH'],
            ['name'=>'Taiwán','country_code'=>'TW'],
            ['name'=>'Turks y Caicos','country_code'=>'TC'],
            ['name'=>'Reino Unido','country_code'=>'GB'],
            ['name'=>'Estados Unidos','country_code'=>'US'],
            ['name'=>'Uruguay','country_code'=>'UY'],
            ['name'=>'Venezuela','country_code'=>'VE'],
            ['name'=>'Hong Kong','country_code'=>'HK']
        ]);
    }
}
