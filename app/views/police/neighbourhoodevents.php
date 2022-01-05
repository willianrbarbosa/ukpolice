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
                                <th class="text-nowrap text-left">Force</th>
                                <th class="text-nowrap text-left">Neighbourhood</th>
                                <th class="text-nowrap text-left">Start Date</th>
                                <th class="text-nowrap text-left">End Date</th>
                                <th class="text-nowrap text-center">Type</th>
                            </tr>
                        </thead>
                        <tbody>	
                            <?php 
                                foreach ( $data["events"] as $event ) {
                                    echo '<tr>
                                        <td class="text-nowrap text-left">'.$data["force"]->name.'</td> 
                                        <td class="text-nowrap text-left">'.$data["neighbourhood"]->name.'</td>
                                        <td class="text-nowrap text-left">'.Date("Y-m-d H:i:s", strtotime($event->start_date)).'</td>
                                        <td class="text-nowrap text-left">'.Date("Y-m-d H:i:s", strtotime($event->end_date)).'</td>
                                        <td class="text-nowrap text-center">'.$event->type.'</td>
                                    </tr>
                                    <tr>
                                        <td class="text-nowrap text-left" colspan="5">'
                                            .'<label class="mr-2"><b>Title: </b></label>'.$event->title.'<br/>'
                                            .'<label class="mr-2"><b>Address: </b></label>'.$event->address.'<br/>'
                                            .'<h5 class="mr-2"><b>Description: </b></h5>'
                                            .'<pre>'.$event->description.'</pre><br/>'
                                        .'</td>
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
