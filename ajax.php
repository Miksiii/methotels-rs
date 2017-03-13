<!DOCTYPE html>
<html>
<head>
  <title>JSON FAKE API FOR DEVELOPERS</title>
  <style type="text/css" media="screen">
    .comment {
      background-color: #eaeaea; 
      margin-bottom: 25px;
    }
  </style>
</head>
<body>
  
  <div class="comments">
    <div class="comment">
      <h1 class="cname"></h1>
      <h2 class="cemail"></h2>
      <hr>
      <p class="cbody"></p>
    </div>
  </div>

  <script src="js/jquery.min.js"></script>
  <script type="text/javascript">
    (function() {

      const endpoint = "https://jsonplaceholder.typicode.com/comments";

      $.ajax({
        url: endpoint, 
        method: 'GET',
        success: function(data) {
          for(var i = 0; i < data.length; i++) {
            const id = data[i].id,
                  name = data[i].name,
                  email = data[i].email,
                  text = data[i].body;

            $('.comments').append("<div class='comment'><div class='cname'><h1>#" + id + " " + name + "</h1></div><div class='cemail'><h2>" + email + "</h2></div><div class='cbody'>" + text + "</div></div>");
          }
        }, 
        error: function(error) {
          alert(error.statusText);
        }
      });

    })();
  </script>

</body>
</html>