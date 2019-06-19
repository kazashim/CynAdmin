<?php require_once ('index.php'); ?>
<div class="page-wrapper">
            <div class="container-fluid">
<center><div class="row">
                    
                          <center>  <h3 class="m-b-0 m-t-30 box-title">Login with cynojine </h3></center>
                           
                            <div class="row">
                               
                             <div class="col-lg-2 col-sm-4 col-xs-12">
                                <a href="https://app.cynojine.com/oauth?app_id='60e42b3ba620d4573388' button class="btn btn-block btn-outline btn-rounded btn-warning">login</button>
                                </div>
</div>
</div>
                            </div>
                        </div></center>
                  
                <!--row -->
                <a href="<?php echo $music->config->wowonder_domain_uri.'/oauth?app_id='.$music->config->wowonder_app_ID;?>" class="btn_social btn_gp bold" style="background-color: #212121;color: #fff;"><span class="btn_wo"><img src="<?php echo $music->config->wowonder_img;?>" style="width: 20px;"></span> {{LANG Login with Wowonder}}</a>