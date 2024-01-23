<?php require($_SERVER['DOCUMENT_ROOT'] . "/friends4sale/env_config/db_connect.php"); ?>
<?php include($_SERVER['DOCUMENT_ROOT'] . "/friends4sale/components/header.php"); ?>

<div class='container'>
    <form action="update_profile.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="profile_picture">Profile Picture:</label>
            <input type="file" name="profile_picture" id="profile_picture" class="form-control-file">
        </div>

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>

        <br>

        <div class="form-group">
            <label for="bio">Bio:</label>
            <textarea name="bio" id="bio" class="form-control"></textarea>
        </div>

        <br>

        <!-- Add more fields as needed -->

        <div class="form-group">
            <label for="price">Price:</label>
            <small class='text-danger'>Price once set cannot be changed</small>
            <input type="number" name="price" id="price" class="form-control">
        </div>

        <br>
        
        <input type="submit" value="Update Profile" class="btn btn-primary">
    </form>
</div>