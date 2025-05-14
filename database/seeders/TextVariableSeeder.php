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
            ['key' => 'main.hello', 'text_en' => 'Hello! We are Alisa and Sam.', 'text_es' => '¡Hola! Somos Alisa y Sam - los videógrafos de las bodas en Barcelona', 'text_ru' => 'Привет! Мы - Алиса и Сэм.'],
            ['key' => 'main.text-1', 'text_en' => 'We shoot weddings and love stories. Kudria is a real surname. We are
            the leaders of KUDRYASTUDIO. It was not by chance that we came to
            our style. We are inspired by cinema, old Hollywood films, TV
            series, beautiful perfume advertisements. We love filming a
            production: working with light, with people. But we also love to
            observe emotions, atmosphere and try to emphasize all this with good
            musical accompaniment. Honesty and openness are very important to
            us, the desire to create something special that others don’t even
            know about. Our clients are passionate intellectuals with a
            developed sense of taste and style.', 'text_es' => 'Rodamos bodas e historias de amor. Kudria es un apellido real. Nosotros somos
            los líderes de KUDRYASTUDIO. No fue por casualidad que llegamos a
            nuestro estilo. Nos inspiramos en el cine, las viejas películas de Hollywood, la televisión
            series, hermosos anuncios de perfumes. Nos encanta filmar un
            producción: trabajar con la luz, con las personas. Pero también nos encanta
            observe las emociones, la atmósfera y trate de enfatizar todo esto con buena
            acompañamiento musical. La honestidad y la franqueza son muy importantes para
            nosotros, el deseo de crear algo especial que otros ni siquiera tienen
            saber sobre. Nuestros clientes son intelectuales apasionados con un
            desarrollado sentido del gusto y estilo.', 'text_ru' => 'Мы снимаем свадьбы и истории любви. Кудря - настоящая фамилия. Мы являемся
руководителями студии KUDRYASTUDIO. Мы пришли к
своему стилю не случайно. Нас вдохновляет кинематограф, старые голливудские фильмы,
сериалы, красивая реклама духов. Нам нравится снимать
            постановку: работать со светом, с людьми. Но мы также любим
наблюдать за эмоциями, атмосферой и стараемся подчеркнуть все это хорошим
            музыкальным сопровождением. Честность и открытость очень важны для
            нас, желание создать что-то особенное, чего другие даже не
            знаю об этом. Наши клиенты - страстные интеллектуалы с
развитым чувством вкуса и стиля.'],
            ['key' => 'main.text-2', 'text_en' => "We can say that we have no competitors. We do not look at the work
            of other specialists. We do not work at the client's direction. At
            every meeting, we look at our clients from a dramatic perspective,
            thinking about what to reflect in the film - a light touch, a gentle
            or ironic look, a ray of sunshine in the bride’s hair or a glass of
            champagne in her hand. Every little detail is important, this is how
            the atmosphere and mood of the wedding film are born.", 'text_es' => "Podemos decir que no tenemos competidores. No miramos el trabajo
            de otros especialistas. No trabajamos bajo la dirección del cliente. En
            en cada reunión, miramos a nuestros clientes desde una perspectiva dramática,
            pensando en qué reflejar en la película: un toque ligero, un toque suave
            o mirada irónica, un rayo de sol en el cabello de la novia o un vaso de
            champán en la mano. Cada pequeño detalle es importante, así es como
            nace la atmósfera y el estado de ánimo de la película de bodas.", 'text_ru' => "Мы можем сказать, что у нас нет конкурентов. Мы не смотрим на работу
других специалистов. Мы не работаем по указанию клиента. На
каждой встрече мы смотрим на наших клиентов с драматической точки зрения,
думая о том, что отразить в фильме - легкое прикосновение, нежный
            или ироничный взгляд, лучик солнца в волосах невесты или бокал
шампанского в ее руке. Важна каждая мелочь, именно так
рождается атмосфера и настроение свадебного фильма."],
            ['key' => 'main.title-reviews', 'text_en' => 'Reviews', 'text_es' => 'Reseñas', 'text_ru' => 'Отзывы'],
            ['key' => 'main.title-portfolio', 'text_en' => 'Portfolio', 'text_es' => 'Portafolio', 'text_ru' => 'Портфолио'],
            ['key' => 'main.show-portfolio', 'text_en' => 'Show Portfolio', 'text_es' => 'Mostrar Portafolio', 'text_ru' => 'Показать портфолио'],
            ['key' => 'main.title-price', 'text_en' => 'Price', 'text_es' => 'Precio', 'text_ru' => 'Цена'],
            ['key' => 'main.wf', 'text_en' => 'Wedding Full', 'text_es' => 'Boda Completa', 'text_ru' => 'Полная Свадьба'],
            ['key' => 'main.wf-desc', 'text_en' => "Video recording up to <span>12 hours</span> Work of
                <span>2 operators</span> <br />
                Video editing <span> (10-20 minutes) Teaser 1-2 minutes</span><br />
                <span>Author's color correction </span> and
                <span>Sound design</span> <br />
                Drone (depending on weather conditions and location capabilities)
                Production time up to <span>2-3 months</span> <br />
                Additional hour <span>200 €</span>", 'text_es' => "Grabación de video hasta <span>12 horas</span>Obra de
                <span>2 operadores</span> <br />
                Edición de video <span> (10-20 minutos) Teaser 1-2 minutos</span><br />
                <span>Corrección de color del autor</span> y
                <span>Diseño de sonido</span> <br />
                Dron (dependiendo de las condiciones climáticas y las capacidades de ubicación)
                Tiempo de producción hasta <span>2-3 meses</span> <br />
                Hora adicional <span>200 €</span>", 'text_ru' => "Видеозапись до<span>12 часов</span> Работает
                <span>2 оператора</span> <br />
                Видео редактируется <span> (10-20 минут) Тизер 1-2 минуты</span><br />
                <span>Авторская цветокоррекция</span> и
                <span>Звуковой дизайн</span> <br />
               Беспилотник (в зависимости от погодных условий и возможностей местоположения)
                Время изготовления до <span>2-3 месяцов </span> <br />
                Дополнительный час <span>200 €</span>"],
            ['key' => 'main.wm', 'text_en' => 'Wedding Mini', 'text_es' => 'Boda Mini', 'text_ru' => 'Мини Свадьба'],
            ['key' => 'main.wm-desc', 'text_en' => "Video recording up to <span>6 hours</span> Work of
                <span>2 operators</span> <br />
                Video editing <span> (5-10 minutes) Teaser 1-2 minutes</span><br />
                <span>Author's color correction </span> and
                <span>Sound design</span> <br />
                Drone (depending on weather conditions and location capabilities)
                Production time up to <span>2-3 months</span> <br />
                Additional hour <span>200 €</span>", 'text_es' => "Grabación de video hasta <span>6 horas</span>Obra de
                <span>2 operadores</span> <br />
                Edición de video <span> (5-10 minutos) Teaser 1-2 minutos</span><br />
                <span>Corrección de color del autor</span> y
                <span>Diseño de sonido</span> <br />
                Dron (dependiendo de las condiciones climáticas y las capacidades de ubicación)
                Tiempo de producción hasta <span>2-3 meses</span> <br />
                Hora adicional <span>200 €</span>", 'text_ru' => "Видеозапись до<span>6 часов</span> Работает
                <span>2 оператора</span> <br />
                Видео редактируется <span> (5-10 минут) Тизер 1-2 минуты</span><br />
                <span>Авторская цветокоррекция</span> и
                <span>Звуковой дизайн</span> <br />
               Беспилотник (в зависимости от погодных условий и возможностей местоположения)
                Время изготовления до <span>2-3 месяцов </span> <br />
                Дополнительный час <span>200 €</span>"],
            ['key' => 'main.product', 'text_en' => "<span>+ TEASER FOR INSTAGRAM - 200 €</span> <br />
                <span>+ ARCHIVE FILM - 500 €</span> <br />
                <span>+ ADDITIONAL OPERATOR 12 HOURS - 400 €</span> <br />
                <span>+ ADDITIONAL DRONE OPERATOR - 250 €</span> <br />
                <span>+ ACCELERATED EDITION</span> - editing of a wedding video or
                film within a month from the date of filming 30% of the total cost
                of the package.", 'text_es' => "<span>+ TEASER PARA INSTAGRAM - 200 €</span> <br />
                <span>+ PELÍCULA DE ARCHIVO - 500 €</span> <br />
                <span>+ OPERADOR ADICIONAL 12 HORAS - 400 €</span> <br />
                <span>+ OPERADOR ADICIONAL DE DRONES - 250 €</span> <br />
                <span>+ EDICIÓN ACELERADA</span> - edición de un vídeo de boda o
                película dentro de un mes a partir de la fecha de filmación 30% del costo total
                del paquete.", 'text_ru' => "<span>+ ТИЗЕР ДЛЯ INSTAGRAM - 200 €</span> <br />
                <span>+ АРХИВНЫЙ ФИЛЬМ - 500 €</span> <br />
                <span>+ ДОПОЛНИТЕЛЬНЫЙ ОПЕРАТОР 12 ЧАСОВ - 400 €</span> <br />
                <span>+ ДОПОЛНИТЕЛЬНЫЙ ОПЕРАТОР ДРОНА - 250 €</span> <br />
                <span>+ УСКОРЕННОЕ ИЗДАНИЕ</span> - монтаж свадебного видео или
                фильма в течение месяца с момента съемки - 30% от общей стоимости
                пакета."],
            ['key' => "main.title-contact", 'text_en' => 'Contact', 'text_es' => 'Contacto', 'text_ru' => 'Контакт'],
            ['key' => 'main.contact-desc', 'text_en' => "<span style='font-size: 22px'>Contact KUDRYASTUDIO | Professional Wedding Videography in Spain</span> <br>

We’re delighted that you’re interested in our cinematic wedding film services. Whether you're planning a wedding in Madrid, Barcelona, Valencia, or anywhere across Spain and Europe, get in touch with us to discuss how we can turn your special day into a timeless film.
<br>
<br>
<span style='font-size: 22px'> Why Choose KUDRYASTUDIO?</span> <br>

At KUDRYASTUDIO, we offer a unique approach to wedding videography. Each of our films is a personal story, full of emotions and beauty. Our team of professionals is ready to create a cinematic masterpiece for you to cherish for a lifetime.
<br>
<br>
<span style='font-size: 22px'>Contact Information</span> <br>
Phone: +34 601 167 675
<br>
Instagram: KUDRYASTUDO

<br>
<br>
<span style='font-size: 22px'>Where We Work</span> <br>

We provide wedding videography services across Spain, including Madrid, Barcelona, and Valencia, and we’re happy to travel for destination weddings across Europe.
<br>
<br>
<span style='font-size: 22px'>Get in Touch Today</span> <br>
Fill out the contact form below to discuss your wedding details and learn how we can help capture your special day on film.", 'text_es' => "<span style='font-size: 22px'>Contacta con KUDRYASTUDIO / Videografía Profesional de Bodas en España</span> <br>

Estamos encantados de que esté interesado en nuestros servicios cinematográficos de bodas. Ya sea que esté planeando una boda en Madrid, Barcelona, Valencia o en cualquier lugar de España y Europa, póngase en contacto con nosotros para analizar cómo podemos convertir su día especial en una película atemporal.
<br>
<br>
<span style='font-size: 22px'>¿Por Qué Elegir KUDRYASTUDIO?</span> <br>

En KUDRYASTUDIO, ofrecemos un enfoque único para la videografía de bodas. Cada una de nuestras películas es una historia personal, llena de emociones y belleza. Nuestro equipo de profesionales está listo para crear una obra maestra cinematográfica que apreciará durante toda la vida.
<br>
<br>
<span style='font-size: 22px'>Información de Contacto</span> <br>
Teléfono: +34 601 167 675
<br>
Instagram: KUDRYASTUDO

<br>
<br>
<span style='font-size: 22px'>Dónde Trabajamos</span> <br>
Brindamos servicios de videografía de bodas en toda España, incluidos Madrid, Barcelona y Valencia, y estamos encantados de viajar para bodas de destino en toda Europa.
<br>
<br>
<span style='font-size: 22px'>Póngase en Contacto Hoy Mismo</span> <br>
Complete el formulario de contacto a continuación para analizar los detalles de su boda y conocer cómo podemos ayudarlo a capturar su día especial en una película.", 'text_ru' => "<span style='font-size: 22px'>Свяжитесь с KUDRYASTUDIO | Профессиональная свадебная видеосъемка в Испании</span> <br>

Мы рады, что вы заинтересовались нашими услугами по организации свадебных съемок. Планируете ли вы свадьбу в Мадриде, Барселоне, Валенсии или в любом другом месте Испании и Европы, свяжитесь с нами, чтобы обсудить, как мы можем превратить ваш особенный день в незабываемый фильм.
<br>
<br>
<span style='font-size: 22px'>Почему вы выбрали именно KUDRYASTUDIO?</span> <br>

В KUDRYASTUDIO мы предлагаем уникальный подход к свадебной видеосъемке. Каждый из наших фильмов - это личная история, полная эмоций и красоты. Наша команда профессионалов готова создать кинематографический шедевр, который вы будете ценить всю жизнь.
<br>
<br>
<span style='font-size: 22px'>Контактная информация</span> <br>
Телефон: +34 601 167 675
<br>
Instagram: KUDRYASTUDO

<br>
<br>
<span style='font-size: 22px'>Где мы работаем</span> <br>

Мы предоставляем услуги свадебной видеосъемки по всей Испании, включая Мадрид, Барселону и Валенсию, и с удовольствием выезжаем на свадьбы по всей Европе.
<br>
<br>
<span style='font-size: 22px'>Свяжитесь с нами сегодня</span> <br>
Заполните контактную форму ниже, чтобы обсудить детали вашей свадьбы и узнать, как мы можем помочь запечатлеть ваш особенный день на пленке."],
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
