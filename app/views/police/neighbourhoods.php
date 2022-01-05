<div class="container">
    <div class="row text-center">
        <div class="col-sm-12 p-2">
            <h2><?php echo $data['title']; ?></h2>
        </div>
        <div class="col-sm-12 p-2">
            <div class="card-body">
                <div class="table-responsive">
				    <table class="table table-striped display nowrap" id="tbNeighbourhood">
		  			    <thead class="thead thead-light">
						    <tr>
                                <th class="text-nowrap">ID</th>
                                <th class="text-nowrap text-left">Name</th>
                                <th class="text-nowrap text-left">Force</th>
                                <th class="text-nowrap"><a href="">Actions</a></th>
                            </tr>
                        </thead>
                        <tbody>	
                            <?php 
                                foreach ( $data["neightbourhoods"] as $neightbour ) {
                                    echo '<tr>
                                        <td class="text-nowrap">'.$neightbour->id.'</td> 
                                        <td class="text-nowrap text-left">'.$neightbour->name.'</td>
                                        <td class="text-nowrap text-left">'.$data["force"]->name.'</td>
                                        <td class="text-nowrap">
                                            <a href="'.URLROOT.'/police/neighbourhood/'.$data["force"]->id.'/'.$neightbour->id.'" class="btn btn-md btn-link" data-toggle="tooltip" data-placement="top" title="See Detail"> <i class="fa fa-search-plus"></i> </a>
                                            <a href="'.URLROOT.'/police/neighbourhoodevents/'.$data["force"]->id.'/'.$neightbour->id.'" class="btn btn-md btn-link" data-toggle="tooltip" data-placement="top" title="See Events"> <i class="fa fa-calendar"></i> </a>
                                        </td>
                                    </tr>';
                                }
                            ?>
                        </tbody> 
                    </table>
                </div>
            </div>
        </div>        
    </div>
</div>