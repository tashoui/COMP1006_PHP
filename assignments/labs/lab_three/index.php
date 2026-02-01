<main>
    <h1> Contact Form - Bake it Till You Make It</h1>
    <!-- Contact Form -->
    <form action="process.php" method="post">
        
        <!-- first name input -->
        <label for="first_name">First Name:</label>
        <input type="text" id="name" name="first_name" required>

        <!-- last name input -->
        <label for="last_name"> Last Name:</label>
        <input type="text" id="last_name" name="last_name" required>
    
        <!-- email input -->
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <!-- message input -->
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="4" cols="50" placeholder="Please Input Message Here" required ></textarea>

        <!-- message input -->
        <input type="submit" value="Submit">

    </form>
</main>

