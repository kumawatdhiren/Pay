  <?php
include ('inc/header.php');
?>
<!-- Form Element area Start-->
    <div class="form-element-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<?php if($this->session->flashdata('fail')){ ?>
                                        <div class="alert alert-danger"><?= $this->session->flashdata('fail') ?></div>
                                        <?php } ?>
                                        <?php if($this->session->flashdata('success')){ ?>
                                        <div class="alert alert-success"><?= $this->session->flashdata('success') ?></div>
                                        <?php } ?>
				<form method="post" enctype="multipart/form-data" action="">
                    <div class="form-element-list">

                        <div class="cmp-tb-hd bcs-hd">
                            <h2>Modify Brand</h2>
                        </div>
						
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                   
                                                                        <label>Brand Name</label>

                                        <input type="text" class="form-control" value="<?php echo set_value('brand_name', $brandss->brand_name);?>" name="brand_name" placeholder="Brand Name">
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    
                                                                          <label>Mcoin</label>

                                        <input type="text" class="form-control" name="mcoin" value="<?php echo set_value('mcoin', $brandss->mcoin);?>" placeholder="Mcoin">
                                   
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                   
							        <label>Brand Message</label>

                                        <input type="text" class="form-control" name="brand_msg" value="<?php echo set_value('brand_msg', $brandss->brand_msg);?>" placeholder="Brand Message">
                                   
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                   
                                    						        <label>Brand Information</label>

                                        <input type="text" class="form-control" placeholder="Brand Info" value="<?php echo set_value('brand_info', $brandss->brand_info);?>" name="brand_info">
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    
                                                       		  <label>Download Message</label>

                                        <input type="text" class="form-control" placeholder="Download Message" name="download_msg" value="<?php echo set_value('download_msg', $brandss->download_msg);?>">
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                   								  <label>Download Link</label>

                                    
                                        <input type="text" class="form-control" placeholder="Download Link" name="download_link" value="<?php echo set_value('download_link', $brandss->download_link);?>">
                                 
                                </div>
                            </div>
                        </div>
						
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    							  <label>Country</label>
<select class="form-control country" id="country" name="countryname">
								 <option>--Select--</option>
                            <?php foreach ($countryi as $countr):

							 ?>
                           <option value="<?php echo $countr->id; ?>" <?php
                                            if (set_value('countryname', $brandss->countryname) == $countr->id) {
                                                echo "selected =selected";
                                            }
                                            ?>><?php echo $countr->country_name; ?></option>
                                    <?php endforeach;?>
						
								 </select>
                                   
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                 <label>State</label>

                                    
                                <select class="form-control state" id="state" name="statename">
								<option><?php echo set_value('statename', $brandss->statename);?></option>
								</select>
                                    
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    					          <label>City</label>

                                    
                                <select class="form-control city" name="cityname" id="city">
								<option><?php echo set_value('cityname', $brandss->cityname);?></option>

								 </select>
                                    
                                </div>
                            </div>
                        </div>
                             <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    							        <label>Privacy Policy</label>

                                    
                                        <input type="text" class="form-control" name="privacy_policy" placeholder="Privacy Policy" value="<?php echo set_value('privacy_policy', $brandss->privacy_policy);?>">
                                   
                                   
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    
                                  				                     <label>Brand Terms & conditions</label>

                                        <input type="text" class="form-control" value="<?php echo set_value('brand_tc', $brandss->brand_tc);?>" name="brand_tc" placeholder="Brand Terms & conditions">
                                   
                                   
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    
                                    		                    <label>Play Store Link</label>

                                        <input type="text" class="form-control" placeholder="Play Store Url" value="<?php echo set_value('playstore_url', $brandss->playstore_url);?>" name="playstore_url">
                                    

                                </div>
                            </div>
                        </div>
						
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    									  <label>Brand Logo</label>

                                    <input type="file" id="file" name="brand_logo" value="<?php echo set_value('brand_logo', $brandss->brand_logo);?>">

<img src="<?php echo base_url();?>uploads/images/<?php echo set_value('brand_logo', $brandss->brand_logo);?>" width="40px;">                               

                                   
                                   
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    							  <label>Thumb</label>

                                    
  <input type="file" id="file" name="thumb_url" value="<?php echo set_value('thumb_url', $brandss->thumb_url);?>">

<img src="<?php echo base_url();?>uploads/images/<?php echo set_value('thumb_url', $brandss->thumb_url);?>" width="40px;">                               
   </div>
                                   
                                </div>
                           
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    
                                   									  <label>HashTag</label>

                                        <input type="text" class="form-control" placeholder="HashTag" name="hashtag" value="<?php echo set_value('hashtag', $brandss->hashtag);?>">
								  

                                </div>
                            </div>
                        </div>
						
						 <div class="row">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                    					              <label>Question Type</label>

						
                                    <select class="form-control" name="ques_type" id="ddlPassport">
											<option><?php echo set_value('ques_type', $brandss->ques_type);?></option>
											<option value="Objective">Objective</option>
											<option value="Descriptive">Descriptive</option>
										</select>
                                
                                    
                                   
                                </div>
                            </div>
							
							<div id="dvPassport" style="display: none">
							<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                                                     <label>Options</label>

                                        <input id="txtPassportNumber"  type="text" class="form-control" placeholder="Option1" value="<?php echo set_value('option1', $brandss->option1);?>" name="option1">
                                        <input id="txtPassportNumber"  type="text" class="form-control" placeholder="Option2" value="<?php echo set_value('option2', $brandss->option2);?>" name="option2">
                                        <input id="txtPassportNumber"  type="text" class="form-control" placeholder="Option3" value="<?php echo set_value('option3', $brandss->option3);?>" name="option3">
                                        <input id="txtPassportNumber"  type="text" class="form-control" placeholder="Option4" value="<?php echo set_value('option4', $brandss->option4);?>" name="option4">
								  

                                </div>
                            </div>
						   </div>

							
							<div id="dvPassport3" style="display: none" class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                <div class="form-group">
                                                                     <label>Question</label>

                                    
                                        <input id=""  type="text" class="form-control" placeholder="Question" name="question" value="<?php echo set_value('question', $brandss->question);?>">
								  

                                </div>
                            </div>

							
                          
                        </div>
						
			           <br><br>
						 <div class="form-example-int mg-t-15">
                            <button type="submit" name="update" class="btn btn-success notika-btn-success">Update</button>
                        </div>
                    </div>
					</form>
                </div>
            </div>
            
            

          </div>
    </div>
	<br><br><br>
    <!-- Form Element area End-->
	  <?php
include ('inc/footer.php');
?>
   <script type="text/javascript">
    $(function () {
        $("#ddlPassport").change(function () {
            if ($(this).val() == "Objective") {
                $("#dvPassport").show();
            } else {
                $("#dvPassport").hide();
            }
        });
    });
	
	$(function () {
        $("#ddlPassport").change(function () {
            if ($(this).val() == "Descriptive") {
                $("#dvPassport3").show();
            } else {
                $("#dvPassport3").hide();
            }
        });
    });
</script>
 
<script type="text/javascript">
$(".country").on("change", function(){
    var country = $(this).val();
   
    $.post("<?=base_url()?>admin/select_state1", {country: country}, 
    function(data){
        $(".state").html(data);
        
    });
});


</script>

<script type="text/javascript">
$(".state").on("change", function(){
    var state = $(this).val();
			   console.log(state);

    $.post("<?=base_url()?>admin/select_city1", {state: state}, 
    function(data){
		   //console.log(data);

        $(".city").html(data);
        
    });
});


</script>

<style>
</style>
