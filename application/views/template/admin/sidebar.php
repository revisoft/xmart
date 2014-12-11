<!-- sidebar menu -->
					<div class="span2">
						<ul class="nav nav-list"><!-- menu with icon -->
							<li class="nav-header">
								Menu XMART
							</li>
							<!--
							<?php if($this->uri->segment(2) == "produk" || $this->uri->segment(2) == "tambah_produk" || $this->uri->segment(2) == "submit_tambah_produk" || $this->uri->segment(2) == "edit_produk" || $this->uri->segment(2) == "kategori_produk" || $this->uri->segment(2) == "submit_edit_produk" || $this->uri->segment(2) == "edit_kategori_produk" || $this->uri->segment(2) == "submit_edit_kategori_produk" || $this->uri->segment(2) == "submit_tambah_kategori" ) { ?>
							<li class="active">
							<?php }else{ ?>
							<li >
							<?php } ?>
								<a href="<?php echo base_url(); ?>administrator/produk">
									<i class="icon-list-alt"></i> Produk
								</a>
							</li>
							<?php if($this->uri->segment(2) == "banner" || $this->uri->segment(2) == "submit_tambah_banner") {?>
								<li class="active">
							<?php }else{ ?>
								<li >
							<?php } ?> 
								<a href="<?php echo base_url(); ?>administrator/banner">
									<i class="icon-picture"></i> Banner
								</a>
							</li>
							<?php if($this->uri->segment(2) == "profil" || $this->uri->segment(2) == "submit_edit_profil") {?>
								<li class="active">
							<?php }else{ ?>
								<li >
							<?php } ?> 
								<a href="<?php echo base_url(); ?>administrator/profil/profil">
									<i class="icon-globe"></i> Profil
								</a>
							</li>
							<?php if($this->uri->segment(2) == "contact_us") {?>
								<li class="active">
							<?php }else{ ?>
								<li >
							<?php } ?>
								<a href="<?php echo base_url(); ?>administrator/contact_us/">
									<i class="icon-comment"></i> Contact Us
								</a>								
							</li> -->							
							<div class="accordion" id="leftMenu">
		                    <div class="accordion-group">
		                        <div class="accordion-heading">
		                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#">
		                                  <i class="icon-home"></i> Dashboard
		                            </a>
		                        </div>
		                    </div>
		                    <div class="accordion-group"> 
		                    	        <div class="accordion-heading">
				                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#transactions_distribution">
				                                <i class="icon-th"></i> Transactions Distribution
				                            </a>
				                        </div>
				                        <div id="transactions_distribution" class="accordion-body collapse" style="height: 0px; ">
				                            <div class="accordion-inner">
				                                <ul>		                                    
				                                	<li>Purchase Request</li>
				                                    <li>Sales Quetation</li>
				                                    ------------------------
				                                </ul>
				                            </div>
				                        </div>
				            </div>
				            <div class="accordion-group">            
				                        <div class="accordion-heading">
				                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#transactions_finansial">
				                                <i class="icon-th"></i> Transactions Finansial
				                            </a>
				                        </div>
				                        <div id="transactions_finansial" class="accordion-body collapse" style="height: 0px; ">
				                            <div class="accordion-inner">
				                                <ul>		                                    
				                                	<li>Purchase Request</li>
				                                    <li>Sales Quetation</li>
				                                    ------------------------
				                                </ul>
				                            </div>
				                        </div>
				                    <!--</div>    -->			                    
		                    </div>
		                    <div class="accordion-group">
		                        <div class="accordion-heading">
		                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseThree">
		                                <i class="icon-th-list"></i> Pending Approval
		                            </a>
		                        </div>
		                        <div id="collapseThree" class="accordion-body collapse" style="height: 0px; ">
		                            <div class="accordion-inner">
		                                <ul>
		                                    <li>This is one</li>
		                                    <li>This is two</li>
		                                    <li>This is Three</li>
		                                </ul>                 
		                            </div>
		                         </div>
		                    </div>
		                    <div class="accordion-group">
		                        <div class="accordion-heading">
		                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseFour">
		                                <i class="icon-list-alt"></i> Process
		                            </a>
		                        </div>
		                        <div id="collapseFour" class="accordion-body collapse" style="height: 0px; ">
		                            <div class="accordion-inner">
		                                <ul>
		                                    <li>This is one</li>
		                                    <li>This is two</li>
		                                    <li>This is Three</li>
		                                </ul>                 
		                            </div>
		                         </div>
		                    </div>
		                    <div class="accordion-group">
		                        <div class="accordion-heading">
		                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseFive">
		                                <i class="icon-cog"></i> Master
		                            </a>
		                        </div>
		                        <div id="collapseFive" class="accordion-body collapse" style="height: 0px; ">
		                            <div class="accordion-inner">
		                                <ul>
		                                    <li>This is one</li>
		                                    <li>This is two</li>
		                                    <li>This is Three</li>
		                                </ul>                 
		                            </div>
		                         </div>
		                    </div>
		                    <div class="accordion-group">
		                        <div class="accordion-heading">
		                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#collapseSix">
		                                <i class="icon-file"></i> Setup
		                            </a>
		                        </div>
		                        <div id="collapseSix" class="accordion-body collapse" style="height: 0px; ">
		                            <div class="accordion-inner">
		                                <ul>
		                                    <li>This is one</li>
		                                    <li>This is two</li>
		                                    <li>This is Three</li>
		                                </ul>                 
		                            </div>
		                         </div>
		                    </div>
		                    <div class="accordion-group">
		                        <div class="accordion-heading">
		                            <a class="accordion-toggle" data-toggle="collapse" data-parent="#leftMenu" href="#report">
		                                <i class="icon-file"></i> Report
		                            </a>
		                        </div>
		                        <div id="report" class="accordion-body collapse" style="height: 0px; ">
		                            <div class="accordion-inner">
		                                <ul>
		                                    <li>This is one</li>
		                                    <li>This is two</li>
		                                    <li>This is Three</li>
		                                </ul>                 
		                            </div>
		                         </div>
		                    </div>
		                </div>
						</ul><!-- end menu with icon -->
						<hr />
					</div>
					<!-- sidebar menu -->