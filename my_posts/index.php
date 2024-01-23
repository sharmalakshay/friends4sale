<?php include($_SERVER['DOCUMENT_ROOT'] . "/friends4sale/env_config/db_connect.php");
include($_SERVER['DOCUMENT_ROOT'] . "/friends4sale/components/header.php"); 
?>

<div class="container">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <!-- New Post Form -->
            <form action="post_handler.php" method="post">
                <div class="mb-3">
                    <textarea class="form-control" id="newPost" name="newPost" rows="3"
                        placeholder="What's on your mind?"></textarea>
                </div>
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Post</button>
                </div>
            </form>
        </div>
    </div>
</div>

<br>

<!-- Previous Posts -->
<?php
    $result = mysqli_query($conn, "SELECT * FROM posts ORDER BY id DESC");

    // Fetch the posts
    while($row = mysqli_fetch_assoc($result)) {
        $post = $row['post_text'];
        $timestamp = $row['posted_on'];
        $price = $row['price'];

        // Display the posts
        echo "<div class='post' style='border: 1px solid #ccc; padding: 10px; margin-bottom: 10px;'>";
        echo "<p style='margin: 0;'>" . htmlspecialchars($post) . "</p>";
        echo "<small class='timestamp' style='display: block; margin-top: 10px; color: #888;' data-timestamp='" . htmlspecialchars($timestamp) . "'></small>";
        echo "<p>Price: $price</p>";
        echo "<button type='button' class='btn btn-sm btn-primary' data-bs-toggle='modal' data-bs-target='#editPriceModal'>Edit Price</button>";
        echo "</div>";
    }

    // Free result set
    mysqli_free_result($result);
?>

<!-- Edit Price Modal -->
<div class="modal fade" id="editPriceModal" tabindex="-1" aria-labelledby="editPriceModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editPriceModalLabel">Edit Price</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="update_price_handler.php" method="post">
                    <div class="mb-3">
                        <label for="newPrice" class="form-label">New Price</label>
                        <input type="text" class="form-control" id="newPrice" name="newPrice" placeholder="Enter new price">
                    </div>
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

