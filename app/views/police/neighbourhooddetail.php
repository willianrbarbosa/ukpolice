<div class="container">
    <div class="row text-center">
        <div class="col-sm-12 p-2">
            <h2><?php echo $data["title"]; ?></h2>
        </div>

        <div class="col-sm-12 p-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="bold text-primary"><?php echo $data["neighbourhood"]->name; ?></h3>
                </div>
                <div class="card-body">
                    <div class="row text-left">
                        <div class="col-sm-3 p-2">
                            <h5 class="bold text-left text-primary">ID</h5>    
                            <h5 class="bold text-secondary"><?php echo $data["neighbourhood"]->id; ?></h5>
                        </div>
                        <div class="col-sm-6 p-2">
                            <h5 class="bold text-left text-primary">Name</h5>    
                            <h5 class="bold text-secondary"><?php echo $data["neighbourhood"]->name; ?></h5>
                        </div>
                        <div class="col-sm-3 p-2">
                            <h5 class="bold text-left text-primary">Population</h5>    
                            <h5 class="bold text-secondary"><?php echo $data["neighbourhood"]->population; ?></h5>
                        </div>
                    </div>

                    <div class="row text-left">
                        <div class="col-sm-12 p-2">
                            <h5 class="bold text-left text-primary">Force Unit Responsible</h5>    
                            <h5 class="bold text-secondary">
                                <a href="<?php echo URLROOT; ?>/police/force/<?php echo $data["force"]->id; ?>" class="btn btn-link"><?php echo $data["force"]->id; ?></a>
                                | <?php echo $data["force"]->name; ?>
                            </h5>
                        </div>
                    </div>

                    <?php if ( isset($data["neighbourhood"]->description) ) {  ?>
                        <div class="row text-left">
                            <div class="col-sm-12 p-2">
                                <h5 class="bold text-left text-primary">Description</h5>    
                                <pre><?php echo $data["neighbourhood"]->description; ?></pre>
                            </div>
                        </div>
                    <?php } ?>

                    <div class="row text-left">
                        <div class="col-sm-6 p-2">
                            <h5 class="bold text-left text-primary">Location</h5>    
                            <h5 class="bold text-secondary">
                                <label class="mr-3">Lat.: <?php echo $data["neighbourhood"]->centre->latitude; ?></label>
                                <label class="mr-3">Long.: <?php echo $data["neighbourhood"]->centre->longitude; ?></label>
                            </h5>
                        </div>
                        <?php if ( isset($data["neighbourhood"]->contact_details->email) ) {  ?>
                            <div class="col-sm-6 p-2">
                                <h5 class="bold text-left text-primary">Contact</h5>    
                                <h5 class="bold text-secondary">
                                    <label class="mr-3">Email: <?php echo $data["neighbourhood"]->contact_details->email; ?></label>
                                </h5>
                            </div>
                        <?php } ?>
                    </div>
                    
                    <div class="row text-left">                    
                        <div class="col-sm-12 p-2">                
                            <h5 class="bold text-left text-primary">Force Unit URL</h5>    
                            <a href="<?php echo $data["neighbourhood"]->url_force; ?>" target="_Blank" class="btn btn-lg btn-link">
                                <?php echo $data["neighbourhood"]->url_force; ?>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="<?php echo URLROOT; ?>/police/neighbourhoods/<?php echo $data["force"]->id; ?>" class="btn btn-link btn-lg btn-block"><i class="fa fa-arrow-left mr-1"></i>Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

