<?php

namespace Database\Seeders\catalogos;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatPersonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // semilla prefijos
        $datosPrefijos = [
            [
                'prefijo' => 'Dr.',
                'descripcion' => 'Doctor',
                'estatus' => 1,
            ],
            [
                'prefijo' => 'Dra.',
                'descripcion' => 'Doctora',
                'estatus' => 1,
            ],
            [
                'prefijo' => 'Mtro.',
                'descripcion' => 'Maestro',
                'estatus' => 1,
            ],
            [
                'prefijo' => 'Mtra.',
                'descripcion' => 'Maestra',
                'estatus' => 1,
            ],
            [
                'prefijo' => 'Lic.',
                'descripcion' => 'Licenciado',
                'estatus' => 1,
            ],
            [
                'prefijo' => 'Sr.',
                'descripcion' => 'Señor',
                'estatus' => 1,
            ],
            [
                'prefijo' => 'Sra.',
                'descripcion' => 'Señora',
                'estatus' => 1,
            ],
        ];
        DB::table('cat_prefijos')->insert($datosPrefijos);

        // semilla especialidades
        $datosEspecialidad = [
            [
                'especialidad' => "Médico Especialista",
                'descripcion' => "Médico Especialista",
                'estatus' => 1
            ],
            [
                'especialidad' => "Médico Residente",
                'descripcion' => "Médico Residente",
                'estatus' => 1
            ],
            [
                'especialidad' => "Otros profesionales de la salud",
                'descripcion' => "Médico Residente",
                'estatus' => 1
            ],
        ];
        DB::table('cat_especialidades')->insert($datosEspecialidad);

        // semilla genero
        $dataGenero = [
            ['genero' => 'Masculino', 'descripcion' => 'Hombre', 'estatus' => 1],
            ['genero' => 'Femenino', 'descripcion' => 'Mujer', 'estatus' => 1],
            // ['genero' => 'Prefiero no decirlo', 'descripcion' => 'Hombre', 'estatus' => 1],
        ];
        DB::table('cat_generos')->insert($dataGenero);

        // semilla estados
        $dataEstados = [
            [
                'estado' => 'Aguascalientes',
                'abreviacion' => 'Ags.',
                'descripcion' => 'Aguascalientes clave 1',
                'estatus' => 1,
            ],
            [
                'estado' => 'Baja California',
                'abreviacion' => 'BC',
                'descripcion' => 'Baja California clave 2',
                'estatus' => 1,
            ],
            [
                'estado' => 'Baja California Sur',
                'abreviacion' => 'BCS',
                'descripcion' => 'Baja California Sur clave 3',
                'estatus' => 1,
            ],
            [
                'estado' => 'Campeche',
                'abreviacion' => 'Camp.',
                'descripcion' => 'Campeche clave 4',
                'estatus' => 1,
            ],
            [
                'estado' => 'Coahuila',
                'abreviacion' => 'Coah.',
                'descripcion' => 'Coahuila clave 5',
                'estatus' => 1,
            ],
            [
                'estado' => 'Colima',
                'abreviacion' => 'Col.',
                'descripcion' => 'Colima clave 6',
                'estatus' => 1,
            ],
            [
                'estado' => 'Chiapas',
                'abreviacion' => 'Chis.',
                'descripcion' => 'Chiapas clave 7',
                'estatus' => 1,
            ],
            [
                'estado' => 'Chihuahua',
                'abreviacion' => 'Chih.',
                'descripcion' => 'Chihuahua clave 8',
                'estatus' => 1,
            ],
            [
                'estado' => 'Ciudad de México',
                'abreviacion' => 'CDMX',
                'descripcion' => 'Ciudad de México clave 9',
                'estatus' => 1,
            ],
            [
                'estado' => 'Durango',
                'abreviacion' => 'Dgo.',
                'descripcion' => 'Durango clave 10',
                'estatus' => 1,
            ],
            [
                'estado' => 'Guanajuato',
                'abreviacion' => 'Gto.',
                'descripcion' => 'Guanajuato clave 11',
                'estatus' => 1,
            ],
            [
                'estado' => 'Guerrero',
                'abreviacion' => 'Gro.',
                'descripcion' => 'Gerrero clave 12',
                'estatus' => 1,
            ],
            [
                'estado' => 'Hidalgo',
                'abreviacion' => 'Hgo.',
                'descripcion' => 'Hidalgo clave 13',
                'estatus' => 1,
            ],
            [
                'estado' => 'Jalisco',
                'abreviacion' => 'Jal.',
                'descripcion' => 'Jalisco clave 14',
                'estatus' => 1,
            ],
            [
                'estado' => 'México',
                'abreviacion' => 'Mex',
                'descripcion' => 'México clave 15',
                'estatus' => 1,
            ],
            [
                'estado' => 'Michoacán',
                'abreviacion' => 'Mich.',
                'descripcion' => 'Michoacan clave 16',
                'estatus' => 1,
            ],
            [
                'estado' => 'Morelos',
                'abreviacion' => 'Mor.',
                'descripcion' => 'Morelos clave 17',
                'estatus' => 1,
            ],
            [
                'estado' => 'Nayarit',
                'abreviacion' => 'Nay.',
                'descripcion' => 'Nayarit clave 18',
                'estatus' => 1,
            ],
            [
                'estado' => 'Nuevo León',
                'abreviacion' => 'NL',
                'descripcion' => 'Nuevo León clave 19',
                'estatus' => 1,
            ],
            [
                'estado' => 'Oaxaca',
                'abreviacion' => 'Oax.',
                'descripcion' => 'Oaxaca clave 20',
                'estatus' => 1,
            ],
            [
                'estado' => 'Puebla',
                'abreviacion' => 'Pue.',
                'descripcion' => 'Puebla clave 21',
                'estatus' => 1,
            ],
            [
                'estado' => 'Queretaro',
                'abreviacion' => 'Qro.',
                'descripcion' => 'Queretaro clave 22',
                'estatus' => 1,
            ],
            [
                'estado' => 'Quintana Roo',
                'abreviacion' => 'QR',
                'descripcion' => 'Quintana Roo clave 23',
                'estatus' => 1,
            ],
            [
                'estado' => 'San Luis Potosí',
                'abreviacion' => 'SLP',
                'descripcion' => 'San Luis Potosí clave 24',
                'estatus' => 1,
            ],
            [
                'estado' => 'Sinaloa',
                'abreviacion' => 'Sin.',
                'descripcion' => 'Sinaloa clave 25',
                'estatus' => 1,
            ],
            [
                'estado' => 'Sonora',
                'abreviacion' => 'Son.',
                'descripcion' => 'Sonora clave 26',
                'estatus' => 1,
            ],
            [
                'estado' => 'Tabasco',
                'abreviacion' => 'Tab.',
                'descripcion' => 'Tabasco clave 27',
                'estatus' => 1,
            ],
            [
                'estado' => 'Tamaulipas',
                'abreviacion' => 'Tamps.',
                'descripcion' => 'Tamaulipas clave 28',
                'estatus' => 1,
            ],
            [
                'estado' => 'Tlaxcala',
                'abreviacion' => 'Tlax.',
                'descripcion' => 'Tlaxcala clave 29',
                'estatus' => 1,
            ],
            [
                'estado' => 'Veracruz',
                'abreviacion' => 'Ver.',
                'descripcion' => 'Veracruz clave 30',
                'estatus' => 1,
            ],
            [
                'estado' => 'Yucatán',
                'abreviacion' => 'Yuc.',
                'descripcion' => 'Yucatán clave 31',
                'estatus' => 1,
            ],
            [
                'estado' => 'Zacatecas',
                'abreviacion' => 'Zac.',
                'descripcion' => 'Zacatecas clave 32',
                'estatus' => 1,
            ]
        ];
        DB::table('cat_estados')->insert($dataEstados);

        // semilla paises
        $datosPaises = [
            ['pais' => 'México', 'descripcion' => 'México', 'codigo' => '+52', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Canadá', 'descripcion' => 'Canadá', 'codigo' => '+1', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Estados Unidos de América', 'descripcion' => 'Estados Unidos de América', 'codigo' => '+1', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Islas Vírgenes de los Estados Unidos', 'descripcion' => 'Islas Vírgenes de los Estados Unidos', 'codigo' => '+1-340', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Islas Marianas del Norte', 'descripcion' => 'Islas Marianas del Norte', 'codigo' => '+1-670', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Guam', 'descripcion' => 'Guam', 'codigo' => '+1-671', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Samoa Americana', 'descripcion' => 'Samoa Americana', 'codigo' => '+1-684', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Puerto Rico', 'descripcion' => 'Puerto Rico', 'codigo' => '+1-787 | +1-939', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Islas Bermudas', 'descripcion' => 'Islas Bermudas', 'codigo' => '+1-441', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Groenlandia', 'descripcion' => 'Groenlandia', 'codigo' => '+299', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'San Pedro y Miquelón', 'descripcion' => 'San Pedro y Miquelón', 'codigo' => '+508', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Bahamas', 'descripcion' => 'Bahamas', 'codigo' => '+1-242', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Barbados', 'descripcion' => 'Barbados', 'codigo' => '+1-246', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Anguila', 'descripcion' => 'Anguila', 'codigo' => '+1-264', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Antigua y Barbuda', 'descripcion' => 'Antigua y Barbuda', 'codigo' => '+1-268', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Islas Vírgenes Británicas', 'descripcion' => 'Islas Vírgenes Británicas', 'codigo' => '+1-284', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Islas Caimán', 'descripcion' => 'Islas Caimán', 'codigo' => '+1-345', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Granada', 'descripcion' => 'Granada', 'codigo' => '+1-473', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Islas Turcas y Caicos', 'descripcion' => 'Islas Turcas y Caicos', 'codigo' => '+1-649', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Montserrat', 'descripcion' => 'Montserrat', 'codigo' => '+1-664', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'San Martín (Caribe)', 'descripcion' => 'San Martín (Caribe)', 'codigo' => '+1-721', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Santa Lucía', 'descripcion' => 'Santa Lucía', 'codigo' => '+1-758', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'República Dominicana', 'descripcion' => 'República Dominicana', 'codigo' => '+1-809 | +1-829 | +1-849', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Dominica', 'descripcion' => 'Dominica', 'codigo' => '+1-767', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'San Vicente y las Granadinas', 'descripcion' => 'San Vicente y las Granadinas', 'codigo' => '+1-784', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Trinidad y Tobago', 'descripcion' => 'Trinidad y Tobago', 'codigo' => '+1-868', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'San Cristóbal y Nieves', 'descripcion' => 'San Cristóbal y Nieves', 'codigo' => '+1-869', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Jamaica', 'descripcion' => 'Jamaica', 'codigo' => '+1-876 | +1-658', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Aruba', 'descripcion' => 'Aruba', 'codigo' => '+297', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Haití', 'descripcion' => 'Haití', 'codigo' => '+509', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Cuba', 'descripcion' => 'Cuba', 'codigo' => '+53', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Guadalupe', 'descripcion' => 'Guadalupe', 'codigo' => '+590', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'San Martín (Francia)', 'descripcion' => 'San Martín (Francia)', 'codigo' => '+590', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'San Bartolomé', 'descripcion' => 'San Bartolomé', 'codigo' => '+590', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Martinica', 'descripcion' => 'Martinica', 'codigo' => '+596', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Curazao', 'descripcion' => 'Curazao', 'codigo' => '+599', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Bonaire', 'descripcion' => 'Bonaire', 'codigo' => '+599', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'San Eustaquio', 'descripcion' => 'San Eustaquio', 'codigo' => '+599', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Saba', 'descripcion' => 'Saba', 'codigo' => '+599', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Belice', 'descripcion' => 'Belice', 'codigo' => '+501', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Guatemala', 'descripcion' => 'Guatemala', 'codigo' => '+502', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'El Salvador', 'descripcion' => 'El Salvador', 'codigo' => '+504', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Nicaragua', 'descripcion' => 'Nicaragua', 'codigo' => '+505', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Costa Rica', 'descripcion' => 'Costa Rica', 'codigo' => '+506', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Panamá', 'descripcion' => 'Panamá', 'codigo' => '+507', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Islas Malvinas', 'descripcion' => 'Islas Malvinas', 'codigo' => '+500', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Islas Georgias del Sur y Sandwich del Sur', 'descripcion' => 'Islas Georgias del Sur y Sandwich del Sur', 'codigo' => '+500', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Perú', 'descripcion' => 'Perú', 'codigo' => '+51', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Argentina', 'descripcion' => 'Argentina', 'codigo' => '+54', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Brasil', 'descripcion' => 'Brasil', 'codigo' => '+55', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Chile', 'descripcion' => 'Chile', 'codigo' => '+56', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Colombia', 'descripcion' => 'Colombia', 'codigo' => '+57', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Venezuela', 'descripcion' => 'Venezuela', 'codigo' => '+58', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Bolivia', 'descripcion' => 'Bolivia', 'codigo' => '+591', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Guyana', 'descripcion' => 'Guyana', 'codigo' => '+592', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Ecuador', 'descripcion' => 'Ecuador', 'codigo' => '+593', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Guayana Francesa', 'descripcion' => 'Guayana Francesa', 'codigo' => '+594', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Paraguay', 'descripcion' => 'Paraguay', 'codigo' => '+595', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Surinam', 'descripcion' => 'Surinam', 'codigo' => '+597', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Uruguay', 'descripcion' => 'Uruguay', 'codigo' => '+598', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Afganistán', 'descripcion' => 'Afganistán', 'codigo' => '+93', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Albania', 'descripcion' => 'Albania', 'codigo' => '+355', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Alemania', 'descripcion' => 'Alemania', 'codigo' => '+49', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Andorra', 'descripcion' => 'Andorra', 'codigo' => '+376', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Angola', 'descripcion' => 'Angola', 'codigo' => '+244', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Antártida', 'descripcion' => 'Antártida', 'codigo' => '+672', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Arabia Saudita', 'descripcion' => 'Arabia Saudita', 'codigo' => '+966', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Argelia', 'descripcion' => 'Argelia', 'codigo' => '+213', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Armenia', 'descripcion' => 'Armenia', 'codigo' => '+374', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Australia', 'descripcion' => 'Australia', 'codigo' => '+61', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Austria', 'descripcion' => 'Austria', 'codigo' => '+43', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Azerbaiyán', 'descripcion' => 'Azerbaiyán', 'codigo' => '+994', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Bélgica', 'descripcion' => 'Bélgica', 'codigo' => '+32', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Bahrein', 'descripcion' => 'Bahrein', 'codigo' => '+973', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Bangladesh', 'descripcion' => 'Bangladesh', 'codigo' => '+880', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Benín', 'descripcion' => 'Benín', 'codigo' => '+229', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Bhután', 'descripcion' => 'Bhután', 'codigo' => 'Bhután', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Bielorrusia', 'descripcion' => 'Bielorrusia', 'codigo' => '+375', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Birmania', 'descripcion' => 'Birmania', 'codigo' => '+95', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Bosnia y Herzegovina', 'descripcion' => 'Bosnia y Herzegovina', 'codigo' => '+387', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Botsuana', 'descripcion' => 'Botsuana', 'codigo' => '+267', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Brunéi', 'descripcion' => 'Brunéi', 'codigo' => '+673', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Bulgaria', 'descripcion' => 'Bulgaria', 'codigo' => '+359', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Burkina Faso', 'descripcion' => 'Burkina Faso', 'codigo' => '+226', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Burundi', 'descripcion' => 'Burundi', 'codigo' => '+257', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Cabo Verde', 'descripcion' => 'Cabo Verde', 'codigo' => '+238', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Camboya', 'descripcion' => 'Camboya', 'codigo' => '+855', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Camerún', 'descripcion' => 'Camerún', 'codigo' => '+237', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Chad', 'descripcion' => 'Chad', 'codigo' => '+235', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'China', 'descripcion' => 'China', 'codigo' => '+86', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Chipre', 'descripcion' => 'Chipre', 'codigo' => '+357', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Ciudad del Vaticano', 'descripcion' => 'Ciudad del Vaticano', 'codigo' => '+379', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Comoras', 'descripcion' => 'Comoras', 'codigo' => '+269', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'República del Congo', 'descripcion' => 'República del Congo', 'codigo' => '+242', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'República Democrática del Congo', 'descripcion' => 'República Democrática del Congo', 'codigo' => '+243', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Corea del Norte', 'descripcion' => 'Corea del Norte', 'codigo' => '+850', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Corea del Sur', 'descripcion' => 'Corea del Sur', 'codigo' => '+82', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Costa de Marfil', 'descripcion' => 'Costa de Marfil', 'codigo' => '+225', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Croacia', 'descripcion' => 'Croacia', 'codigo' => '+385', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Dinamarca', 'descripcion' => 'Dinamarca', 'codigo' => '+45', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Egipto', 'descripcion' => 'Egipto', 'codigo' => '+20', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Emiratos Árabes Unidos', 'descripcion' => 'Emiratos Árabes Unidos', 'codigo' => '+971', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Eritrea', 'descripcion' => 'Eritrea', 'codigo' => '+291', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Eslovaquia', 'descripcion' => 'Eslovaquia', 'codigo' => '+421', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Eslovenia', 'descripcion' => 'Eslovenia', 'codigo' => '+386', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'España', 'descripcion' => 'España', 'codigo' => '+34', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Estonia', 'descripcion' => 'Estonia', 'codigo' => '+372', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Etiopía', 'descripcion' => 'Etiopía', 'codigo' => '+251', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Filipinas', 'descripcion' => 'Filipinas', 'codigo' => '+63', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Finlandia', 'descripcion' => 'Finlandia', 'codigo' => '+358', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Fiyi', 'descripcion' => 'Fiyi', 'codigo' => '+679', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Francia', 'descripcion' => 'Francia', 'codigo' => '+33', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Gabón', 'descripcion' => 'Gabón', 'codigo' => '+241', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Gambia', 'descripcion' => 'Gambia', 'codigo' => '+220', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Georgia', 'descripcion' => 'Georgia', 'codigo' => '+995', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Ghana', 'descripcion' => 'Ghana', 'codigo' => '+233', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Gibraltar', 'descripcion' => 'Gibraltar', 'codigo' => '+350', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Grecia', 'descripcion' => 'Grecia', 'codigo' => '+30', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Guernsey', 'descripcion' => 'Guernsey', 'codigo' => '+44', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Guinea', 'descripcion' => 'Guinea', 'codigo' => '+224', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Guinea Ecuatorial', 'descripcion' => 'Guinea Ecuatorial', 'codigo' => '+240', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Guinea-Bissau', 'descripcion' => 'Guinea-Bissau', 'codigo' => '+245', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Honduras', 'descripcion' => 'Honduras', 'codigo' => '+504', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Hong kong', 'descripcion' => 'Hong kong', 'codigo' => '+852', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Hungría', 'descripcion' => 'Hungría', 'codigo' => '+36', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'India', 'descripcion' => 'India', 'codigo' => '+91', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Indonesia', 'descripcion' => 'Indonesia', 'codigo' => '+62', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Irán', 'descripcion' => 'Irán', 'codigo' => '+98', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Irak', 'descripcion' => 'Irak', 'codigo' => '+964', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Irlanda', 'descripcion' => 'Irlanda', 'codigo' => '+353', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Isla Bouvet', 'descripcion' => 'Isla Bouvet', 'codigo' => '+47', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Isla de Man', 'descripcion' => 'Isla de Man', 'codigo' => '+44', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Isla de Navidad', 'descripcion' => 'Isla de Navidad', 'codigo' => '+61', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Isla Norfolk', 'descripcion' => 'Isla Norfolk', 'codigo' => '+672', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Islandia', 'descripcion' => 'Islandia', 'codigo' => '+354', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Islas Cocos (Keeling)', 'descripcion' => 'Islas Cocos (Keeling)', 'codigo' => '+61', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Islas Cook', 'descripcion' => 'Islas Cook', 'codigo' => '+682', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Islas de Åland', 'descripcion' => 'Islas de Åland', 'codigo' => '+358 18', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Islas Feroe', 'descripcion' => 'Islas Feroe', 'codigo' => '+298', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Islas Heard y McDonald', 'descripcion' => 'Islas Heard y McDonald', 'codigo' => '+0', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Islas Maldivas', 'descripcion' => 'Islas Maldivas', 'codigo' => '+960', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Islas Marshall', 'descripcion' => 'Islas Marshall', 'codigo' => '+692', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Islas Pitcairn', 'descripcion' => 'Islas Pitcairn', 'codigo' => '+64', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Islas Salomón', 'descripcion' => 'Islas Salomón', 'codigo' => '+677', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Islas Ultramarinas Menores de Estados Unidos', 'descripcion' => 'Islas Ultramarinas Menores de Estados Unidos', 'codigo' => 'Sin codigo', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Israel', 'descripcion' => 'Israel', 'codigo' => '+972', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Italia', 'descripcion' => 'Italia', 'codigo' => '+39', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Japón', 'descripcion' => 'Japón', 'codigo' => '+81', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Jersey', 'descripcion' => 'Jersey', 'codigo' => '+441534', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Jordania', 'descripcion' => 'Jordania', 'codigo' => '+962', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Kazajistán', 'descripcion' => 'Kazajistán', 'codigo' => '+7', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Kenia', 'descripcion' => 'Kenia', 'codigo' => '+254', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Kirguistán', 'descripcion' => 'Kirguistán', 'codigo' => '+996', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Kiribati', 'descripcion' => 'Kiribati', 'codigo' => '+686', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Kuwait', 'descripcion' => 'Kuwait', 'codigo' => '+965', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Líbano', 'descripcion' => 'Líbano', 'codigo' => '+961', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Laos', 'descripcion' => 'Laos', 'codigo' => '+856', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Lesoto', 'descripcion' => 'Lesoto', 'codigo' => '+266', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Letonia', 'descripcion' => 'Letonia', 'codigo' => '+371', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Liberia', 'descripcion' => 'Liberia', 'codigo' => '+231', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Libia', 'descripcion' => 'Libia', 'codigo' => '+218', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Liechtenstein', 'descripcion' => 'Liechtenstein', 'codigo' => '+423', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Lituania', 'descripcion' => 'Lituania', 'codigo' => '+370', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Luxemburgo', 'descripcion' => 'Luxemburgo', 'codigo' => '+352', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Mónaco', 'descripcion' => 'Mónaco', 'codigo' => '+377', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Macao', 'descripcion' => 'Macao', 'codigo' => '+853', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Macedônia', 'descripcion' => 'Macedônia', 'codigo' => '+389', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Madagascar', 'descripcion' => 'Madagascar', 'codigo' => '+261', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Malasia', 'descripcion' => 'Malasia', 'codigo' => '+60', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Malawi', 'descripcion' => 'Malawi', 'codigo' => '+265', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Mali', 'descripcion' => 'Mali', 'codigo' => '+223', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Malta', 'descripcion' => 'Malta', 'codigo' => '+356', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Marruecos', 'descripcion' => 'Marruecos', 'codigo' => '+212', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Mauricio', 'descripcion' => 'Mauricio', 'codigo' => '+230', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Mauritania', 'descripcion' => 'Mauritania', 'codigo' => '+222', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Mayotte', 'descripcion' => 'Mayotte', 'codigo' => '+262', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Micronesia', 'descripcion' => 'Micronesia', 'codigo' => '+691', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Moldavia', 'descripcion' => 'Moldavia', 'codigo' => '+373', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Mongolia', 'descripcion' => 'Mongolia', 'codigo' => '+976', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Montenegro', 'descripcion' => 'Montenegro', 'codigo' => '+382', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Mozambique', 'descripcion' => 'Mozambique', 'codigo' => '+258', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Namibia', 'descripcion' => 'Namibia', 'codigo' => '+264', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Nauru', 'descripcion' => 'Nauru', 'codigo' => '+674', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Nepal', 'descripcion' => 'Nepal', 'codigo' => '+977', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Niger', 'descripcion' => 'Niger', 'codigo' => '+227', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Nigeria', 'descripcion' => 'Nigeria', 'codigo' => '+234', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Niue', 'descripcion' => 'Niue', 'codigo' => '+683', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Noruega', 'descripcion' => 'Noruega', 'codigo' => '+47', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Nueva Caledonia', 'descripcion' => 'Nueva Caledonia', 'codigo' => '+687', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Nueva Zelanda', 'descripcion' => 'Nueva Zelanda', 'codigo' => '+64', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Omán', 'descripcion' => 'Omán', 'codigo' => '+968', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Países Bajos', 'descripcion' => 'Países Bajos', 'codigo' => '+31', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Pakistán', 'descripcion' => 'Pakistán', 'codigo' => '+92', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Palau', 'descripcion' => 'Palau', 'codigo' => '+680', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Palestina', 'descripcion' => 'Palestina', 'codigo' => '+970', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Papúa Nueva Guinea', 'descripcion' => 'Papúa Nueva Guinea', 'codigo' => '+675', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Polinesia Francesa', 'descripcion' => 'Polinesia Francesa', 'codigo' => '+689', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Polonia', 'descripcion' => 'Polonia', 'codigo' => '+48', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Portugal', 'descripcion' => 'Portugal', 'codigo' => '+351', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Qatar', 'descripcion' => 'Qatar', 'codigo' => '+974', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Reino Unido', 'descripcion' => 'Reino Unido', 'codigo' => '+44', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'República Centroafricana', 'descripcion' => 'República Centroafricana', 'codigo' => '+236', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'República Checa', 'descripcion' => 'República Checa', 'codigo' => '+420', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'República de Sudán del Sur', 'descripcion' => 'República de Sudán del Sur', 'codigo' => '+211', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Reunión', 'descripcion' => 'Reunión', 'codigo' => '+262', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Ruanda', 'descripcion' => 'Ruanda', 'codigo' => '+250', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Rumania', 'descripcion' => 'Rumania', 'codigo' => '+40', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Rusia', 'descripcion' => 'Rusia', 'codigo' => '+7', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Sahara Occidental', 'descripcion' => 'Sahara Occidental', 'codigo' => '+212', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Samoa', 'descripcion' => 'Samoa', 'codigo' => '+685', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'San Marino', 'descripcion' => 'San Marino', 'codigo' => '+378', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Santa Elena', 'descripcion' => 'Santa Elena', 'codigo' => '+290', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Santo Tomé y Príncipe', 'descripcion' => 'Santo Tomé y Príncipe', 'codigo' => '+239', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Senegal', 'descripcion' => 'Senegal', 'codigo' => '+221', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Serbia', 'descripcion' => 'Serbia', 'codigo' => '+381', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Seychelles', 'descripcion' => 'Seychelles', 'codigo' => '+248', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Sierra Leona', 'descripcion' => 'Sierra Leona', 'codigo' => '+232', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Singapur', 'descripcion' => 'Singapur', 'codigo' => '+65', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Sint Maarten', 'descripcion' => 'Sint Maarten', 'codigo' => '+1721', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Siria', 'descripcion' => 'Siria', 'codigo' => '+963', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Somalia', 'descripcion' => 'Somalia', 'codigo' => '+252', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Sri lanka', 'descripcion' => 'Sri lanka', 'codigo' => '+94', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Sudáfrica', 'descripcion' => 'Sudáfrica', 'codigo' => '+27', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Sudán', 'descripcion' => 'Sudán', 'codigo' => '+249', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Suecia', 'descripcion' => 'Suecia', 'codigo' => '+46', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Suiza', 'descripcion' => 'Suiza', 'codigo' => '+41', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Svalbard y Jan Mayen', 'descripcion' => 'Svalbard y Jan Mayen', 'codigo' => '+47', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Swazilandia', 'descripcion' => 'Swazilandia', 'codigo' => '+268', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Tayikistán', 'descripcion' => 'Tayikistán', 'codigo' => '+992', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Tailandia', 'descripcion' => 'Tailandia', 'codigo' => '+66', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Taiwán', 'descripcion' => 'Taiwán', 'codigo' => '+886', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Tanzania', 'descripcion' => 'Tanzania', 'codigo' => '+255', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Territorio Británico del Océano Índico', 'descripcion' => 'Territorio Británico del Océano Índico', 'codigo' => '+246', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Territorios Australes y Antárticas Franceses', 'descripcion' => 'Territorios Australes y Antárticas Franceses', 'codigo' => '+33', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Timor Oriental', 'descripcion' => 'Timor Oriental', 'codigo' => '+670', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Togo', 'descripcion' => 'Togo', 'codigo' => '+228', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Tokelau', 'descripcion' => 'Tokelau', 'codigo' => '+690', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Tonga', 'descripcion' => 'Tonga', 'codigo' => '+676', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Túnez', 'descripcion' => 'Túnez', 'codigo' => '+216', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Turkmenistán', 'descripcion' => 'Turkmenistán', 'codigo' => '+993', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Turquía', 'descripcion' => 'Turquía', 'codigo' => '+90', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Tuvalu', 'descripcion' => 'Tuvalu', 'codigo' => '+688', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Ucrania', 'descripcion' => 'Ucrania', 'codigo' => '+380', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Uganda', 'descripcion' => 'Uganda', 'codigo' => '+256', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Uzbekistán', 'descripcion' => 'Uzbekistán', 'codigo' => '+998', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Vanuatu', 'descripcion' => 'Vanuatu', 'codigo' => '+678', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Vietnam', 'descripcion' => 'Vietnam', 'codigo' => '+84', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Wallis y Futuna', 'descripcion' => 'Wallis y Futuna', 'codigo' => '+681', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Yemen', 'descripcion' => 'Yemen', 'codigo' => '+967', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Yibuti', 'descripcion' => 'Yibuti', 'codigo' => '+253', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:06', 'updated_at' => '2024-06-04 13:06:06'],
            ['pais' => 'Zambia', 'descripcion' => 'Zambia', 'codigo' => '+260', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:07', 'updated_at' => '2024-06-04 13:06:07'],
            ['pais' => 'Zimbabue', 'descripcion' => 'Zimbabue', 'codigo' => '+263', 'estatus' => '1', 'created_at' => '2024-06-04 13:06:07', 'updated_at' => '2024-06-04 13:06:07'],
        ];
        DB::table('cat_pais')->insert($datosPaises);

        // semilla exhibiciones
        $datosexhibiciones = [
            ['exhibicion' => '1 Exhibición', 'descripcion' => 'Pago en una exhibición', 'estatus' => 1],
            ['exhibicion' => '3 Exhibiciones', 'descripcion' => 'Pago en 3 exhibiciones', 'estatus' => 1],
        ];
        DB::table('cat_exhibiciones')->insert($datosexhibiciones);

        // semilla formas de pagos
        $datosForma = [
            [
                'forma' => 'Transferencia o depósito',
                'descripcion' => 'Pago por algun medio de banco',
                'estatus' => 1,
            ],
            [
                'forma' => 'Paypal',
                'descripcion' => 'Pago con pasarela de pago paypal',
                'estatus' => 1,
            ],
            [
                'forma' => 'Tarjeta',
                'descripcion' => 'Pago con tarjeta de credito o debito',
                'estatus' => 2,
            ]
        ];
        DB::table('cat_forma_pagos')->insert($datosForma);

        // semilla metodos de pagos
        $datosMetodo = [
            [
                'metodo' => 'Pago en linea',
                'descripcion' => 'Pago realizado en linea',
                'estatus' => 1,
            ],
            [
                'metodo' => 'Pago en sitio',
                'descripcion' => 'Pago realizado en sitio',
                'estatus' => 1,
            ]
        ];
        DB::table('cat_metodo_pagos')->insert($datosMetodo);

        // semilla excibiciones
        $datosExcibiciones = [
            ['excibicion' => '1 Excibición', 'descripcion' => 'Pago en una excibición', 'estatus' => 1],
            ['excibicion' => '3 Excibiciones', 'descripcion' => 'Pago en 3 excibiciones', 'estatus' => 1],
        ];
        DB::table('cat_excibiciones')->insert($datosExcibiciones);

        // semilla tipos de ordenes
        $datosTipoOrden = [
            ['tipo' => 'Congreso', 'descripcion' => 'Para ordenes de Congreso a pagar', 'estatus' => 1],
            ['tipo' => 'Diplomado', 'descripcion' => 'Para ordenes de Diplomado a pagar', 'estatus' => 1],
            ['tipo' => 'Taller', 'descripcion' => 'Para ordenes de Taller a pagar', 'estatus' => 1],
            ['tipo' => 'Afiliación', 'descripcion' => 'Para ordenes de Afiliación a pagar', 'estatus' => 1],
            ['tipo' => 'Anualidad', 'descripcion' => 'Para ordenes de Anualidad a pagar', 'estatus' => 1],
            ['tipo' => 'Paquete', 'descripcion' => 'Para ordenes de Paquete a pagar', 'estatus' => 1],
            ['tipo' => 'Descuento', 'descripcion' => 'Para ordenes de Descuento a pagar', 'estatus' => 1],
            ['tipo' => 'Promoción', 'descripcion' => 'Para ordenes de Promoción a pagar', 'estatus' => 1],
        ];
        DB::table('cat_tipo_ordenes')->insert($datosTipoOrden);

        // semilla ordenes
        $datosOrdenes = [
            ['orden' => 'Diplomado 2025, 1 sola exhibición', 'descripcion' => 'Pago del octavo diplomado en una sola exhibición', 'precio_mx' => 80000, 'precio_dl' => 0, 'cat_tipo_orden_id' => 2, 'anio' => 2025, 'afiliado' => 0, 'categoria' => 1, 'estatus' => 1, 'cat_exhibiciones_id' => 1],
            ['orden' => 'Diplomado 2025, 3 exhibiciones', 'descripcion' => 'Pago del octavo diplomado en tres exhibiciones', 'precio_mx' => 80000, 'precio_dl' => 0, 'cat_tipo_orden_id' => 2, 'anio' => 2025, 'afiliado' => 0, 'categoria' => 1, 'estatus' => 1, 'cat_exhibiciones_id' => 2],
        ];
        DB::table('cat_ordenes')->insert($datosOrdenes);
    }
}
