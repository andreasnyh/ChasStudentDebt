<?php $__env->startSection('content'); ?>
<div class="flex-center position-ref full-height">
            <?php if(Route::has('login')): ?>
                <div class="top-right links">
                    <?php if(auth()->guard()->check()): ?>
                        <a href="<?php echo e(url('/home')); ?>">Home</a>
                    <?php else: ?>
                        <a href="<?php echo e(route('login')); ?>">Login</a>

                        <?php if(Route::has('register')): ?>
                            <a href="<?php echo e(route('register')); ?>">Register</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <div class="content">
                <div class="title m-b-md">
                    Lägg till student
                </div>

                <form action="/submit" method="ADD">
                    <select type="text" name="class"  required>

                        <option selected hidden>--Välj Klass--</option>

                        <option name="FWD18" value="FWD18">FWD18</option>
                        <option name="FWD19" value="FWD19">FWD19</option>
                        <option name="IK19" value="IK19">IK19</option>

                    </select>
                    <table>
                        <input type="text" name="name" placeholder="Name">
                        <input type="text" name="email" placeholder="Email">
                    </table>
               
                    <button type="submit">Lägg till student</button>
                </form>
                <form action="/">
                    <button type="submit">Tillbaka till meny</button>
                </form>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\1dylan\Desktop\sites\ChasStudentDebt\resources\views/addStudent.blade.php ENDPATH**/ ?>