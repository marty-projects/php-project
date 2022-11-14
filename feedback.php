<?php include 'inc/header.php';

$feedback =
    [
            'id' => '1',
            'name' => 'Betty White',
            'email' => 'beth@hotmail.com',
            'body' => 'blablabla'
    ]

?>
<h2> Past Feedback</h2>

<?php if(empty($feedback)): ?>
    <p class="lead mt3">There is no feedback</p>
<?php endif; ?>
    <?php foreach($feedback as $item): ?>
    <div class="card my-3">
     <div class="card-body">
        <?php echo $item['body']; ?>
     </div>
   </div>
  <?php endforeach; ?>

<?php include 'inc/footer.php'; ?>

