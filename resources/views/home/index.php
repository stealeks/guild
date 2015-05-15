<div class="row">

    <?php foreach ($orders as $order): ?>

        <div class="col-lg-4">
            <div class="<?php echo $_rotate[array_rand($_rotate)] ?>">
                <div class="order paper <?php echo $_paper[array_rand($_paper)] ?>">

                    <div class="title text-lg text-bold">
                        <?php echo $order->title ?>
                    </div>

                    <div class="description">
                        <?php echo $order->short ?>
                    </div>

                    <div class="price text-bold text-xlg text-center">
                        <?php echo $order->price ?>
                        <span class="text-lg">
                            <?php echo $order->currency ?>
                        </span>
                    </div>

                </div>
            </div>
        </div>

    <?php endforeach; ?>

</div>