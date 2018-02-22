<?php $__env->startSection('contenido'); ?>
<style type="text/css">
	
	b:hover { 
    color: white;
}
</style>
<section id="subheader" data-stellar-background-ratio=".2">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php if(isset($productos[0])): ?><h1><?php echo e($productos[0]->serie->str_producto); ?> </h1> <?php endif; ?>

			</div>
		</div>
	</div>
</section>


<section id="section-blog">
	<div class="container">
		<div class="col-md-3">
			<div class="widget widget_category">
				<h4>SERIES</h4>
				<ul>
					<?php $url=Request::path(); $porciones = explode("/", $url);?>
					<?php $__currentLoopData = $serie; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li>

						<a href="<?php echo e(route('catalogo.producto', $value->id)); ?>"><?php if(isset($porciones[1])): ?> <?php if($porciones[1]==$value->id): ?><strong><?php endif; ?> <?php endif; ?>
							<?php echo e($value->str_producto); ?>


							<?php if(isset($porciones[1])): ?> <?php if($porciones[1]==$value->id): ?></strong><?php endif; ?> <?php endif; ?>
						</a>
					</li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</ul>
			</div>

		</div>
		<div class="col-md-9">
			<div class="row">
				<div  id="buscador1" style=" margin-left: 70%;">
					<input type="search" id="buscar" style="width:230px;" data-token="<?php echo e(csrf_token()); ?>" name="autocompleted" class="form-control input-sm input-comparar" placeholder="Buscar..." />
					<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" id="token">
					<input type="hidden" name="idproducto" value="<?php if(isset($productos[0])): ?><?php echo e($productos[0]->idproducto); ?> <?php endif; ?>" id="idproducto">

				</div>
				<div class="col-md-3 col-md-offset"  id="busqueda" style=" margin-left: 66%;position:absolute;z-index: 2;">
				</div>
			</div>
			<div class="row">

				<?php $__currentLoopData = $productos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

				<div class="col-sm-4">
					<!-- normal -->
					<div class="ih-item square effect3 bottom_to_top" style="box-shadow: none !important; border:0px !important; width: 250px !important; height: 230px !important"><a href="<?php echo e(route('catalogo.informacion',$product->id)); ?>" target="_blank">
						<div class="img"><img src="<?php echo e($product->str_urlimage); ?>" alt="img" width="230" height="230"></div>
						<div class="info" style="height: 35px !important;">
							<p style="cursor: pointer;"><b onclick="window.open('<?php echo e($product->str_urlficha); ?>', '_blank')">Info |</b> <b style="cursor: pointer;" onclick="window.open('<?php echo e($product->str_urlguia); ?>', '_blank')">Sales guide</b></p>
						</div></a></div>
						<!-- end normal -->
						<center> <strong><?php echo e($product->str_nombre); ?> </strong></center><br>
					</div>

					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</div>

				<div class="row">
					<div class="col-md-12">
						<div class="text-center">
							<ul class="pagination">
								<li><?php echo $productos->render(); ?></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>
	<?php $__env->stopSection(); ?>
<?php echo $__env->make('template.plantilla', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>