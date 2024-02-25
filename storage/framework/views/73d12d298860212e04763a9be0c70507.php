<?php $__env->startSection('main'); ?>
    <!-- main content -->
    <main class="main">
        <div class="container-fluid">
            <div class="row row--grid">
                <!-- breadcrumb -->
                <div class="col-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb__item"><a href="index.html">/</a></li>
                        <li class="breadcrumb__item breadcrumb__item--active">Контакты</li>
                    </ul>
                </div>
                <!-- end breadcrumb -->

                <!-- title -->
                <div class="col-12">
                    <div class="main__title main__title--page">
                        <h1>Контакты</h1>
                    </div>
                </div>
                <!-- end title -->
            </div>

            <div class="row row--grid">
                <div class="col-12 col-lg-7 col-xl-8">
                    <form action="#" class="sign__form sign__form--contacts">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="sign__group">
                                    <input type="text" name="name" class="sign__input" placeholder="Имя">
                                </div>
                            </div>

                            <div class="col-12 col-md-6">
                                <div class="sign__group">
                                    <input type="text" name="email" class="sign__input" placeholder="Email">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="sign__group">
                                    <input type="text" name="subject" class="sign__input" placeholder="Заголовок">
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="sign__group">
                                    <textarea name="text" class="sign__textarea" placeholder="Сообщение"></textarea>
                                </div>
                            </div>

                            <div class="col-12 col-xl-3">
                                <button type="button" class="sign__btn">Отправить</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                    <div class="main__title main__title--sidebar">
                        <h2>Информация</h2>
                        <p>Модератор ответит на ваше сообщение в течении 2 дней</p>
                    </div>
                    <ul class="contacts__list">
                        <li><a href="mailto:support@volna.template">support@volna.eghub.org</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </main>
    <!-- end main content -->
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\volna\resources\views/staticpages/contacts.blade.php ENDPATH**/ ?>