<!DOCTYPE html>
<html lang="en"> 
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="Content_Management_Tool.css" />
    <title>My Blogging webpage</title>
  </head>
  <body>
    <div class="modal-container">
      <div class="modal">
        <button class="modal__btn"><img src="close.png" alt=""></button>
        <h2 class="modal__title"></h2>
        <p class="modal__body"></p>
      </div>
    </div>
    <div class="form-container">
      <h1>CONTENT INPUT</h1>
      <h3>Add a New Content:</h3>
      <form action="connect.php" method="POST"  enctype="multipart/form-data">
      
        <label for="name">Name
          <input type="text" id="name" name="names" placeholder="Enter your Name." class="form-data"/>
</label>

        <label for="title"
          >Title
          <input type="text" id="title" name="titles" placeholder="Enter a Content title."/>
        </label>

        <label for="image"
        >Upload Image :
        <input type="file" id="title" name="images" placeholder="Upload Image." />
      </label><br><br>

        <label for="note"
          >Content<textarea
            type="text"
            id="note"
            cols="40"
            rows="20"
            placeholder="Enter your content."
            name="contents"></textarea>
        </label>
        <input type="submit" class="submit" value="submit" name="submit">
      </form>
    </div>
    <div class="note-container"></div>
    <script src="Content_Management_Tool.js" defer></script>
  </body>
</html>