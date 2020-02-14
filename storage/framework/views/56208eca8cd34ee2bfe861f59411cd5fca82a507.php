

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

                <form>
                    <select type="text" required>

                        <option selected hidden>--Välj Klass--</option>

                        <option value="FWD18">FWD18</option>
                        <option value="FWD19">FWD19</option>
                        <option value="IK19">IK19</option>

                    </select>
                    <table>
                        <thread>Namn</Thread>
                        <tr>
                            <input type="text">
                        </tr>
                        <thread>Email</Thread>
                        <tr>
                            <input type="text">
                        </tr>
                    </table>
               
                    <button type="studentAdd">Lägg till student</button>
                </form>
                <form action="/">
                    <button type="submit">Tillbaka till meny</button>
                </form>
            </div>
        </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/vagrant/code/ChasStudentDebt/resources/views/addStudent.blade.php ENDPATH**/ ?>