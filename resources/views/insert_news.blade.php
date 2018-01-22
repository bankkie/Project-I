<html>
  <head>
    <title>Laravel</title>
    
    <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

    <style>
      body {
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        color: #B0BEC5;
        display: table;
        font-weight: 100;
        font-family: 'Lato';
      }

      .container {
        text-align: center;
        display: table-cell;
        vertical-align: middle;
      }

      .content {
        text-align: center;
        display: inline-block;
      }

      .title {
        font-size: 96px;
        margin-bottom: 40px;
      }

      .quote {
        font-size: 24px;
      }

      label{
        margin-right:20px;
      }

      form{
        background:#f5f5f5;
        padding:20px;
        border-radius:10px;
      }

      input[type="submit"]{
        background:#0098cb;
        border:0px;
        border-radius:5px;
        color:#fff;
        padding:10px;
        margin:20px auto;
      }

    </style>
  </head>
  <body>
    <div class="container">
      <div class="content">
        
        <h1>File Upload</h1>
        <form action="{{ URL::to('upload') }}" method="post" enctype="multipart/form-data">
          <label>Select image to upload:</label>
            <input type="file" name="file" id="file">
            <input type="submit" value="Upload" name="submit">
          <input type="hidden" value="{{ csrf_token() }}" name="_token">
        </form>

      </div>
    </div>
  </body>
</html>