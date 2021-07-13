
</body>
</html>
<?php
if($this->session->has_userdata('title','fname','lname','filename','dob','mobno','email','message')){
    $this->session->unset_userdata('title','fname','lname','filename','dob','mobno','email','message');
}
?>