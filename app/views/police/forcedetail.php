<div class="container">
    <div class="row text-center">
        <div class="col-sm-12 p-2">
            <h2><?php echo $data["title"]; ?></h2>
        </div>

        <div class="col-sm-12 p-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="bold text-primary"><?php echo $data["force"]->name; ?></h3>
                </div>
                <div class="card-body">
                    <div class="row text-left">
                        <div class="col-sm-4 p-2">
                            <h5 class="bold text-left text-primary">ID</h5>    
                            <h5 class="bold text-secondary"><?php echo $data["force"]->id; ?></h5>
                        </div>
                        <div class="col-sm-8 p-2">
                            <h5 class="bold text-left text-primary">Name</h5>    
                            <h5 class="bold text-secondary"><?php echo $data["force"]->name; ?></h5>
                        </div>
                    </div>

                    <div class="row text-left">
                        <div class="col-sm-12 p-2">
                            <h5 class="bold text-left text-primary">Description</h5>    
                            <pre><?php echo $data["force"]->description; ?></pre>
                        </div>
                    </div>
                    
                    <div class="row text-left">                    
                        <div class="col-sm-6 p-2">                
                            <h5 class="bold text-left text-primary">Social Media</h5>    
                            <?php 
                            foreach ( $data["force"]->engagement_methods as $socialMedia ) {
                                if ( !Empty($socialMedia->type) ) {
                                    echo '
                                    <a href="'.$socialMedia->url.'" target="_Blank" class="btn btn-secondary rounded-soft">
                                        <i class="fa fa-lg fa-'.($socialMedia->type <> "web" ? $socialMedia->type : "globe").'"></i>
                                    </a>';
                                }
                            } 
                            ?>
                        </div>
                        <div class="col-sm-6 p-2">
                            <h4 class="bold text-left text-primary">Phone</h4>    
                            <h5 class="bold text-secondary"><?php echo $data["force"]->telephone; ?></h5>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <a href="<?php echo URLROOT; ?>/police/forces" class="btn btn-link btn-lg btn-block"><i class="fa fa-arrow-left mr-1"></i>Back</a>
                </div>
            </div>
        </div>
    </div>
</div>

