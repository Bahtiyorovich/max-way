<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example Image</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <h3 class="text-center text-danger"><b>Add New Post</b></h3>
                <div class="form-group">
                    <form action="/post" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="title" class="form-control m-2" placeholder="title">
                        <input type="text" name="author" class="form-control m-2" placeholder="author">
                        <textarea name="body"  cols="20" rows="4" class="form-control m-2" placeholder="body"></textarea>
                        <label for="m-2">Cover Image</label>
                        <input type="file" name="cover" id="input-now-custom-3" class="form-control m-2">
                        <label for="m-2">Image</label>
                        <input type="file" name="images[]" id="input-now-custom-3" class="form-control m-2" multiple>
                        <button type="submit" class="btn btn-danger mt-3">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>