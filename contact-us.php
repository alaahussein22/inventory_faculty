<?php include 'includes/session.php'; ?>
<?php include 'includes/navbar.php'; ?>
<?php include 'includes/header.php'; ?>

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $firs       =   $_POST['firs'];
    $last       =   $_POST['last'];
    $email      =   $_POST['email'];
    $message    =   $_POST['message'];
    $now        =   date('Y-m-d');

    if ($firs == '' || $last == '' || $email == '' || $message == '') {
        $_SESSION['error'] = 'Fields is required';
        @header('location: contact-us.php');
    } else {
        $conn = $pdo->open();
        $stmt = $conn->prepare("INSERT INTO  feedback (firs, last, email ,message, created_at) VALUES (:firs, :last, :email, :message, :now)");
        $stmt->execute([
            'firs' => $firs,
            'last' => $last,
            'email' => $email,
            'message' => $message,
            'now' => $now
        ]);
        $_SESSION['success'] = 'The request has been sent successfully';
        @header('location: contact-us.php');
    }
}

?>


<div class="contact-body">

    <!-- <p id="successText" style="color: blue; font-size: 30px; margin: 5px;"></p> -->

    <div class="contact-head">
        <img width="50px" height="50px" src="./images/chat.png">
        <h1 class="contact">Contact US</h1>
        <p class="message" style="margin:30px 0">
            Do you have any questions? Please do not hesitate to
            contact us directly. <br>Our team will communicate with you within
            a matter of minutes to help you.
        </p>
    </div>
    <?php
    //   start login page
    if (isset($_SESSION['error'])) {
        echo "
            <div class='callout callout-danger text-center'>
                <p>" . $_SESSION['error'] . "</p>
            </div>
        ";
        unset($_SESSION['error']);
    }
    if (isset($_SESSION['success'])) {
        echo "
                <div class='callout callout-success text-center'>
                    <p>" . $_SESSION['success'] . "</p>
                </div>
        ";
        unset($_SESSION['success']);
    }
    ?>
    <form method="POST" class="row g-3 needs-validation" style="justify-content:center" novalidate>
        <div class="col-md-7 m-3">
            <label for="validationCustom01" class="form-label">First Name</label>
            <input type="text" name="firs" class="form-control" id="validationCustom02" placeholder="Enter your first name" required>
            <div class="valid-feedback">
                <!-- Looks good! -->
            </div>
        </div>
        <div class="col-md-7 m-3">
            <label for="validationCustom02" class="form-label">Last Name</label>
            <input type="text" name="last" class="form-control" id="validationCustom02" placeholder="Enter your last name" required>
            <div class="valid-feedback">
                <!-- Looks good! -->
            </div>
        </div>
        <div class="col-md-7 m-3">
            <label for="validationCustom02" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="validationCustom02" placeholder="Enter your Email" required>
            <div class="valid-feedback">
                <!-- Looks good! -->
            </div>
        </div>
        <div class="col-md-7 m-3">
            <label for="validationTextarea" class="form-label">Your Message</label>
            <textarea type="text" name="message" class="form-control" id="validationCustom02" required placeholder="Required example textarea" required></textarea>
            <div class="valid-feedback">
                Please enter a message in the textarea.
            </div>
        </div>
        </div>

        <div class="col-md-7 m-3">
            <!-- <label for="validationCustom02" class="form-label">Subject</label> -->
            <input placeholder="Attach your file " type="file"
             class="form-control" id="validationCustom02"
                required>
            <div class="valid-feedback">
                <!-- Looks good! -->
            </div>
        </div>
        

        

        <div class="button-send col-md-7 m-3">
            <button class="send-btn btn btn-primary" onclick="sentMail()" type="submit">Send</button>
        </div>

    </form>
</div>

<?php include 'includes/scripts.php' ?>
</body>

</html>