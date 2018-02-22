<?php $__env->startSection('contenido'); ?>


<section style="padding: 50px !important; background: black">
</section>
<?php $__currentLoopData = $ficha; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<img src="<?php echo e($value->str_url); ?>" style="width: 100%;" alt="img">
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

<!-- empieza carousel-->
<?php if(isset($carousel)): ?>
<div class='row' style="background: <?php echo e($carousel[0]->str_fondo); ?>">
	
	<div class='col-md-12' id="cambio_color">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">

			<div class="carousel-inner">
				<?php $i=0; ?>
				<?php $__currentLoopData = $carousel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<div class="item <?php if($i==0): ?> active <?php endif; ?>">
				<?php $redimencion=explode(".", $pr->str_url);
				?>
					<center><img alt="img" src="<?php echo e($pr->str_url); ?>" <?php if(isset($redimencion)): ?> <?php if($redimencion[2]!='png'): ?> style="width:80%;" <?php endif; ?> <?php endif; ?>></center>
				</div>
				<?php $i++; ?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="fa fa-chevron-left" style="margin-top:100%"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="fa fa-chevron-right" style="margin-top:100%"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	
	<center><br>
		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" id="token">
		<ul style="text-align:center;">
			<?php $__currentLoopData = $color; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $valor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<li style="display: inline-block;">
				<div style="margin: 10px; border-bottom: 3px solid <?php echo e($valor->str_color); ?>; color:#7b7b7b; font-size: 22px; cursor: pointer" onclick="cambio_color('<?php echo e($valor->str_color); ?>', <?php echo e($valor->idequipo); ?>)"><?php echo e($valor->str_nombre); ?>&nbsp; </div>
			</li>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</ul>
	</center>
</div>
<?php endif; ?>
<!--final carrusel -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.plantilla', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>