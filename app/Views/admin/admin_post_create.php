<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>N4S</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('css/bootstrap.min.css') ?>" />
</head>

<body>
    <?= $this->include('admin/navbar') ?>

    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container py-5">
            <h1 class="display-5 fw-bold">post >New </h1>
        </div>
    </div>

    <div class="container">
 <form action="" method="post" id="text-editor">
 <div class="form-group mb-2">
 <label for="title">Title</label>
 <input type="text" name="title" class="form-control"
placeholder="Post title" required>
 </div>
 <div class="form-group mb-2">
 <textarea name="content" class="form-control" cols="30"
rows="10" placeholder="Write a great post!"></textarea>
 </div>
 <div class="form-group">
 <button type="submit" name="status" value="published"
class="btn btn-primary">Publish</button>
 <button type="submit" name="status" value="draft" class="btn
btn-secondary">Save to Draft</button>
 </div>
 </form>
</div>

    <div class="container py-4">
        <footer class="pt-3 mt-4 text-muted border-top">
            <div class="container">
                &copy; <?= date('Y') ?>
            </div>
        </footer>
    </div>

    <!-- Jquery dan Bootstrap JS -->
    <script src="<?= base_url('js/jquery.min.js') ?>"></script>
    <script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>