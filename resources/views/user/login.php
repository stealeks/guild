<div class="row">

    <div class="col-lg-4 col-lg-offset-4">
        <form method="post" action="<?php echo route('login') ?>">
            <div class="paper <?php echo $_paper[array_rand($_paper)] ?>">
                <div class="text-lg text-bold">Login</div>

                <label for="username">Username</label>
                <input type="text" name="username">

                <label for="password">Password</label>
                <input type="password" name="password">

            </div>

            <?php if ($error): ?>
                <div class="paper text-danger">
                    <?php echo $error ?>
                </div>
            <?php endif; ?>

            <div class="paper <?php echo $_paper[array_rand($_paper)] ?> text-center">
                <button type="submit">Login</button>
            </div>
        </form>
    </div>

</div>