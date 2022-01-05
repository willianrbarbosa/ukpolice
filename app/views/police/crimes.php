<div class="container">
    <div class="row text-center">
        <div class="col-sm-12 p-2">
            <h2><?php echo $data['title']; ?></h2>
        </div>

        <?php foreach ( $data["neightbourhoods"] as $neightbour ) { ?>
            <div class="col-sm-4">
                <div class="card-body">
                    <h4 class="card-title"><?php //echo $data; ?></h4>
                    <button class="btn btn-default">Following <span class="badge badge-pill badge-success"><?php //echo $data; ?></span></button>
                    <button class="btn btn-default">Followers <span class="badge badge-pill badge-success"><?php //echo $data; ?></span></button>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="row">
                    <div class="col">
                        <h2>Stop and Search</h2>
                    </div>
                </div>
            </div>
            <?php foreach ( $data["crimes"] as $crime ) { ?>
            <?php } ?>
        <?php } ?>

    </div>
</div>