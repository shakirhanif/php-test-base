<?php include 'inc/header.php';?>
<?php
$sql = 'SELECT * FROM php_dev.feedback;';
$result = mysqli_query($conn,$sql);
  $feedback = mysqli_fetch_all($result,MYSQLI_ASSOC);
  //  [
  //   [
  //     'id'=>'3',
  //     'name'=>'user3',
  //     'email'=>'user3@email.com',
  //     'body'=>'user3 body',
  //   ],
  //   [
  //     'id'=>'4',
  //     'name'=>'user4',
  //     'email'=>'user4@email.com',
  //     'body'=>'user4 body',
  //   ],
  //   [
  //     'id'=>'5',
  //     'name'=>'user5',
  //     'email'=>'user5@email.com',
  //     'body'=>'user5 body',
  //   ],
  // ];
?>
   
    <h2>Feedback</h2>
    <?php if (empty($feedback)):?>
      <p>there is no feedback</p>
    <?php endif;?>

    <?php foreach($feedback as $X):?>

<div class="card my-3 w-75 text-center">
  <div class="card-body">
    <?php echo $X['body']; ?>
    <div class="text-secondary mt-2">
      By <?php echo $X['name'];?>
      on <?php echo $X['DATETIME']; ?>
    </div>
     </div>
  </div>
<?php endforeach;?>
   <?php include 'inc/footer.php';?>

   