

<?php $__env->startSection('content'); ?>

<section class="page-header">
    <div class="container">
        <h1 class="fw-bold display-4">Contact Us</h1>
        <p class="lead">Let’s discuss your next AI project.</p>
    </div>
</section>

<section class="section-padding">
    <div class="container">
        <div class="row g-5 align-items-start">

            <div class="col-md-5">
                <h2 class="section-title">Start a Conversation</h2>
                <p>
                    Share your idea, business challenge, or AI project requirement.
                    Our team will review your message and get back to you.
                </p>

                <div class="glass-card mt-4">
                    <p><i class="bi bi-envelope me-2 text-primary"></i> hello@insightnova.ai</p>
                    <p><i class="bi bi-geo-alt me-2 text-primary"></i> Dhaka, Bangladesh</p>
                    <p class="mb-0"><i class="bi bi-clock me-2 text-primary"></i> Response within 24 hours</p>
                </div>
            </div>

            <div class="col-md-7">
                <?php if(session('success')): ?>
                    <div class="alert alert-success">
                        <?php echo e(session('success')); ?>

                    </div>
                <?php endif; ?>

                <form action="<?php echo e(route('contact.store')); ?>" method="POST" class="contact-card">
                    <?php echo csrf_field(); ?>

                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" value="<?php echo e(old('name')); ?>">
                        <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-danger"><?php echo e($message); ?></small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" value="<?php echo e(old('email')); ?>">
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-danger"><?php echo e($message); ?></small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Subject</label>
                        <input type="text" name="subject" class="form-control" value="<?php echo e(old('subject')); ?>">
                        <?php $__errorArgs = ['subject'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-danger"><?php echo e($message); ?></small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Message</label>
                        <textarea name="message" class="form-control" rows="5"><?php echo e(old('message')); ?></textarea>
                        <?php $__errorArgs = ['message'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-danger"><?php echo e($message); ?></small>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>

                    <button type="submit" class="btn-primary-custom w-100">
                        Send Message
                    </button>
                </form>
            </div>

        </div>
    </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH D:\laragon\insightnova\resources\views/pages/contact.blade.php ENDPATH**/ ?>