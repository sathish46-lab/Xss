<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Cross-Site Scripting XSS</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'><link rel="stylesheet" href="./style.css">
</head>
<body>
<div class="container">
        <h2> XSS vulnerability </h2>
        <h6> Submitted Comments here 👉 </h6>
    </div>

        <?php
        if (isset($_POST['submit'])) {
            $comment = $_POST['comment'];
            echo "<div id='comment'>$comment</div>";
        }
        ?>

    <div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			          	<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
											<h4 class="mb-4 pb-3">Comment</h4>
                                            <form method="POST" action="">
                                                <label for="comment">Leave a comment:</label><br>
                                                <textarea name="comment" rows="3" cols="20"></textarea><br>
                                                <input type="submit" name="submit" value="Submit">
                                            </form>
				      					</div>
			      					</div>
			      				</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
    <script>alert('Alert XSS Vulnerability💀');</script>
</body>
</html>
