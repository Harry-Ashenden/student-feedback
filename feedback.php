<?php include 'inc/header.php'; ?>

<?php 
  $sql = 'SELECT * FROM feedback';
  $result = mysqli_query($conn, $sql);
  // savinmg as an associative array
  $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

    <h2>Past Feedback</h2>

    <?php if(empty($feedback)): ?>
      <p class="lead at3">There is no feedback</p>
    <?php endif; ?>

    <?php foreach($feedback as $item): ?>
    <div class="card my-3 w-75">
      <div class="card-body text-center">
        <?php echo $item['body']; ?> 
        <div class="text-secondary nt-2">
          <!-- Formatting date to just DD-MM-YYYY by converting string to time -->
          By <?php echo $item['name']; ?> on <?php echo date('d-m-Y', strtotime($item['date'])); ?>
        </div>
      </div>
    </div>
    <?php endforeach; ?>
   
<?php include 'inc/footer.php'; ?>