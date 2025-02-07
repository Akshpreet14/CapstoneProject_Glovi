<section class="counter-wrap">

    <div class="container">
        <div class="row py-5 text-white">
            <div class="col-6 col-lg-3">
                <div class="mb-4">

                    <div class="counter-value">
                        <h3><span class="stat-count"><?php echo e(App\Models\Shipment::all()->count()); ?></span><span
                                class="counter-suffix">+</span></h3>
                    </div><!-- .counter-value -->
                    <div class="counter-title">
                        <h4 class="counter-title-head"><?php echo app('translator')->get('messages.Total_Shipment'); ?></h4>
                    </div><!-- .counter-title -->
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="mb-4">

                    <div class="counter-value">
                        <h3><span class="stat-count"><?php echo e(App\Models\Countries::where('status', 1)->count()); ?></span><span
                                class="counter-suffix">+</span></h3>
                    </div><!-- .counter-value -->
                    <div class="counter-title">
                        <h4 class="counter-title-head"><?php echo app('translator')->get('messages.Country_Covered'); ?></h4>
                    </div><!-- .counter-title -->
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="">

                    <div class="counter-value">
                        <h3><span class="stat-count"><?php echo e(App\Models\User::where('role', 1)->count()); ?></span><span
                                class="counter-suffix">+</span></h3>
                    </div><!-- .counter-value -->
                    <div class="counter-title">
                        <h4 class="counter-title-head"><?php echo e(trans_choice('messages.Customer', 2)); ?></h4>
                    </div><!-- .counter-title -->
                </div>
            </div>
            <div class="col-6 col-lg-3">
                <div class="elementor-widget-container cea-counter-wrapper  cea-counter-style-classic">

                    <div class="counter-value">
                        <h3><span class="stat-count"><?php echo e(App\Models\Branches::where('status', 1)->count()); ?></span><span
                                class="counter-suffix">+</span></h3>
                    </div><!-- .counter-value -->
                    <div class="counter-title">
                        <h4 class="counter-title-head"><?php echo e(trans_choice('messages.Branch', 2)); ?></h4>
                    </div><!-- .counter-title -->
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .counter-wrap {
        background-image: url(<?php echo e(asset('assets/img/step-bg.jpg')); ?>);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
    }

    .counter-value .stat-count {
        font-size: 44px;
    }

    .counter-value .stat-count {
        color: #fff;
        font-family: "DM Sans", sans-serif;
        font-size: 60px;
        font-weight: 600;
        line-height: 1em;
    }
</style>
<?php /**PATH /home/ansabook/glovi.ansabooks.com/resources/views/themes/greenship/home/sections/counter.blade.php ENDPATH**/ ?>