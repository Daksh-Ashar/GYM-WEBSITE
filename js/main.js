//====================Navigation bar ====================================//
        function myFunction(){
            var x = document.getElementById("menu"); 
             
             if(x.style.display == "block")
             {
                 x.style.display = "none";              // close navbar
             }
             else{
                 x.style.display = "block";           //open navbar
             }
         }


//=================Contact Form==========================================//

// Your web app's Firebase configuration
var firebaseConfig = {
    apiKey: "Enter Your API KEY",
    authDomain: "contactform-tut01.firebaseapp.com",
    databaseURL: "https://contactform-tut01.firebaseio.com",
    projectId: "contactform-tut01",
    storageBucket: "contactform-tut01.appspot.com",
    messagingSenderId: "",
    appId: ""
  };


  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  var firestore =firebase.firestore();

  // start grabbing DOM element

  const submitBtn = document.querySelector("#submit");

  var userFullName = document.querySelector(".userFullName");
  var userEmail = document.querySelector(".userEmail");
  var userMessage = document.querySelector(".userMessage");

  //  Contact Form Submitted POPUP

 const Submit_PopUp = document.getElementById('Form_Submit');



  const db = firestore.collection("contactData");


  submitBtn.addEventListener("click" , function(e){
      e.preventDefault();
      
      let userNameInput = userFullName.value;
      let userEmailInput = userEmail.value;
      let userMessageInput = userMessage.value;


      

    
    //POP OVER FOR SUBMISSION
    
    Submit_PopUp.style.visibility="visible";

  
  
    //Access the database

    db.doc().set({
        name:userNameInput,
        email:userEmailInput,
        Message:userMessageInput
    }).then(function(){
        console.log("data saved");
    }).catch(function(error){
        console.log(error);
          });
  
    }
    );

    var Form_reset_val = document.getElementById("MY-form");

    Form_reset_val.reset();

    



    






