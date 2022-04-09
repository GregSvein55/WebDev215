 
// function SignUp(event){

//     event.preventDefault();
  
  
//     var valid = true;
    
    
//     var elements = event.currentTarget;
//     var email = elements[0].value; //Email
//     var uname = elements[1].value; //Username
//     var pswd = elements[2].value;//Password
//     var pswdr = elements[3].value;//Confirm Password
//     var dob = elements[4].value//dob


//     var regex_email = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/;
//     var regex_uname = /^[A-z]{2,}[A-z0-9]{0,}$/;
//     var regex_pswd  = /([A-Za-z]+[0-9]|[0-9]+[A-Za-z])[A-Za-z0-9]*/;
//     var regex_dob = /^\d{2}\/\d{2}\/\d{4}$/ ;
    
//     var msg_email = document.getElementById("msg_email");
//     var msg_uname = document.getElementById("msg_uname");
//     var msg_pswd = document.getElementById("msg_pswd");
//     var msg_pswdr = document.getElementById("msg_pswdr");
//     var msg_dob = document.getElementById("msg_dob");
//     msg_email.innerHTML  = "";
//     msg_uname.innerHTML = "";
//     msg_pswd.innerHTML = "";
//     msg_pswdr.innerHTML = "";
//     msg_dob.innerHTML = "";
  
//     var textNode;
//     var htmlNode;
  

//     if (email == null || email == "") {
//       textNode = document.createTextNode("Email address empty. ");
//       msg_email.appendChild(textNode);
//       valid = false;
//     } 
//     else if (regex_email.test(email) == false) {
//       textNode = document.createTextNode("Email address wrong format. example: username@somewhere.sth ");
//       msg_email.appendChild(textNode);
//       valid = false;
//     }
//     else if (email.length > 60) {
//       textNode = document.createTextNode("Email address too long. Maximum is 60 characters. ");
//       msg_email.appendChild(textNode);
//       valid = false;
//     }
  
    
//     if (uname == null || uname == "") {
//         textNode = document.createTextNode("Username is empty. ");
//         msg_uname.appendChild(textNode);
//         valid = false;
  
//     }
//     else if (regex_uname.test(uname) == false) {
//         textNode = document.createTextNode("Username is invalid. Make sure there are no strange symbols or spaces ");
//         msg_uname.appendChild(textNode);
//         valid = false;
//     }
//     else if (uname.length > 40) {
//         textNode = document.createTextNode("Username is too long. Maximum is 40 characters. ");
//         msg_uname.appendChild(textNode);
//         valid = false;
//     }
  
  
//     if (pswd == null || pswd == "") {
//         textNode = document.createTextNode("Password is empty. ");
//         msg_pswd.appendChild(textNode);
//         valid = false;
    
//     }
//     else if (regex_pswd.test(pswd) == false) {
//         textNode = document.createTextNode("Password is invalid. It must contain at least one letter and one number ");
//         msg_pswd.appendChild(textNode);
//         valid = false;
//     }
//     else if (pswd.length < 8) {
//         textNode = document.createTextNode("Password must be at least 8 characters. ");
//         msg_pswd.appendChild(textNode);
//         valid = false;
//     }
  
  
//     if (pswd != pswdr) {
//         textNode = document.createTextNode("Passwords must match. ");
//         msg_pswdr.appendChild(textNode);
//         valid = false;
//     }

//     if (dob == null || dob == "") {
//         textNode = document.createTextNode("Date of Birth is empty. ");
//         msg_dob.appendChild(textNode);
//         valid = false;
//     }
//     else if (regex_dob.test(dob) == false) {
//         textNode = document.createTextNode("Date of Birth is invalid. Must be mm/dd/yyyy format ");
//         msg_dob.appendChild(textNode);
//         valid = false;
//     }

// }

