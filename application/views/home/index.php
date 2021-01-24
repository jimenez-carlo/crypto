<?php echo form_open(base_url().'home/submit',array('class' => 'form-horizontal')); ?> 
<div class="row mt">
  <div class="col-lg-12">
    <div class="row content-panel">
      <div class="col-md-4 profile-text mt mb centered">
        <div class="right-divider hidden-sm hidden-xs">
          <h4>1922</h4>
          <h6>FOLLOWERS</h6>
          <h4>290</h4>
          <h6>FOLLOWING</h6>
          <h4>$ 13,980</h4>
          <h6>MONTHLY EARNINGS</h6>
        </div>
      </div>
      <!-- /col-md-4 -->
      <div class="col-md-4 profile-text">
        <h3><?php echo $account->first_name.", ".$account->last_name; ?></h3>
        <h6>Main Administrator</h6>
        <p><?php echo $account->tag; ?></p>
        <br>
        <p><button class="btn btn-theme"><i class="fa fa-envelope"></i> Send Message</button></p>
      </div>
      <!-- /col-md-4 -->
      <div class="col-md-4 centered">
        <div class="profile-pic">
          <p><img src="<?php echo base_url(); ?>assets/img/ui-sam.jpg" class="img-circle"></p>
          <p>
            <button class="btn btn-theme"><i class="fa fa-check"></i> Follow</button>
            <button class="btn btn-theme02">Add</button>
          </p>
        </div>
      </div>
      <!-- /col-md-4 -->
    </div>
    <!-- /row -->
  </div>
  <!-- /col-lg-12 -->
  <div class="col-lg-12 mt">
    <div class="row content-panel">
      <div class="panel-heading">
        <ul class="nav nav-tabs nav-justified" id="profile_tabs">
          <li class="active">
            <a data-toggle="tab" href="#overview">Overview</a>
          </li>
          <li>
            <a data-toggle="tab" href="#contact" class="contact-map">Contact</a>
          </li>
          <li>
            <a data-toggle="tab" href="#edit">Edit Profile</a>
          </li>
        </ul>
      </div>
      <!-- /panel-heading -->
      <div class="panel-body">
        <div class="tab-content">
          <div id="overview" class="tab-pane active">
            <div class="row">
              <div class="col-md-6">
                
                <?php echo form_hidden('account_id', $account_id); ?>
                <textarea rows="3" class="form-control" placeholder="Whats on your mind?" name="post_text"></textarea>
                <div class="grey-style">
                  <div class="pull-left">
                    <button class="btn btn-sm btn-theme"><i class="fa fa-camera"></i></button>
                    <button class="btn btn-sm btn-theme"><i class="fa fa-map-marker"></i></button>
                  </div>
                  <div class="pull-right">
                    <?php echo form_button(attribute()->create_post); ?> 
                  </div>
                </div>
                
                <div class="detailed mt">
                  <h4>Recent Activity</h4>
                  <div class="recent-activity">
                    <?php foreach ($post as $key => $res) { ?>
                    <div class="activity-icon bg-theme"></div>
                    <div class="activity-panel"><span class="text-muted"><h6><?php echo $res['last_name']." ".$res['first_name']." posted ".time_elapsed_string($res['created_date']); ?></h6></span> 
                      <p><b>"<?php echo $res['post']; ?>"</b></p>
                    </div>
                    <?php } ?>
                  </div>
                  <!-- /recent-activity -->
                </div>
                <!-- /detailed -->
              </div>
              <!-- /col-md-6 -->
              <div class="col-md-6 detailed">
                <h4>User Stats</h4>
                <div class="row centered mt mb">
                  <div class="col-sm-4">
                    <h1><i class="fa fa-money"></i></h1>
                    <h3>$22,980</h3>
                    <h6>LIFETIME EARNINGS</h6>
                  </div>
                  <div class="col-sm-4">
                    <h1><i class="fa fa-trophy"></i></h1>
                    <h3>37</h3>
                    <h6>COMPLETED TASKS</h6>
                  </div>
                  <div class="col-sm-4">
                    <h1><i class="fa fa-shopping-cart"></i></h1>
                    <h3>1980</h3>
                    <h6>ITEMS SOLD</h6>
                  </div>
                </div>
                <!-- /row -->
                <h4>My Friends</h4>
                <div class="row centered mb">
                  <ul class="my-friends">
                    <li>
                      <div class="friends-pic"><img class="img-circle" width="35" height="35" src="<?php echo base_url(); ?>assets/img/friends/fr-01.jpg"></div>
                    </li>
                    <li>
                      <div class="friends-pic"><img class="img-circle" width="35" height="35" src="<?php echo base_url(); ?>assets/img/friends/fr-02.jpg"></div>
                    </li>
                    <li>
                      <div class="friends-pic"><img class="img-circle" width="35" height="35" src="<?php echo base_url(); ?>assets/img/friends/fr-03.jpg"></div>
                    </li>
                    <li>
                      <div class="friends-pic"><img class="img-circle" width="35" height="35" src="<?php echo base_url(); ?>assets/img/friends/fr-04.jpg"></div>
                    </li>
                    <li>
                      <div class="friends-pic"><img class="img-circle" width="35" height="35" src="<?php echo base_url(); ?>assets/img/friends/fr-05.jpg"></div>
                    </li>
                    <li>
                      <div class="friends-pic"><img class="img-circle" width="35" height="35" src="<?php echo base_url(); ?>assets/img/friends/fr-06.jpg"></div>
                    </li>
                    <li>
                      <div class="friends-pic"><img class="img-circle" width="35" height="35" src="<?php echo base_url(); ?>assets/img/friends/fr-07.jpg"></div>
                    </li>
                    <li>
                      <div class="friends-pic"><img class="img-circle" width="35" height="35" src="<?php echo base_url(); ?>assets/img/friends/fr-08.jpg"></div>
                    </li>
                    <li>
                      <div class="friends-pic"><img class="img-circle" width="35" height="35" src="<?php echo base_url(); ?>assets/img/friends/fr-09.jpg"></div>
                    </li>
                    <li>
                      <div class="friends-pic"><img class="img-circle" width="35" height="35" src="<?php echo base_url(); ?>assets/img/friends/fr-10.jpg"></div>
                    </li>
                    <li>
                      <div class="friends-pic"><img class="img-circle" width="35" height="35" src="<?php echo base_url(); ?>assets/img/friends/fr-11.jpg"></div>
                    </li>
                  </ul>
                  <div class="row mt">
                    <div class="col-md-4 col-md-offset-4">
                      <h6><a href="#">VIEW ALL</a></h6>
                    </div>
                  </div>
                </div>
                <!-- /row -->
                <h4>Pending Tasks</h4>
                <div class="row centered">
                  <div class="col-md-8 col-md-offset-2">
                    <h5>Dashboard Update (40%)</h5>
                    <div class="progress">
                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                        <span class="sr-only">40% Complete (success)</span>
                      </div>
                    </div>
                    <h5>Unanswered Messages (80%)</h5>
                    <div class="progress">
                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                        <span class="sr-only">80% Complete (success)</span>
                      </div>
                    </div>
                    <h5>Product Review (60%)</h5>
                    <div class="progress">
                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                        <span class="sr-only">60% Complete (success)</span>
                      </div>
                    </div>
                    <h5>Friend Requests (90%)</h5>
                    <div class="progress">
                      <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
                        <span class="sr-only">90% Complete (success)</span>
                      </div>
                    </div>
                  </div>
                  <!-- /col-md-8 -->
                </div>
                <!-- /row -->
              </div>
              <!-- /col-md-6 -->
            </div>
            <!-- /OVERVIEW -->
          </div>
          <!-- /tab-pane -->
          <div id="contact" class="tab-pane">
            <div class="row">
              <div class="col-md-6">
                <div id="map"></div>
              </div>
              <!-- /col-md-6 -->
              <div class="col-md-6 detailed">
                <h4>Location</h4>
                <div class="col-md-8 col-md-offset-2 mt">
                  <p>
                    Postal Address<br/> PO BOX 12988, Sutter Ave<br/> Brownsville, New York.
                  </p>
                  <br>
                  <p>
                    Headquarters<br/> 844 Sutter Ave,<br/> 9003, New York.
                  </p>
                </div>
                <h4>Contacts</h4>
                <div class="col-md-8 col-md-offset-2 mt">
                  <p>
                    Phone: +33 4898-4303<br/> Cell: 48 4389-4393<br/>
                  </p>
                  <br>
                  <p>
                    Email: hello@dashiotheme.com<br/> Skype: UseDashio<br/> Website: http://Alvarez.is
                  </p>
                </div>
              </div>
              <!-- /col-md-6 -->
            </div>
            <!-- /row -->
          </div>
          <!-- /tab-pane -->
          <div id="edit" class="tab-pane">
            <div class="row">
              <div class="col-lg-8 col-lg-offset-2 detailed">
                <h4 class="mb">Personal Information</h4>
                <?php echo $update_message; ?>
                  <div class="form-group">
                    <?php echo form_label('Avatar', 'avatar', attribute()->home_label); ?>
                    <div class="col-lg-6">
                      <?php echo form_upload('avatar', null, attribute()->file); ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <?php echo form_label('First Name', 'first_name', attribute()->home_label); ?>
                    <div class="col-lg-6">
                      <?php echo form_input('first_name', $account->first_name, attribute()->form_control); ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <?php echo form_label('Last Name', 'last_name', attribute()->home_label); ?>
                    <div class="col-lg-6">
                      <?php echo form_input('last_name', $account->last_name, attribute()->form_control); ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <?php echo form_label('Tag line', 'tag_line', attribute()->home_label); ?>
                    <div class="col-lg-6">
                      <textarea rows="3" cols="30" class="form-control" id="" name="tag_line"><?php echo $account->tag; ?></textarea>
                     <!--  <?php echo form_textarea('tag_line', $_POST['tag_line'] ?? '', attribute()->text_area); ?> -->
                    </div>
                  </div>
                  <div class="form-group">
                    <?php echo form_label('Email', 'email', attribute()->home_label); ?>
                    <div class="col-lg-6">
                      <?php echo form_input('email', $account->email, attribute()->form_control); ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <?php echo form_label('Phone No#', 'phone', attribute()->home_label); ?>
                    <div class="col-lg-6">
                      <?php echo form_input('phone', $account->phone, attribute()->form_control); ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <?php echo form_label('Address', 'address', attribute()->home_label); ?>
                    <div class="col-lg-6">
                      <textarea rows="3" cols="30" class="form-control" id="" name="address"><?php echo $account->address; ?></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <?php echo form_button(attribute()->home_update); ?> 
                      <!-- <button class="btn btn-theme04" type="button">Cancel</button> -->
                    </div>
                  </div>
                
              </div>
              <!-- /col-lg-8 -->
            </div>
            <!-- /row -->
          </div>
          <!-- /tab-pane -->
        </div>
        <!-- /tab-content -->
      </div>
      <!-- /panel-body -->
    </div>
    <!-- /col-lg-12 -->
  </div>
  <!-- /row -->
</div>
</form>