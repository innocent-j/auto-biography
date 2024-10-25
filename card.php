<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['id'])) {
    header("Location: index.html");  // Redirect to login if not logged in
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Autobiography - <?php echo $_SESSION['first_name'] . " " . $_SESSION['last_name'] ?></title>
    <link rel="stylesheet" href="css/card.css" />
    <link rel="icon" href="assets/web0.png" />
  </head>
  <body>

<div class="logout-button-container" onclick="window.location.href='logout.php'">
  <button href="#" class="button" style="--clr: #7808d0">
    <span class="button__icon-wrapper">
      <svg
        viewBox="0 0 14 15"
        fill="none"
        xmlns="http://www.w3.org/2000/svg"
        class="button__icon-svg"
        width="10"
      >
        <path
          d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"
          fill="currentColor"
        ></path>
      </svg>
  
      <svg
        viewBox="0 0 14 15"
        fill="none"
        width="10"
        xmlns="http://www.w3.org/2000/svg"
        class="button__icon-svg button__icon-svg--copy"
      >
        <path
          d="M13.376 11.552l-.264-10.44-10.44-.24.024 2.28 6.96-.048L.2 12.56l1.488 1.488 9.432-9.432-.048 6.912 2.304.024z"
          fill="currentColor"
        ></path>
      </svg>
    </span>
    Sign out
  </button>
</div>



  <div class="card">
    <span class="title">Autobiography</span>
    <div class="comments">
      <div class="comment-react">
        <button>
          <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
            <path fill="#707277" stroke-linecap="round" stroke-width="2" stroke="#707277" d="M19.4626 3.99415C16.7809 2.34923 14.4404 3.01211 13.0344 4.06801C12.4578 4.50096 12.1696 4.71743 12 4.71743C11.8304 4.71743 11.5422 4.50096 10.9656 4.06801C9.55962 3.01211 7.21909 2.34923 4.53744 3.99415C1.01807 6.15294 0.221721 13.2749 8.33953 19.2834C9.88572 20.4278 10.6588 21 12 21C13.3412 21 14.1143 20.4278 15.6605 19.2834C23.7783 13.2749 22.9819 6.15294 19.4626 3.99415Z"></path>
          </svg>
        </button>
        <hr>
        <span>25</span>
      </div>
      <div class="comment-container">
        <div class="user">
          <div class="user-pic">
            <img 
                src="assets/<?php echo $_SESSION['image_profile'] ?>" 
                alt="<?php echo $_SESSION['first_name'] ?>"
                style="width: 40px; height: 40px; border-radius: 50%; display: block;">
          </div>
          <div class="user-info">
            <span><?php echo $_SESSION['first_name'] . " " . $_SESSION['last_name'] . " " . $_SESSION['name_suffix']; ?>, <?php echo $_SESSION['age']; ?></span>
            <p id="date-time"></p>
          </div>
        </div>
        <p class="comment-content">
          @ <?php echo $_SESSION['address']; ?>
          <br>
          <br>
        <span>Life’s busy, but there’s always time for good friends, good vibes, and a coffee to get through the late nights. Here’s to the next chapter—making the most of every moment, staying true, and keeping that ambition high. 📚💪 #CollegeLife #OnTheGrind #GoodVibesOnly</span>
        </p>
      </div>
    </div>

    <div class="text-box">
      <div class="box-container">
        <textarea placeholder="Reply"></textarea>
        <div>
          <div class="formatting">
            <button type="button">
              <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M5 6C5 4.58579 5 3.87868 5.43934 3.43934C5.87868 3 6.58579 3 8 3H12.5789C15.0206 3 17 5.01472 17 7.5C17 9.98528 15.0206 12 12.5789 12H5V6Z" clip-rule="evenodd" fill-rule="evenodd"></path>
                <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M12.4286 12H13.6667C16.0599 12 18 14.0147 18 16.5C18 18.9853 16.0599 21 13.6667 21H8C6.58579 21 5.87868 21 5.43934 20.5607C5 20.1213 5 19.4142 5 18V12"></path>
              </svg>
            </button>
            <button type="button">
              <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M12 4H19"></path>
                <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M8 20L16 4"></path>
                <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M5 20H12"></path>
              </svg>
            </button>
            <button type="button">
              <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M5.5 3V11.5C5.5 15.0899 8.41015 18 12 18C15.5899 18 18.5 15.0899 18.5 11.5V3"></path>
                <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M3 21H21"></path>
              </svg>
            </button>
            <button type="button">
              <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M4 12H20"></path>
              <path stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M17.5 7.66667C17.5 5.08934 15.0376 3 12 3C8.96243 3 6.5 5.08934 6.5 7.66667C6.5 8.15279 6.55336 8.59783 6.6668 9M6 16.3333C6 18.9107 8.68629 21 12 21C15.3137 21 18 19.6667 18 16.3333C18 13.9404 16.9693 12.5782 14.9079 12"></path>
              </svg>
            </button>
            <button type="button">
              <svg fill="none" viewBox="0 0 24 24" height="16" width="16" xmlns="http://www.w3.org/2000/svg">
  <circle stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277" r="10" cy="12" cx="12"></circle>
  <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#707277" d="M8 15C8.91212 16.2144 10.3643 17 12 17C13.6357 17 15.0879 16.2144 16 15"></path>
  <path stroke-linejoin="round" stroke-linecap="round" stroke-width="3" stroke="#707277" d="M8.00897 9L8 9M16 9L15.991 9"></path>
  </svg>
            </button>
            <button type="submit" class="send" title="Send">
              <svg fill="none" viewBox="0 0 24 24" height="18" width="18" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#ffffff" d="M12 5L12 20"></path>
                <path stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" stroke="#ffffff" d="M7 9L11.2929 4.70711C11.6262 4.37377 11.7929 4.20711 12 4.20711C12.2071 4.20711 12.3738 4.37377 12.7071 4.70711L17 9"></path>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>



  <script>
      function formatDateTime(date) {
          const options = { weekday: 'long', month: 'long', day: 'numeric', hour: 'numeric', minute: 'numeric', hour12: true };
          return date.toLocaleString('en-US', options).replace(',', ''); // Removing the comma for formatting
      }

      const now = new Date();
      document.getElementById('date-time').textContent = formatDateTime(now);
  </script>
  </body>
</html>
