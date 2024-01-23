<?php $folder = basename($_SERVER['REQUEST_URI']); ?>
<!DOCTYPE html>
<html>
<head>
    <!-- Change this later to dynamically change the title based on URL -->
    <title><?=$_SITE['site_name']?></title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>

    <!-- jquery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- moment.js -->
    <script src="https://momentjs.com/downloads/moment.js"></script>

    <!-- custom css -->
    <link rel="stylesheet" href="/friends4sale/css/style.css">

    <!-- custom js -->
    <script src="/friends4sale/js/script.js"></script>

</head>

<?php if(!isset($_SESSION[user_id])) return; ?>

<header>
    <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">

        <div class="container-fluid">
            <a class="navbar-brand" href="/friends4sale"><?=$_SITE['site_name']?></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <form class="d-flex">
                        <input class="form-control me-2" type="search" name="search" placeholder="Search People or Posts" aria-label="Search">
                    </form>
                    <li class="nav-item">
                        <a class="nav-link <?= $folder == 'profile' ? 'active' : '' ?>" aria-current="page" href="/friends4sale/profile">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $folder == 'friends' ? 'active' : '' ?>" aria-current="page" href="/friends4sale/friends">Friends</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $folder == 'my_posts' ? 'active' : '' ?>" aria-current="page" href="/friends4sale/my_posts">My Posts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $folder == 'messages' ? 'active' : '' ?>" aria-current="page" href="/friends4sale/messages">Messages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $folder == 'notifications' ? 'active' : '' ?>" aria-current="page" href="#!" onclick="alert('Add notifications dropdown')">Notifications</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?= $folder == 'settings' ? 'active' : '' ?>" aria-current="page" href="/friends4sale/settings">Settings</a>
                    </li>
                </ul>
                <a class="btn btn-sm btn-danger" href="/friends4sale/logout.php">Logout</a>
            </div>
        </div>
    </nav>
</header>
<br>