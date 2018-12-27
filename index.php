<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/main.css">
    <title>ai fest</title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</head>
<body>
    <div class="mainscreen">

        <div class="container mainarea">
            <div class="maintextarea">
                <h1>We are BACK!</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium aliquid minus quaerat?</p>
                <a class="waves-effect waves-light btn" href="#registration"><i class="material-icons left">stars</i>Register</a>
            </div>
            <div class="imagearea hide-on-small-only">
                <img src="./img/github.png" alt="">
            </div>
        </div>

    </div>

    <div class="container">

        <h1>Our Guests</h1>

        <div class="guestinstance">
                <a href="#modall">
                        <div class="chip" onclick = "">
                                <img src="./img/meharmoosa.jpg" alt="Contact Person">
                                Mehar Moosa
                        </div>
                </a>
                <div class="chip">
                        <img src="./img/meharmoosa.jpg" alt="Contact Person">
                        Mehar
                </div>
                <div class="chip">
                        <img src="./img/meharmoosa.jpg" alt="Contact Person">
                        Lorem, ipsum dolor.
                </div>
                <div class="chip">
                        <img src="./img/meharmoosa.jpg" alt="Contact Person">
                        Mehar Moosa
                </div>
                <div class="chip">
                        <img src="./img/meharmoosa.jpg" alt="Contact Person">
                        Meh
                </div>
                <div class="chip">
                        <img src="./img/meharmoosa.jpg" alt="Contact Person">
                        gopi sasikumar
                </div>
                <div class="chip">
                        <img src="./img/meharmoosa.jpg" alt="Contact Person">
                        kl 
                </div>
                <div class="chip">
                        <img src="./img/meharmoosa.jpg" alt="Contact Person">
                        Mehar Moosa
                </div>
                <div class="chip">
                        <img src="./img/meharmoosa.jpg" alt="Contact Person">
                        Mehar Moosa
                </div>
                <div class="chip">
                        <img src="./img/meharmoosa.jpg" alt="Contact Person">
                        Mehar Moosa
                </div>

               
        </div>



    <div class="registrationform container" id="registration">
        <h2>Registration</h2>
        <form action="apply.php" method="POST">
            <div class="input-field col s12">
                <input id="project_name" type="text" class="validate" name="project_name">
                <label for="project_name">Project Name</label>
            </div>
            <div class="input-field col s12">
                <textarea id="description" class="materialize-textarea" name="project_desc"></textarea>
                <label for="description">Description</label>
            </div>
            <div id="details_1"></div>
            <div id="details_2"></div>
            <div id="details_3"></div>
            <div id="details_4"></div>
            <div id="details_5"></div>
            <div id="details_6"></div>    
         

<!--do not end div here-->  


        <div class="addbtn container">
          <div class="addparticipantbtn">
              <a class="btn-floating btn-large waves-effect waves-light red " onclick="increment()" ><i class="material-icons">add</i></a>
          </div>  
          <div class="addparticipantbtn">
              <a class="btn-floating btn-large waves-effect waves-light red " onclick="remove()" ><i class="material-icons">remove</i></a>
          </div>   
        
          <div class="addparticipantbtn">
              <button type="submit" name="submit" class="btn-floating btn-large waves-effect waves-light red " >Submit</button>
          </div>
        </div>
      </form>
      </div>
    </div>

    <div class="">
      <h2>CONTACT US</h2>
      <form action="contact_form_handler.php" method="POST">
        <label>name</label>
        <input type="text" name="name_contact" class="validate">
        <label>email</label>
        <input type="text" name="email_contact" class="validate">
        <label>subject</label>
        <input type="text" name="subject_contact" class="validate">
        <label>message</label>
        <textarea  class="materialize-textarea" name="message"></textarea>
        <button type="submit" name="submit" class="btn-floating btn-large waves-effect waves-light red " >Submit</button>
      </form>
    </div>


    
    <footer class="page-footer mainscreen">
        <div class="container">
          <div class="row">
            <div class="col 12 s12">
              <h5 class="white-text">Footer Content</h5>
              <a href="#"><i class="fab fa-instagram fa-3x footericon"></i></a>
              <a href="#"><i class="fab fa-github-square fa-3x footericon"></i></a>
              <p class="grey-text text-lighten-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur eaque officia inventore esse aperiam quam quaerat animi, quas deleniti itaque dolores qui quidem. Alias sunt recusandae ad possimus autem veniam voluptate quas cupiditate rerum necessitatibus aspernatur in, aut quis molestiae?</p>
            </div>
            
        </div>
        <div class="footer-copyright">
          <div class="container">
          © 2019 All Rights recieved
          <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
          </div>
        </div>
      </footer>


<script>
          var i =0;
          increment();
          
        function toastit(a){
            M.Toast.dismissAll();
            M.toast({html: a});
        }



  
	function remove(){
    if(i <= 1){
      toastit("you need atleast 1 participant");
      return;
    }
    var elem = document.getElementById("card"+i);
    elem.parentNode.removeChild(elem);
    i--;
	}

	function increment(){
     
		i++;
		if(i>=7){
			
			toastit('Cannot add more than 6 participants');i--;
			return;
		}
		var detail = '<div class="participant z-depth-3" id = "card'+i+'">\
                    <h2 class="cardheading">Participant #'+i+'</h2>\
                    <div class="row">\
                      <div class="input-field col s6">\
                        <input  id="first_name'+i+'" name="first_name'+i+'" type="text" class="validate">\
                        <label for="first_name'+i+'">First Name</label>\
                      </div>\
                    <div class="input-field col s6">\
                      <input  id="last_name'+i+'" name="last_name'+i+'" type="text" class="validate">\
                      <label for="last_name'+i+'">Last Name</label>\
                    </div>\
                  </div>\
                  <div class="row">\
                    <div class="input-field col s12">\
                      <input id="email'+i+'" name="email'+i+'" type="email" class="validate">\
                      <label for="email'+i+'">Email</label>\
                      <span class="" data-error="wrong" data-success="right"></span>\
                    </div>\
                  </div>\
                  <div class="row">\
                    <div class="input-field col s6">\
                        <input id="number'+i+'" name="mobile'+i+'" type="text" class="validate">\
                        <label for="number'+i+'">Mobile N.o</label>\
                      </div>\
                      \
                  </div>\
\
                  <div class="row s12">\
\
\
                    <div class="col">\
                        <p>\
                            <label>\
                              <input class="with-gap" name="group3'+i+'" type="radio" value="S" checked />\
                              <span>S</span>\
                            </label>\
                          </p>\
                          <p>\
                            <label>\
                              <input class="with-gap" name="group3'+i+'" type="radio" value="M" />\
                              <span>M</span>\
                            </label>\
                          </p>\
                          \
                      </div>\
                      <div class="col">\
                        <p>\
                            <label>\
                              <input class="with-gap" name="group3'+i+'" type="radio"  value="L"/>\
                              <span>L</span>\
                            </label>\
                          </p>\
                          <p>\
                            <label>\
                              <input class="with-gap" name="group3'+i+'" type="radio" value="XL"/>\
                              <span>XL</span>\
                            </label>\
                          </p>\
                      </div>\
                      <div class="col">\
                        <p>\
                            <label>\
                              <input class="with-gap" name="group3'+i+'" type="radio"  value="XXL"/>\
                               <span>XXL</span>\
                            </label>\
                          </p>\
                      </div>\
                  </div>\
                  \
  </div>';

		document.getElementById('details_'+i+'').innerHTML += detail;

	}

        </script>
</body>
</html>

