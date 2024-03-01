function validation() {
    var fname = document.getElementById('name').value;
    var lname = document.getElementById('lname').value;
    var country = document.getElementById('country').value;
    var dob = document.getElementById('dob').value;
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;
    var cpassword = document.getElementById('cpassword').value;
    var number  = document.getElementById('number').value;
    if(fname==="")
    {
     document.getElementById('name').innerHTML = "background:color('red');"   
     alert('Rejected');
    }
}