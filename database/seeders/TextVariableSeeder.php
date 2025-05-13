<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TextVariableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('text_variables')->insert([
            ['key' => 'main.hello', 'text_en' => 'Hello', 'text_es' => 'Hola', 'text_ru' => 'Привет'],
            ['key' => 'main.text-1', 'text_en' => 'Welcome to our website.', 'text_es' => 'Bienvenido a nuestro sitio web.', 'text_ru' => 'Добро пожаловать на наш сайт.'],
            ['key' => 'main.text-2', 'text_en' => 'We offer the best services.', 'text_es' => 'Ofrecemos los mejores servicios.', 'text_ru' => 'Мы предлагаем лучшие услуги.'],
            ['key' => 'main.title-reviews', 'text_en' => 'Reviews', 'text_es' => 'Reseñas', 'text_ru' => 'Отзывы'],
            ['key' => 'main.title-portfolio', 'text_en' => 'Portfolio', 'text_es' => 'Portafolio', 'text_ru' => 'Портфолио'],
            ['key' => 'main.show-portfolio', 'text_en' => 'Show Portfolio', 'text_es' => 'Mostrar Portafolio', 'text_ru' => 'Показать портфолио'],
            ['key' => 'main.title-price', 'text_en' => 'Price', 'text_es' => 'Precio', 'text_ru' => 'Цена'],
            ['key' => 'main.wf', 'text_en' => 'Wedding Full', 'text_es' => 'Boda Completa', 'text_ru' => 'Полная Свадьба'],
            ['key' => 'main.wf-desc', 'text_en' => 'Full wedding package description.', 'text_es' => 'Descripción del paquete de boda completa.', 'text_ru' => 'Описание полного свадебного пакета.'],
            ['key' => 'main.wm', 'text_en' => 'Wedding Mini', 'text_es' => 'Boda Mini', 'text_ru' => 'Мини Свадьба'],
            ['key' => 'main.wm-desc', 'text_en' => 'Mini wedding package description.', 'text_es' => 'Descripción del paquete de boda mini.', 'text_ru' => 'Описание мини свадебного пакета.'],
            ['key' => 'main.product', 'text_en' => 'Product description.', 'text_es' => 'Descripción del producto.', 'text_ru' => 'Описание продукта.'],
            ['key' => 'main.title-contact', 'text_en' => 'Contact', 'text_es' => 'Contacto', 'text_ru' => 'Контакт'],
            ['key' => 'main.contact-desc', 'text_en' => 'Contact description.', 'text_es' => 'Descripción del contacto.', 'text_ru' => 'Описание контакта.'],
            ['key' => 'main.form', 'text_en' => 'Form', 'text_es' => 'Formulario', 'text_ru' => 'Форма'],
            ['key' => 'main.form-name', 'text_en' => 'Name', 'text_es' => 'Nombre', 'text_ru' => 'Имя'],
            ['key' => 'main.form-phone', 'text_en' => 'Phone', 'text_es' => 'Teléfono', 'text_ru' => 'Телефон'],
            ['key' => 'main.form-social', 'text_en' => 'Social', 'text_es' => 'Social', 'text_ru' => 'Социальный'],
            ['key' => 'main.form-send', 'text_en' => 'Send', 'text_es' => 'Enviar', 'text_ru' => 'Отправить'],
            ['key' => 'main.price-wf', 'text_en' => '2500 €', 'text_es' => '2500 €', 'text_ru' => '2500 €'],
            ['key' => 'main.price-wm', 'text_en' => '1700 €', 'text_es' => '1700 €', 'text_ru' => '1700 €'],
        ]);
    }
}
