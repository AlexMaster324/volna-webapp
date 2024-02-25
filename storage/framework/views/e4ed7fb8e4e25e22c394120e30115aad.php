<?php $__env->startSection('main'); ?>
    <!-- main content -->
    <main class="main">
        <div class="container-fluid">
            <div class="row row--grid">
                <!-- breadcrumb -->
                <div class="col-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb__item"><a href="index.html">/</a></li>
                        <li class="breadcrumb__item breadcrumb__item--active">Войти</li>
                    </ul>
                </div>
                <!-- end breadcrumb -->

                <!-- sign in -->
                <div class="col-12">
                    <div class="sign">
                        <div class="sign__content">
                            <!-- authorization form -->
                            <form action="#" class="sign__form">
                                <a href="index.html" class="sign__logo">
                                    <img src="img/logo.svg" alt="">
                                </a>

                                <div class="sign__group">
                                    <input type="text" class="sign__input" placeholder="Email">
                                </div>

                                <div class="sign__group">
                                    <input type="password" class="sign__input" placeholder="Пароль">
                                </div>

                                <div class="sign__group sign__group--checkbox">
                                    <input id="remember" name="remember" type="checkbox" checked="checked">
                                    <label for="remember">Запомнить меня</label>
                                </div>

                                <button class="sign__btn" type="button">Войти</button>

                                <span class="sign__text">Нет аккаунта? <a href="<?php echo e(route('auth.signup.get')); ?>">Регистрация!</a></span>

                                <span class="sign__text"><a href="<?php echo e(route('auth.forgot.get')); ?>">Забыли пароль?</a></span>

                            </form>
                            <!-- end authorization form -->
                        </div>
                    </div>
                </div>
                <!-- end sign in -->
            </div>
        </div>
    </main>
    <!-- end main content -->
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\volna\resources\views/auth/signin.blade.php ENDPATH**/ ?>