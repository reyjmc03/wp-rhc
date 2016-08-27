<div id="page" class="page animated fadein">
	<center><h3><strong><?php the_title(); ?></strong></h3></center>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="bs-table">
					<table id="browse-search-table" class="" cellspacing="0" border="0" width="100%">
						<thead>
							<tr>
								<th>		
									<div class="bst-header">
										<p class="bsth-p">BROWSE ITEMS</p>
									</div>
									<div class="bst-record-count">
										<?php //foreach ($rows as $obj): ?>
										<p class="bsth-p"><?php echo $n //echo $obj->bibliocount; ?> TOTAL</p>
										<?php //endforeach; ?>
									</div>
								</th>
							</tr>
						</thead>
						<tbody>
							<?php //for ($i=0; $i < $n ; $i++): ?>
							<?php foreach ($rows as $obj): ?>
							<tr class="animated fadein">
								<td>
									<div class="bst-row">
										<div class="row">
											<div class="col-lg-3 nogap">
												<div class="bstr-image">
													<a href="portfolio-item.html">
					                  <!-- <img class="img-responsive img-hover" src="http://placehold.it/206x224" alt=""> -->
					                 <!--  <img class="img-responsive img-hover" src="<?php //echo $obj->thumbnail; ?>" alt=""> -->
					                  <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($obj->thumbnail).'"/>'; ?>
					                </a>
												</div>
											</div>
											<div class="col-lg-9 nogap">
												<div class="bstr-det">
													<h3 class="book-title"><?php echo $obj->title; ?> <span><?php echo $obj->author; ?></span></h3>
													
													<p class="link"><a href="/items/show/1763" class="permalink">Nihongun no horyo seisaku = [The Japanese Army and the POW policies : white POWs and Asian POWs]  /  Utsumi Aiko</a></p>

													<p class="description">
													Lorem ipsum dolor sit amet, in usu facilis corpora explicari, vocibus fabellas constituto an duo. Vel vivendum evertitur abhorreant an, mei ad inermis conclusionemque. Fierent euripidis vel et, ex sed gubergren repudiandae. Ius eros impetus forensibus eu, ut quidam sensibus suscipiantur vim. Mundi fierent qui ad, no sit fugit nonumy.

Tollit habemus dissentiunt ne mea. Duo ad tamquam vivendo corrumpit. Vix eripuit ceteros mnesarchum et, eu vel mediocrem referrentur consequuntur, an nostro bonorum delicatissimi sed. Pro ne decore scripta bonorum, an cibo maiestatis eos, ei ius dolorum inermis copiosae.

Id sit invenire definitionem, erant semper molestie pro et, mel labitur aliquam appareat cu. Usu lorem incorrupte no. Ea harum deseruisse est, te sea agam maiorum gubergren. Assum inani quaeque ei qui.

Soluta saperet no eos, usu quis numquam oportere in, ad insolens suavitate pri. Vim et verterem quaestio, solum latine patrioque ad usu. Mollis scripserit disputando eu eos, has choro euismod in. Minim aperiam vivendo ex eam. Ne sed fuisset aliquando, consulatu voluptaria argumentum sea et.

Ex sit vide iisque labitur, has ea convenire sapientem necessitatibus. No pro euripidis voluptatibus, sit te ferri habeo. Qui decore diceret no, ullum accusam duo id, sea at nostrud repudiare delicatissimi. Ex eum veritus percipit persequeris. Elit nonumy phaedrum cu pri.
													</p>
													
													<p class="collect-format"><b>COLLECTION: <span><?php echo $collection_name; ?></span></b></p>
												</div> 
											</div>
										</div>
										<hr class="rhc-hr">
									</div>
								</td>
							</tr>
							<?php endforeach; ?>
							<?php //endfor; ?>	
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
<br>
<br>
