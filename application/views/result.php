<div class=" container form-block">
    <center>
    <h5>Thank You <?=' '. $this->session->userdata('title').' '.$this->session->userdata('fname').' '.$this->session->userdata('lname')?></h5>
    <p>
    You have submitted the following details:<br>
    Date of Birth : <?=$this->session->userdata('dob')?><br>
    Telephone : <?= $this->session->userdata('mobno')?><br>
    File Uploaded : <?=$this->session->userdata('filename')?><br>
    Message : <?=$this->session->userdata('message')?>
    </p>
    </center>
</div>