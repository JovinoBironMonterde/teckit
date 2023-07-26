
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="./css/style.css">

    <title>Document</title>
</head>
<body>
    <section class="home">
        <div class="title">
            <h2>Web Developer Examination Part. 3</h2>
        </div>
        <div class="menus">
            <ul>
                <li><a href="./index.html">Home</a></li><span>|</span>
                <li><a href="#" class="ticketbtn">Submit Ticket</a></li><span>|</span>
                <li><a href="#">Ticket Viewer</a></li>
            </ul>
        </div>
        <div class="tickets-container">
            <div class="title">
                <h2>Submit A Ticket</h2>
            </div>>


    <form id="myForm" action="" method="post" autocomplete="off">
                <div>
                    <label>Ticket Number: </label>
                    <input type="text" name="ticket_num" placeholder="000001" required>
                </div> 

                <br />
                <div>
                    <label>Name</label>
                    <input type="text" name="name" placeholder="Name" required>
                </div>
                <br />

                <div>
                    <label>Contact #: </label>
                    <input type="number" name="contact" placeholder="Contact #" required>
                </div>
                <br />

                <div>
                    <label>Email: </label>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <br />

                <div>
                    <label>Email: </label>
                    <textarea name="message" id="" cols="30" rows="10" placeholder="Write something" required></textarea>
                </div>
                <br />
                <div class="button">
                <input type="submit" value="Save">
                </div>
    </form>
    <script type="text/javascript">
      // Prevent form from submit or refresh
      var form = document.getElementById("myForm");
      function handleForm(event) { event.preventDefault(); }
      form.addEventListener('submit', handleForm);
      // Function
      function insert(){
        $(document).ready(function(){

          // Make an array of languages to insert multiple checkbox values of languages
          var languages = [];
          $("input[name=languages]").each(function(){
            if($(this).is(":checked")){
              languages.push($(this).val());
            }
          });

          $.ajax({
            // Action
            url: 'function.php',
            // Method
            type: 'POST',
            data: {
              // Get value
              name: $("input[name=name]").val(),
              email: $("input[name=email]").val(),
              age: $("input[name=age]").val(),
              country: $("select[name=country]").val(),
              gender: $("input[name=gender]:checked").val(),
              languages: languages.toString(),
              action: "insert"
            },
            success:function(response){
              // Response is the output of action file
              if(response == 1){
                alert("Data Added Successfully!");
              }
              else if(response == 2){
                alert("Email Is Not Available");
              }
              else if(response == 3){
                alert("You Must Be Able To Speak More Than 1 Language");
              }
              else{
                
              }
            }
          });
        });
      }
    </script>
  </body>
</html>