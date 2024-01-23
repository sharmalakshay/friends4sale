<?php 
require($_SERVER['DOCUMENT_ROOT'] . "/friends4sale/env_config/db_connect.php");
include($_SERVER['DOCUMENT_ROOT'] . "/friends4sale/components/header.php"); 
?>

<?php
    $result = mysqli_query($conn, " SELECT 
                                        posts.id AS post_id,
                                        posts.post_text,
                                        posts.posted_on,
                                        posts.price,
                                        users.display_name, 
                                        COUNT(tips.id) AS tips_count
                                    FROM posts
                                    JOIN users ON posts.user_id = users.id
                                    LEFT JOIN tips ON posts.id = tips.post_id
                                    GROUP BY posts.id
                                    ORDER BY posts.id DESC;
                                    ");

    if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            $timestamp = $row['posted_on'];
            echo '<div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <!-- User Post -->
                        <div class="card mb-4">
                            <div class="card-header">
                                <h5 class="mb-0">' . $row["display_name"] . '</h5>
                                <small class="timestamp" style="display: block; margin-top: 10px; color: #888;" data-timestamp="' . htmlspecialchars($timestamp) . '"></small>
                            </div>
                            <div class="card-body">
                                <p class="card-text">' . $row["post_text"] . '</p>
                                <p class="card-text" id="tipCount'.$row["post_id"].'">Tip Jar: ' . $row["tips_count"] . '</p>
                                <div class="btn-group mt-3" role="group" aria-label="Basic example">';
                                echo '<button type="button" class="btn bg-lakred">Boo</button>';
                                echo '<button type="button" class="btn bg-lakblue" id="tipButton'.$row["post_id"].'" onclick="submit_tip(' . $row["post_id"] . ')">Tip</button>';                                    
                                echo '
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';
        }
    } else {
        echo "0 results";
    }
?>