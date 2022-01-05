<div class="container">
    <div class="row text-center">
        <div class="col-sm-12 p-2">
            <h2><?php echo $data['title']; ?></h2>
        </div>
        <div class="col-sm-12 p-2">
            <div class="card-body">
                <div class="table-responsive">
				    <table class="table table-striped display nowrap" id="tbForces">
		  			    <thead class="thead thead-light">
						    <tr>
                                <th class="text-nowrap">ID</th>
                                <th class="text-nowrap text-left">Name</th>
                                <th class="text-nowrap"><a href="">Actions</a></th>
                            </tr>
                        </thead>
                        <tbody>	
                            <?php 
                                foreach ( $data["forces"] as $force ) {
                                    echo '<tr>
                                        <td class="text-nowrap">'.$force->id.'</td> 
                                        <td class="text-nowrap text-left">'.$force->name.'</td>
                                        <td class="text-nowrap">
                                            <a href="'.URLROOT.'/police/force/'.$force->id.'" class="btn btn-md btn-link" data-toggle="tooltip" data-placement="top" title="See Details"> <i class="fa fa-search-plus"></i> </a>
                                            <a href="'.URLROOT.'/police/neighbourhoods/'.$force->id.'" class="btn btn-md btn-link" data-toggle="tooltip" data-placement="top" title="See Neighbourhoods"> <i class="fa fa-building"></i> </a>
                                        </td>
                                    </tr>';
                                    // <a href="'.URLROOT.'/police/crimes/force/'.$force->id.'" class="btn btn-md btn-link" data-toggle="tooltip" data-placement="top" title="See Crimes"> <i class="fa fa-user-secret"></i> </a>
                                }
                            ?>
                        </tbody> 
                    </table>
                </div>
            </div>
        </div>        
    </div>
</div>