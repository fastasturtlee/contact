<?php echo validation_errors();?>
<h1 class="title">Contact Us</h1>
<div class="container form-block">
    <?php echo form_open_multipart('contact/store');?>
    <div class="form-group">
    <label for="title" style="padding-top: 5px;" class="required">Title</label>
    <?php
    $options = array(
        '' => 'Please choose your salutation',
        'Mr' => 'Mr',
        'Ms' => 'Ms',
        'Mrs' => 'Mrs'
    );
    $attribute = 'class="form-control form-control-sm"';
    echo form_dropdown('title',$options,'',$attribute);
    ?> 
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="required">First Name</label>
    <input type="text" class="form-control" id="fname" placeholder="First Name" name='fname'>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1" class="required">Last Name</label>
    <input type="text" class="form-control" id="lname" placeholder="Last Name" name='lname'>
  </div>
  <div class="form-group">
  <label for="birthday" class="required">Date of Birth</label>
  <input type="date"  class = "form-control" id="birthdaytime" name="dob">
  </div>
  <div class="from-group">
    <label for='mobno'class="required">Mobile Number</label>
    <input type="tel" class="form-control" id="mobno" name="mobno" placeholder="Mobile Number">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">File Upload</label>
    <input type="file" class="form-control-file" id="fileu" name='filename'>
  </div>

  <div class="form-group">
    <label for="emailaddress" class="required">Email Id</label>
    <input type="email" class="form-control" id="mailid" name='mailid'>
  </div>
  <div class="form-group">
    <label for="message">Message</label>
    <textarea  class="form-control" id='message' name="message" rows="3"></textarea>
  </div>

  <center>
  <button type="submit"  class="btn btn-primary" value="upload">Submit</button>
  </center>
    <?php echo form_close(); ?>
</div>




