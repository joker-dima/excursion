<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Volgograd-tour
 */

get_header();
?>

	        <div class="main-content">
            <h2 class="visually-hidden">Что посмотреть в Волгограде?</h2>
            <div class="title title__position">
                <h3 class="title__heading">Царицын - Сталинград - Волгоград</h3>
                <p class="title__content">В городе есть минимум 3 важные достопримечательности которые должен посетить
                    каждый!</p>
            </div>
            <div class="featurse">
                <div class="featurse__title">
                    <h3 class="title__heading__features">дом Павлова и мельница гергарда</h3>
                    <p class="title__content__features">- №1 -</p>
                    <p class="title__content__features">Франция пала за 38 дней. Дом Павлова держал оборону 58 дней!</p>
                </div>
                <div class="featurse__image">
                </div>
            </div>

            <div class="featurse">
                <div class="featurse__title featurse__title--position">
                    <h3 class="title__heading__features title__heading__features--position">Россошинский
                        военно-мемориальный комплекс</h3>
                    <p class="title__content__features title__content__features--number">- №2 -</p>
                    <p class="title__content__features">Советская и немецкая части комплекса расположены рядом
                    </p>
                </div>
                <div class="featurse__image featurse__image--second">
                </div>
            </div>

            <div class="featurse">
                <div class="featurse__title featurse__title--position">
                    <h3 class="title__heading__features">Мамаев Курган</h3>
                    <p class="title__content__features">- №3 -</p>
                    <p class="title__content__features">Жемчужина нашего города и главная высота России обязательна к
                        посещению!</p>
                </div>
                <div class="featurse__image featurse__image--third"></div>
            </div>
        </div>

        <div class="title title__position">
            <h3 class="title__heading">Планируете посетить?</h3>
            <p class="title__content">3 причины чтобы заказать экскурсии у нас:</p>
        </div>


        <div class="our-features--wrapper">
            <div class="our-features">
                <div class="our-features__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-list.svg" alt="иконка список заданий">
                </div>

                <h3 class="title__heading title__heading--position">Индивидуальный подход</h3>
                <p class="title__content title__content--position">Дайте знать что именно Вас интересует и мы составим
                    экскурсию согласно Вашим пожеланиям!</p>
            </div>

            <div class="our-features our-features--position">
                <div class="our-features__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-photos.svg" alt="иконка с двумя фото">
                </div>

                <h3 class="title__heading title__heading--position">Нестандартная подача материала</h3>
                <p class="title__content title__content--position">Забудьте о скучных турах! Только реально интересные
                    факты. Также наш гид покажет Вам наглядные иллюстрации "Тогда/Сейчас" </p>
            </div>


            <div class="our-features">
                <div class="our-features__item">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/icon-dollar.svg" alt="иконка доллар">
                </div>
                <h3 class="title__heading title__heading--position">Умеренные цены</h3>
                <p class="title__content title__content--position">Например, пешая экскурсия по Мамаеву Кургану 2000
                    рублей за группу!</p>
            </div>
        </div>
<?php
get_footer();
