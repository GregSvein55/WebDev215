/*
 * Lab5 validate.js 
 *
 * Contains:
 *  - SignUpForm: submit event handler / form validator 
 *  - ResetForm: reset event handler / form resetter
 * 
 * Read Carefully and watch for //TODO: comments
 */


// Lab 5 SignUpForm Validator Event Handler
//
// This sample event handler function should validate all 4 input fields,  
//    ie. (Email, Username, Password, Confirm Password)
// at once as elements of event.currentTarget, which is provided by the 
// submit event. 
//
// Follow the TODO: instructions to complete the following:
//  - add a parameter to the function to receive the event object
//  - get the form's submitted field values from the event object
//  - complete validation of username, password and confirm password
//  - display feedback in an alert dialog
//  
//
// OR: you can write separate functions to validate each input field when
// they are changed. See the "DOM2 Event Registration" example in Lab 5:
// https://www.cs.uregina.ca/Links/class-info/215/js_dom/index.html#dom2 
// In such a solution, each input field would get its own change function. For
// example, checkEmail(), checkUsername(), checkPswd(), checkMatchPswd() 
// You will still need a submit() event to check that flags for all fields are OK,
// to provide feedback in display_info div and to use event.preventDefault() to
// avoid reloading the page.
// 


//TO DO: add a parameter to this function to receive the event object
function SignUpForm(event){

    

    var valid=true;
    var warnings="";
    var user_inputs = "";
 
  
    
 
    
    var elements = event.currentTarget;
    var email = elements[0].value; //Email
    //Username
    
    var user = elements[1].value;
    //Password
    
    var pswd = elements[2].value;
    //Confirm Password
    
    var pswdr = elements[3].value;
 
    //-- validate email --
    if (email == null || email == ""){
       warnings +="Email is empty.\n";
       valid=false;
    }
    else if(email.length > 60){
       warnings += "Max length for email is 60 characters.\n";
       valid = false;
    }
    //if everything is okay, the form should be submitted.
 
 
 
    //NOTE: for the following validations, always check to see
    //      if the field exists or is empty first
 
 
   
    if (uname == null || uname == ""){
        warnings +="Username is empty.\n";
        valid=false;
     }
     else if(user.length > 40){
        warnings += "Max length for eusername is 40 characters.\n";
        valid = false;
     }
 
 
   
    if (pswd == null || pswd == ""){
        warnings +="Password is empty.\n";
        valid=false;
     }
     else if(pswd.length != 8){
        warnings += "Password must be 8 characters.\n";
        valid = false;
     }
 
 
    if (pswd != pswdr){
        warnings +="Passwords do not match.\n";
        valid=false;
     }
     
 
 
    if(valid == false )
    {    
       alert(warnings);
       //prevent form to be submitted if one of above fields is invalid
       event.preventDefault();
    }
    else{
       alert("Signup successful!");
       //event.preventDefault(); // should not appear here, but you may add it while
                               //testing to keep the form from resetting.
    }
 }
 
 
 // Lab 5 ResetForm Reset Event Handler
 //
 // This event handler function should reset the SignUp form to its default state
 // 
 
 function ResetForm(){

   document.getElementById("SignUp").reset();
 
 
 }