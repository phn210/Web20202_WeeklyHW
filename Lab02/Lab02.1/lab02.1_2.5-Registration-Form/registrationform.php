<html>
  <head>
    <title>A Registeration Form</title>
    <style>
      body {
        font-family: Arial, Helvetica, sans-serif;
      }

      .header{
        font-size: 36px;
        text-align: center;
        font-weight: 500;
      }

      label{
        font-size: 22px;
        font-weight: 100;
      }

      .form-content{
        display: flex;
        justify-content: center;
        margin: 10px 10%;
        flex-direction: column;
      }

      .button{
        display: flex;
        justify-content: right;
        margin: 10px 10%;
      }

    </style>
  </head>
  <body>
    <form action="http://fit.hut.edu.vn/~trangntt/courses/wp" method="POST">
      <br>
      <div class="header">Registeration Form</div>
      <br>
      <div class="form-content">
        <label>Full name:</label>
        <input type="text" placeholder="Full Name" name="FullName">
      </div>
      <div class="form-content">
        <label>Date of Birth:</label>
        <input type="date" name="DoB">
      </div>
      <div class="form-content">
        <label>Email:</label>
        <input type="email" placeholder="Your Email" name="Email">
      </div>
      <div class="form-content">
        <label>Phone:</label>
        <input type="tel" placeholder="Your Phone Number" name="Phone" pattern="[0]{1}[0-9]{2}-[0-9]{3}-[0-9]{4}">
      </div>
      <div class="form-content">
        <label>Organization:</label>
        <input type="text" placeholder="Your Organization" name="Organization">
      </div>
      <div class="button">
        <input type="submit" value="Click to submit">
        &nbsp; &nbsp;
        <input type="reset" value="Erase and Restart">
      </div>
    </form>
  </body>
</html>