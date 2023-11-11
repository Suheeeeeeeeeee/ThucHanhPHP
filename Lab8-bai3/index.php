<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="//cdn.ckeditor.com/4.22.1/full/ckeditor.js"></script>
</head>
<body>
    <form action="mail.php" enctype="multipart/form-data" method="POST">
        <div class="container">
            <h3>Email tới bạn</h3>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="tieude">Subject</label>
                <input type="text" class="form-control" name="tieude" placeholder="ten">
            </div>
            <div class="form-group">
                <label for="post_content">Nội dung</label>
                <textarea name="content" id="post_content" class="form-control" rows="10" cols="50"></textarea>
            </div>
            <div class="form-group">
                <label for="file">File đính kèm</label>
                <input type="file" class="form-control" name="file">
            </div>
            <br>
            <button type="submit" class="btn btn-primary">Gửi</button>
        </div>
    </form>

    <script type="text/javascript">
        CKEDITOR.replace('post_content');
    </script>
</body>
</html>
