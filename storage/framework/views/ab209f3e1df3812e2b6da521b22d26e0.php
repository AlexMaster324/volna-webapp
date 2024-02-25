<?php $__env->startSection('main'); ?>
    <!-- main content -->
    <main class="main">
        <div class="container-fluid">
            <!-- artists -->
            <div class="row row--grid">
                <!-- breadcrumb -->
                <div class="col-12">
                    <ul class="breadcrumb">
                        <li class="breadcrumb__item"><a href="index.html">/</a></li>
                        <li class="breadcrumb__item breadcrumb__item--active">Артисты</li>
                    </ul>
                </div>
                <!-- end breadcrumb -->

                <!-- title -->
                <div class="col-12">
                    <div class="main__title main__title--page">
                        <h1>Artists</h1>
                    </div>
                </div>
                <!-- end title -->
            </div>

            <div class="row row--grid">
                <div class="col-12">
                    <div class="main__filter">
                        <form action="#" class="main__filter-search">
                            <input type="text" placeholder="Search...">
                            <button type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z"></path></svg>
                            </button>
                        </form>


                    </div>

                    <div class="row row--grid">
                        <?php for($i = 0; $i < 24; $i++): ?>
                            <div class="col-6 col-sm-4 col-md-3 col-xl-2">
                                <a href="/" class="artist">
                                    <div class="artist__cover">
                                        <img src="img/artists/artist1.jpg" alt="">
                                    </div>
                                    <h3 class="artist__title">NickName</h3>
                                </a>
                            </div>
                        <?php endfor; ?>
                    </div>

                </div>
            </div>
            <!-- end artists -->

        </div>
    </main>
    <!-- end main content -->
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OSPanel\domains\volna\resources\views/albums/albums.blade.php ENDPATH**/ ?>