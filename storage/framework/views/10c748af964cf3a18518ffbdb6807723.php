
<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layout','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="container py-md-5 container--narrow">
      <div class="d-flex justify-content-between">
        <h2>Example Post Title Here</h2>
        <span class="pt-2">
          <a href="#" class="text-primary mr-2" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fas fa-edit"></i></a>
          <form class="delete-post-form d-inline" action="#" method="POST">
            <button class="delete-post-button text-danger" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fas fa-trash"></i></button>
          </form>
        </span>
      </div>

      <p class="text-muted small mb-4">
        <a href="#"><img class="avatar-tiny" src="https://gravatar.com/avatar/f64fc44c03a8a7eb1d52502950879659?s=128" /></a>
        Posted by <a href="#">kittydoe</a> on 2/3/2019
      </p>

      <div class="body-content">
        <p>My roommate yells at me when I destroy things, but I do what I want.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam praesentium laboriosam unde fuga accusamus reiciendis laudantium quis consequatur, beatae temporibus nemo, tempora voluptatum, perspiciatis accusantium ullam molestiae cupiditate incidunt architecto.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam praesentium laboriosam unde fuga accusamus reiciendis laudantium quis consequatur, beatae temporibus nemo, tempora voluptatum, perspiciatis accusantium ullam molestiae cupiditate incidunt architecto.</p>
      </div>
    </div>

   <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Aleva\Desktop\Proyectos\Blog PHP\app\resources\views/single-post.blade.php ENDPATH**/ ?>