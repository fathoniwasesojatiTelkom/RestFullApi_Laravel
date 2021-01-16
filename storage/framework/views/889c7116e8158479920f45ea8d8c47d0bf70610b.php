<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
var username="anakanjing@gmail.com";
var password="anjing12345";
$.ajax({
  type: "GET",
  url: "http://127.0.0.1:8000/api/country",
  dataType: 'json',
  headers: {
    "Authorization": "Basic " + btoa(username + ":" + password)
  },
  success: function (result){
      $.each(result, function(key, val){
          console.log(val['name']);
      });
  }
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>